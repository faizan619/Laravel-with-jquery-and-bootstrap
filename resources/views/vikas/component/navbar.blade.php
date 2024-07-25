<nav class="navbar navbar-expand-lg bg-primary ">
    <div class="container-fluid">
        <a class="navbar-brand text-light fw-bold fs-3" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page"
                        href="{{ route('project.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('register') }}">Employee</a>
                </li>
            </ul>
        </div>
        @if (Auth::check())
            <div>
                <a href="{{ route('logout') }}">
                    <button class="btn btn-danger my-auto">Logout</button>
                </a>
            </div>
        @else
        @endif
    </div>
</nav>
