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

      <form action="">
        <div class="mb-3 mt-3">
          <label for="text" class="form-label">Address:</label>
          <textarea  type="email" placeholder="Enter your address" class="form-control"></textarea>
        </div>
        <div class="mb-3">
          <label for="pwd" class="form-label">Payment Method:</label><br>
          <input type="radio" name="payment"><span>Online</span><br>
          <input type="radio" name="payment"><span>Cash on Delivery</span><br>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

  </div>


@endsection
