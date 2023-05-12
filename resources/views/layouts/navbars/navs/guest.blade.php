<nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark" style="background-color:#008a8a">
    <div class="container">

        <p class="text-left text-2xl font-bold" style="font-size: 20px; color: #fff; "> CENTRO DE ESTUDIOS SUPERIORES FELIPE VILLANUEVA</p>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- <div class="navbar-wrapper">
            <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <a class="navbar-brand" href="#pablo">{{ __('Colegio Felipe Villanueva') }}</a>
        </div> !-->

        <div class="collapse navbar-collapse" id="navbar-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Navbar items -->

            <ul class="navbar-nav ml-auto">
               
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="https://felipevillanueva.edu.mx/">
                        <i class="fa fa-globe"></i>
                        <span class="nav-link-inner--text">Felipe Villanueva</span>
                    </a>
                </li>
               <!--<li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('register') }}">
                        <i class="ni ni-circle-08"></i>
                        <span class="nav-link-inner--text">{{ __('Registrar') }}</span>
                    </a>
                </li>-->
                <li class="nav-item ">
                    <a href="{{ route('register') }}" class="nav-link">
                        <i class="fa fa-user-plus" aria-hidden="true"></i>{{ __('    Registrarse') }}
                    </a>
                </li>
                <li class="nav-item  active ">
                    <a href="{{ route('login') }}" class="nav-link">
                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                        {{ __('   Iniciar sesión') }}
                    </a>
                </li>         
            </ul>
        </div>

      <!--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a href="{{ route('register') }}" class="nav-link">
                        <i class="fa fa-user-plus" aria-hidden="true"></i>{{ __('    Registrarse') }}
                    </a>
                </li>
                <li class="nav-item  active ">
                    <a href="{{ route('login') }}" class="nav-link">
                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                        {{ __('   Iniciar sesión') }}
                    </a>
                </li>
            </ul>
        </div>
    </div> !-->
</nav>