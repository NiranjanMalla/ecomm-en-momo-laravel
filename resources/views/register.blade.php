@extends('master')

@section('content')
<div class="container d-flex justify-content-center p-5 my-15">
    <div class="row border border-1">
        <div class="col-sm-3">
            <div class="mx-auto py-2" style="width:350px">
                <form action="register" method="POST">
                    @csrf

                    <div class="mb-3 mt-3">
                        <label for="username" class="form-label">User Name : </label>
                        <input type="text"  name="name" class="form-control" id="" placeholder="User Name" >
                    </div>



                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email"  name="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                    </div>

                    <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>

        </div>

    </div>
</div>
@endsection
