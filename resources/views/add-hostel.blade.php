@extends('layout')
@section('content')
<div class="container">

    <form action="/test" method="POST">
    <div class="mb-3 mt-5 row">
            @csrf
            <div class="col-sm-10">
            <input type="text" class="form-control" name="user_id" value="1" id="hostelName"
                    placeholder="EnterHostel Name">
            </div>
        </div>
        <div class="mb-3 mt-5 row">
            <label for="city" class="col-sm-2 col-form-label">Select City</label>
            <div class="col-sm-10">
                <select class="form-control" aria-label="Default select example" name="city" id="city">
                    <option selected>Select City</option>
                    <option value="Islamabad">Islamabad</option>
                    <option value="Rawalpindi">Rawalpindi</option>

                </select>
            </div>
        </div>
        <div class="mb-3 mt-5 row">
            <label for="hostelName" class="col-sm-2 col-form-label">Hostel Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="hostel_name" id="hostelName"
                    placeholder="EnterHostel Name">
            </div>
        </div>
        <div class="mb-3 mt-5 row">
            <label for="hostelType" class="col-sm-2 col-form-label">Hostel Type</label>
            <div class="col-sm-10">
                <select class="form-control" name="hostel_type" aria-label="Default select example" id="hostelType">
                    <option selected>select hostel type</option>
                    <option value="1">Boys Hostel</option>
                    <option value="2">Girls Hostel</option>

                </select>
            </div>
        </div>
        <div class="mb-3 mt-5 row">
            <label for="hostelPicture" class="col-sm-2 col-form-label">Hostel/Rooms picture</label>
            <div class="col-sm-10">
                <input type="file" name="hostel_img" class="form-control" id="hostelPicture" placeholder="Choose File">
            </div>
        </div>
        <div class="mb-3 mt-5 row">
            <label for="avaliableSeates" class="col-sm-2 col-form-label">Avaliable Seats</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="hostel_seates" id="avaliableSeates"
                    placeholder="ENTER HOSTEL NAME">
            </div>
        </div>
        <div class="mb-3 mt-5 row">
            <label for="hostelPersons" class="col-sm-2 col-form-label">Person in one Room</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="hostel_person_qnty" id="hostelPersons"
                    placeholder="ENTER HOSTEL NAME">
            </div>
        </div>
        <div class="mb-3 mt-5 row">
            <label for="hostelFacilities" class="col-sm-2 col-form-label">Facilities</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="hostel_facilities" placeholder="Enter Facilities"
                    id="hostelFacilities"></textarea>

            </div>
        </div>
        <!-- <div class="mb-3 mt-5 row">
            <label for="hostelRent" class="col-sm-2 col-form-label">Rent Per Person</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="hostel_rent" id="hostelRent"
                    placeholder="ENTER HOSTEL NAME">
            </div>
        </div> -->
        <div class="mb-3 mt-5 row">
            <label for="hostelWarden" class="col-sm-2 col-form-label">Owner or Warden Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="hostel_cell_number" id="hostelWarden"
                    placeholder="ENTER HOSTEL NAME">
            </div>
        </div>
        <div class="mb-3 mt-5 row">
            <label for="hostelAddress" class="col-sm-2 col-form-label">Complete Hostel Address <Address></Address>
                </label>
            <div class="col-sm-10">
                <textarea class="form-control" name="hostel_address" placeholder="Leave a comment here"
                    id="hostelAddress"></textarea>

            </div>
        </div>

        <!-- button -->
        <div class="row">
            <div class="col-sm-3">
                <input type="submit" value="submit" name="submit" class="btn btn-success float-end" />

            </div>

        </div>
    </form>
</div>

@endsection
<div class="mb-3">


</div>