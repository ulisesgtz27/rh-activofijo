<!-- component -->
<!DOCTYPE html>
<html lang="es">

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @livewireStyles

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Estilos para vista de dispositivos pequeños */
        @media (max-width: 768px) {
            .flex-wrap {
                display: flex;
                flex-wrap: wrap;
            }

            .section-small {
                width: 50%;
            }
        }

        /* Nuevos estilos para el menú de navegación */
        .navbar {
            background-color: #112959;
            /* Fondo del menú */
            padding: 10px;
        }

        .navbar a {
            color: #04B2D9;
            /* Texto de los enlaces */
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        .navbar a:hover {
            color: #66D8F2;
            /* Color al pasar el cursor */
        }

        .navbar .logout {
            background-color: #0367A6;
            /* Fondo del botón */
            color: #FFFFFF;
            /* Texto del botón */
            padding: 5px 10px;
            border-radius: 5px;
            text-transform: uppercase;
        }

        .navbar .logout:hover {
            background-color: #66D8F2;
            /* Fondo al pasar el cursor */
            color: #112959;
            /* Texto al pasar el cursor */
        }

        /* Estilos para los submenús */
        .side-nav a {
            background-color: #0367A6;
            /* Fondo de los enlaces */
            color: #ffffff;
            /* Texto de los enlaces */
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .side-nav a:hover {
            background-color: #04B2D9;
            /* Fondo al pasar el cursor */
            color: #112959;
            /* Texto al pasar el cursor */
        }

        .custom-padding {
            padding-top: 10px;
            padding-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="flex flex-col h-screen bg-gray-100">

        <!-- Barra de navegación superior -->
        <div class="navbar flex items-center justify-between">
            <div class="flex items-center">
                {{-- <div class="hidden md:flex items-center">
                    <img src="https://scontent.fpbc1-2.fna.fbcdn.net/v/t39.30808-6/407291034_133560303184134_4267188829384916885_n.png?_nc_cat=103&ccb=1-7&_nc_sid=cc71e4&_nc_eui2=AeFpiqeqNw_DJAnz42n7KluxyL2MVu4qc4vIvYxW7ipziwzQGP7Ra_Tj8xeIACcnAKr3ak2JHRgCuvUbhdn1nR1A&_nc_ohc=6NFC4dz2FdcQ7kNvgEmvZC1&_nc_oc=AdgaqFePP1l3tVzbiVoBkQyRaNKCiTZoPmOAgQ94fkkmg7M8W0BJce4sa6HrzQGeoCVCZa7qVvfoyb_hXKZjmci2&_nc_zt=23&_nc_ht=scontent.fpbc1-2.fna&_nc_gid=AsXj4-9eSaCajla6ZKJelI4&oh=00_AYDzezfLmWr2V4NCy67ycc07lmZwdCH6Dvpx7-5jn26VBQ&oe=6797ACF0" alt="Logo"
                        class="w-28 h-18 mr-2">
                    
                </div> --}}
                <div class="md:hidden flex items-center">
                    <button id="menuBtn">
                        <i class="fas fa-bars text-gray-500 text-lg"></i>
                    </button>
                </div>
            </div>

            <!-- Íconos de notificación y perfil -->
            <div class="space-x-5">
                <button>
                    <i class="fas fa-bell text-gray-500 text-lg"></i>
                </button>
                <button>
                    <i class="fas fa-user text-gray-500 text-lg"></i>
                </button>
            </div>
        </div>

        <!-- Contenido principal -->
        <div class="flex-1 flex">

            <!-- Barra lateral -->
            <div class="p-2 bg-white w-60 md:flex md:flex-col side-nav" id="sideNav">
                <nav>
                    <img src="https://scontent.fpbc1-2.fna.fbcdn.net/v/t39.30808-6/407291034_133560303184134_4267188829384916885_n.png?_nc_cat=103&ccb=1-7&_nc_sid=cc71e4&_nc_eui2=AeFpiqeqNw_DJAnz42n7KluxyL2MVu4qc4vIvYxW7ipziwzQGP7Ra_Tj8xeIACcnAKr3ak2JHRgCuvUbhdn1nR1A&_nc_ohc=6NFC4dz2FdcQ7kNvgEmvZC1&_nc_oc=AdgaqFePP1l3tVzbiVoBkQyRaNKCiTZoPmOAgQ94fkkmg7M8W0BJce4sa6HrzQGeoCVCZa7qVvfoyb_hXKZjmci2&_nc_zt=23&_nc_ht=scontent.fpbc1-2.fna&_nc_gid=AsXj4-9eSaCajla6ZKJelI4&oh=00_AYDzezfLmWr2V4NCy67ycc07lmZwdCH6Dvpx7-5jn26VBQ&oe=6797ACF0"
                        alt="Logo" class="w-30 h-20 mr-2 mt-5 mb-5">
                    <a class="block py-2.5 px-4 my-4 rounded" href="#">
                        <i class="fas fa-home mr-2"></i>Inicio
                    </a>
                    <a class="block py-2.5 px-4 my-4 rounded" href="{{ route('mostrartipoactivo') }}">
                        <i class="fas fa-file-alt mr-2"></i>Activos
                    </a>
                    <a class="block py-2.5 px-4 my-4 rounded" href="{{ route('mostraracttec') }}">
                        <i class="fas fa-users mr-2"></i>Activos Tecnologias
                    </a>
                </nav>

                <a class="block py-2.5 px-4 my-2 rounded logout" href="#">
                    <i class="fas fa-sign-out-alt mr-2"></i>Cerrar sesión
                </a>

                <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mt-2"></div>
                <p class="mb-1 px-5 py-3 text-left text-xs text-cyan-500">Copyright WCSLAT@2023</p>
            </div>

            <!-- Área de contenido dinámico -->
            <div class="flex-1 p-4">
                {{ $slot }}
            </div>

        </div>
    </div>
    @livewireScripts
    @vite('resources/css/app.css')

</body>

</html>
