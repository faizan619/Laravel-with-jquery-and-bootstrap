<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
      <a href="#" class="navbar-brand  align-items-center gap-3 d-flex">
        <i class="bi bi-github fs-2"></i>
        <span class="fs-5">Github</span>
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">

      <div class="col-md-4 bg-danger this">
        <div class="bg-primary hel"></div>
      </div>
      <div class="col-md-4 this bg-success">
        <div class="row gap-3 text-center">
          <div class="col-md-5 img11 bg-danger">col1</div>
          <div class="col-md-5 img11 bg-danger">col2</div>
        </div>
        <div class="row-5 img11 bg-info h-vh-5">row2</div>
      </div>
      <div class="col-md-4 danger-primary">-</div>
    </div>
  </div>

{{-- <nav class="navbar this navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a href="#" class="navbar-brand  align-items-center gap-3 d-flex">
            <i class="bi bi-github fs-2"></i>
            <span class="fs-5">Github</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="ms-auto d-flex gap-1 align-items-center" role="search">
                <input class="form-control me-2 p-2 this2" type="search" placeholder="type [/] to search" aria-label="Search">
                <p class="nav-item dropdown mt-3">
                    <a class="nav-link dropdown-toggle border px-2 rounded" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fs-4 bi bi-plus-lg"></i>
                    </a>
                    <ul class="dropdown-menu rounded">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </p>
                <button type="submit" class="navbtnstyle rounded border-0">
                    <i class="fs-4 bi bi-record-circle"></i>
                </button>
                <button class="nav-link border px-2 rounded">
                    <i class="fs-4 bi bi-cpu"></i>
                </button>
                <button class="nav-link border px-2 rounded">
                    <i class="fs-4 bi bi-inbox"></i>
                </button>
                <button class="btn btn-outine-primary" type="submit"><i class="fs-3 bi bi-person-circle"></i></button>
            </form>
        </div>
    </div>
</nav> --}}
