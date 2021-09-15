@extends('layout')
@section('content')
<div class="container">
    <h1>Create Account</h1>
    <form action="/store" method="POST">
    @csrf
    <div class="mb-3 mt-5 row">
        <label for="phoneNumber" class="col-sm-2 col-form-label">Cell Number</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="phone_number" id="phoneNumber" placeholder="123456789">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label"  >Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="user_password" id="inputPassword">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="confirmPassword" class="col-sm-2 col-form-label">Confirm Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="confirm_passord" id="confirmPassword">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
        <input type="submit" class="btn btn-success float-end" name="submit" value="Submit">

        </div>
    
    </div>
    </form>
    
</div>

@endsection
<div class="mb-3">


</div>