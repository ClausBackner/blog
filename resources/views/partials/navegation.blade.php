<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <section class="creative-cards style-one">
		<div class="container">
			<div class="row">
				<div class="card-column">
					<div class="card-details">
						<div class="card-icons">
							<img class="light-icon" src="https://static.vecteezy.com/system/resources/previews/001/197/963/original/tooth-png.png" alt="icon" />
						</div>
						<h3><a href="{{ asset('blog') }}">Reservas</h3>
						<p>¡Tu salud es prioridad! Agenda tu cita médica hoy mismo de manera rápida y sencilla. ¡Cuidarte nunca fue tan fácil!</p>
						<a class="read-more-btn" href="{{ asset('blog') }}"><i class="fa-solid fa-angles-right"></i></a>
					</div>
				</div>
				<div class="card-column">
					<div class="card-details">
						<div class="card-icons">
							<img class="light-icon" src="https://static.vecteezy.com/system/resources/previews/001/197/962/original/tooth-png.png" alt="icon" />
						</div>
						<h3><a href="{{ asset('servicios') }}">Servicios</a></h3>
						<p>Descubre todos los servicios que ofrecemos para tu bienestar. ¡Explora nuestro catálogo y encuentra el cuidado que necesitas en un solo lugar!</p>
						<a class="read-more-btn" href="{{ asset('servicios') }}"><i class="fa-solid fa-angles-right"></i></a>
					</div>
				</div>
				<div class="card-column">
					<div class="card-details">
						<div class="card-icons">
							<img class="light-icon" src="https://imgpanda.com/upload/ib/YQdOwN6IDJ.png" alt="icon" />
						</div>
						<h3><a href="{{ asset('nosotros') }}">Nosotros</a></h3>
						<p>¡Contáctanos por teléfono, WhatsApp, correo o redes sociales y recibe la atención que necesitas!</p>
						<a class="read-more-btn" href="{{ asset('nosotros') }}"><i class="fa-solid fa-angles-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>

</html>
