<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <a class="navbar-brand" href="/">{{ __('Forex') }}</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('eurusd') }}" class="nav-link">
                        {{ __('EURUSD') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('usdjpy') }}" class="nav-link">
                        {{ __('USDJPY') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('usdcad') }}" class="nav-link">
                        {{ __('USDCAD') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('gbpusd') }}" class="nav-link">
                        {{ __('GBPUSD') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('usdchf') }}" class="nav-link">
                        {{ __('USDCHF') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('eurgbp') }}" class="nav-link">
                        {{ __('EURGBP') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('audusd') }}" class="nav-link">
                        {{ __('AUDUSD') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('nzdusd') }}" class="nav-link">
                        {{ __('NZDUSD') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('xauusd') }}" class="nav-link">
                        {{ __('XAUUSD') }}
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ route('register') }}" class="nav-link">
                        {{ __('Register') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link btn-magnify" href="#pablo">
                        <i class="nc-icon nc-layout-11"></i>
                        <p>
                            <span class="d-lg-none d-md-block">{{ __('Stats') }}</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item btn-rotate dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="nc-icon nc-bell-55"></i>
                        <p>
                            <span class="d-lg-none d-md-block">{{ __('Some Actions') }}</span>
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">{{ __('Action') }}</a>
                        <a class="dropdown-item" href="#">{{ __('Another action') }}</a>
                        <a class="dropdown-item" href="#">{{ __('Something else here') }}</a>
                    </div>
                </li>
                <li class="nav-item btn-rotate dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink2"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="nc-icon nc-settings-gear-65"></i>
                        <p>
                            <span class="d-lg-none d-md-block">{{ __('Account') }}</span>
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink2">
                        <form class="dropdown-item" action="{{ route('logout') }}" id="formLogOut" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" onclick="document.getElementById('formLogOut').submit();">{{ __('Log out') }}</a>
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('My profile') }}</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
