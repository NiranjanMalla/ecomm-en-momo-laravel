<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
$total = ProductController::cartitem();
}
?>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/myorders">Orders</a>
          </li>
         </ul>

        <form class="d-flex p-3"  action="/search" role="search">
            @csrf
          <input class="form-control me-2"  name="query" type="text" placeholder="Search" aria-label="Search">
          <a href="/search" class="btn btn-success">Search</a>
          {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
        </form>
          {{-- <li class="nav-item"> --}}
            <a class="nav-link btn btn-danger" aria-current="page" href="/cartlist"><i class="fa fa-shopping-cart" aria-hidden="true">({{ $total }})</i></a>
            @if (Session::has('user'))

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle btn btn-danger" href="#" role="button" data-bs-toggle="dropdown">{{ Session::get('user')['name'] }}</a>
                <ul class="dropdown-menu">
                  <a class="dropdown-item" href="/logout">logout</a>
                </ul>
            </li>
            @else
            <li><a class="nav-link" aria-current="page" href="/login">login  </a></li>
            <li><a class="nav-link" aria-current="page" href="/register">Register  </a></li>

            @endif

          {{-- </li> --}}

      </div>
    </div>
  </nav>
