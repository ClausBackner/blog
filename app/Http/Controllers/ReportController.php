<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{

    public function reportCountByService(Request $request)
    {

        $fechaInicio = $request->fechaInicio;
        $fechaFin = $request->fechaFin != null ? $request->fechaFin : $request->fechaInicio;


        $resultados = DB::table('paciente')
            ->select('servicio', DB::raw('COUNT(*) AS cantidad_pacientes'))
            ->whereBetween('fecha', [$fechaInicio, $fechaFin])
            ->groupBy('servicio')
            ->orderBy('cantidad_pacientes', 'desc')
            ->get();

        return response()->json([
            'fecha_inicio' => $fechaInicio,
            'fecha_fin' => $fechaFin,
            'resultados' => $resultados
        ]);
    }


    public function reportCountPacientByDay(Request $request)
    {
        $fechaInicio = $request->fechaInicio;
        $fechaInicioCarbon = Carbon::parse($fechaInicio);
        $lunesSemana = $fechaInicioCarbon->startOfWeek(Carbon::MONDAY)->toDateTimeString(); // Lunes de esa semana
        $domingoSemana = $fechaInicioCarbon->endOfWeek(Carbon::SUNDAY)->toDateTimeString(); // Domingo de esa semana

        $resultados = DB::table('paciente')
            ->selectRaw("
            dia_semana,
            COUNT(*) AS cantidad_pacientes
        ")
            ->fromSub(function ($query) use ($lunesSemana, $domingoSemana) {
                $query->selectRaw("
                CASE DAYOFWEEK(fecha)
                    WHEN 1 THEN 'Domingo'
                    WHEN 2 THEN 'Lunes'
                    WHEN 3 THEN 'Martes'
                    WHEN 4 THEN 'Miércoles'
                    WHEN 5 THEN 'Jueves'
                    WHEN 6 THEN 'Viernes'
                    WHEN 7 THEN 'Sábado'
                END AS dia_semana
            ")
                    ->from('paciente')
                    ->whereBetween('fecha', [$lunesSemana, $domingoSemana]);
            }, 'dias')
            ->groupBy('dia_semana')
            ->orderByRaw("
            FIELD(
                dia_semana,
                'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'
            )
        ")
            ->get();



        return response()->json([
            'fecha_ingresada' => "La fecha ingresada: " . $fechaInicio,
            'fecha_inicio' => $lunesSemana,
            'fecha_fin' => $domingoSemana,
            'datos' => $resultados
        ]);
    }


    public function reportPacientByDayPDF(Request $request)
    {
        $fechaInicio = $request->fechaInicio;

        $pacientes = Pacientes::where('fecha', $fechaInicio)->get();

        $pdf = Pdf::loadView('pdf.plantilla', compact('pacientes','fechaInicio')); // Cargar la vista

        return $pdf->download('reporte.pdf');
    }
}
