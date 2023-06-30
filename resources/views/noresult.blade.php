
@extends('master')

@section('content')

<h1>Continue Shopping..</h1>
<div class="container mt-3">
    <h2>Searched items</h2>
    <table class="table">
      <thead>
        <tr class="align-text-bottom">
              {{-- <th>Remove from the cart</th> --}}
            <th>Products</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>


        </tr>
      </thead>

      <tbody>

        <tr class="align-text-bottom">

          <td>No Item
              {{-- <img class="cart-img" src="{{ $item->gallery }}" alt=""> --}}
          </td>
          <td>No Item</td>
          <td>No Item</td>
          <td>No Item</td>
          {{-- <td><a class="text-danger" href="/removecart/{{ $item->cart_id }}"><i class="fa fa-trash"></i></a></td> --}}




        </tr>

      </tbody>
    </table>
  </div>


@endsection
