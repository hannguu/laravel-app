<nav class="navbar navbar-expand-lg bg-body-tertiary customer-nav">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <img src="{{ asset('storage/icon.png') }}" width='50px' height ='50px' alt="">
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('home') ? 'activate' : '' }}" href="home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'activate' : '' }}" href="about">About</a>
                </li>
                {{-- @if ($isAdmin) --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('foods') ? 'activate' : '' }}" href="foods">Foods</a>
                </li>
                {{-- @endif --}}

                <button class="btn btn-danger" style="position: absolute; right: 5px;">
                    <a class="nav-link" href="login">Login</a>
                </button>
            </ul>
        </div>
    </div>
</nav>
