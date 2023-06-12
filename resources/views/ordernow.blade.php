@extends('master')

@section('content')

<h1>Continue Shopping..</h1>
<div class="container mt-3">
    <h2>Thank You for Shopping</h2>
    <table class="table table-borderless">
        {{-- <thead>
          <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
          </tr>
        </thead> --}}
        <tbody>
          <tr>
            <td>Amount</td>
            <td>{{ $total }}</td>
          </tr>
          <tr>
            <td>Tax</td>
            <td>0</td>
          </tr>
          <tr>
            <td>Delivery Charge</td>
            <td>5</td>
          </tr>
          <tr class="table-dark">
            <td>Total Amount to pay</td>
            <td>{{ $total +10 }}</td>
          </tr>
        </tbody>
      </table>

      <form action="/orderplace" method="POST">
        @csrf
        <div class="mb-3 mt-3">
          <label for="text" class="form-label">Address:</label>
          <textarea  type="email" placeholder="Enter your address" class="form-control" name="address"></textarea>
        </div>
        <div class="mb-3 mt-3">
            <label for="text" class="form-label" >Contact Number:</label>
            <input type="text" name="contact_number" placeholder="Enter your phone No." class="text   "></input>
          </div>
        <div class="mb-3">
          <label for="pwd" class="form-label">Payment Method:</label><br>
          <input type="radio" name="payment" value="cash"><span>Online</span><br>
          <input type="radio" name="payment" value="cash"><span>Cash on Delivery</span><br>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

  </div>


@endsection
