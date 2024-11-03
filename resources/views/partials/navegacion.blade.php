<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/navegaestilo.css')}}">
</head>
<body>
    <header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="#" class="nav__logo">
                    <i class="ri-hospital-fill"></i> Centro Odontologico Zamora
                </a>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__toggle-menu"></i>
                    <i class="ri-close-line nav__toggle-close"></i>
                </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li>
                        <a href="{{route('home')}}" class="nav__link">Home</a>
                    </li>

                    <!--=============== DROPDOWN 1 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Reservas <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-flashlight-line"></i>
                                    </div>

                                    <span class="dropdown__title">Citas Medicas</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="{{route('paciente.crear')}}" class="dropdown__link">Por categorias</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Consulta</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Emergencia</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-heart-3-line"></i>
                                    </div>

                                    <span class="dropdown__title">Consulta de Comprobante</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="{{ route('paciente.comprobante') }}" class="dropdown__link">Cita Registrada</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Historial medico</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Comprobacion de Citas</a>
                                        </li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </li>

                    <!--=============== DROPDOWN 2 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Servicios <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-code-line"></i>
                                    </div>

                                    <span class="dropdown__title">Información</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="{{route('servicios')}}" class="dropdown__link">Datos de Servicios</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-pen-nib-line"></i>
                                    </div>

                                    <span class="dropdown__title">Casos</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Experiencia de pacientes</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Casos impactantes</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Cirugias exitosas</a>
                                        </li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </li>

                    <li>
                        <a href="#" class="nav__link">Preguntas</a>
                    </li>

                    <!--=============== DROPDOWN 3 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Contacto <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-community-line"></i>
                                    </div>

                                    <span class="dropdown__title">About us</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="{{ asset('nosotros') }}" class="dropdown__link">About us</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Support</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Contact us</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-shield-line"></i>
                                    </div>

                                    <span class="dropdown__title">Safety and quality</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Cookie settings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Privacy Policy</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
