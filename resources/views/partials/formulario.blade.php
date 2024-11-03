<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{ asset('css/formulario.css'). '?v=' .time() }}">
</head>
<body>

<hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr>

      <main>

        <form method="POST" action= "{{ route('paciente.store') }}" id="survey-form">
            @csrf
          <div id="form-group">
            <label for="nombre" id="name-label">nombre</label>
            <input type= "text" name="nombre" id="nombre" class="formcontrol" placeholder="Nombres completos" required>
          </div>
          <div id="form-group">
            <label for="apellido" id="name-label">apellido</label>
            <input type= "text" name="apellido" id="apellido" class="formcontrol" placeholder="Apellidos completos" required>
          </div>
          <div id="form-group">
            <label for="dni" id="number-label">dni</label>
            <input type= "number" name="dni" id="dni" class="formcontrol" placeholder="dni" min="11111111" max="999999999" required>
          </div>
          <div id="form-group">
            <label for="edad" id="number-label">edad</label>
            <input type= "number" name="edad" id="edad" class="formcontrol" placeholder="edad" min="1" max="99" required>
          </div>
          <div id="form-group">
            <label for="telefono" id="number-label">telefono</label>
            <input type= "number" name="telefono" id="telefono" class="formcontrol" placeholder="Telefono" min="111111111" max="999999999" required>
          </div>

          <div id="form-group">
            <label for="direccion" id="name-label">Direccion</label>
            <input type= "text" name="direccion" id="direccion" class="formcontrol" placeholder="Dirección" required>
          </div>
          <div id="form-group">
            <label for="servicio" id="choose-rol">¿Servicio por el cual ser atendido?</label>

            <select type= "dropdown" name="servicio" id="servicio" class="formcontrol" required>
              <option disabled selected value> Seleccione una opción</option>
              <option value="Restauraciones">Restauraciones</option>
              <option value="Profilaxis">Profilaxis</option>
              <option value="Rayos X">Rayos X</option>
              <option value="Blanqueamiento">Blanqueamiento</option>
              <option value="Ortodoncia">Ortodoncia</option>
              <option value="Extracciones">Extracciones</option>
              <option value="Cirugias">Cirugias</option>
              <option value="Endodoncia">Endodoncia</option>
              <option value="Protesis">Protesis</option>
            </select>
          </div>
          <div id="form-group">
                <label for="fecha" class="formcontrol">Introduzca la fecha de la cita</label>
                <input id="fecha" name="fecha" class="formcontrol" type="datetime-local"  required>
        </div>
          <div  id="form-group">
            <label for="descripcion"> Describir sintomas (opcional)</label>
            <textarea id="descripcion" name="descripcion" class="input-area" placeholder="escribe tus comentarios aquí..." required></textarea>
          </div>

          <div id="form-group">
            <button type="submit" id="submit" class="submit-button">Enviar</button>

          </div>

        </form>
        @if (session('succes'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>

        @endif
      </main>

</body>
</html>
