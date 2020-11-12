@extends('layouts.mainbody')
@section('DashboardContent')
    <form action={{route('agrement.store')}} method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1"> Agrement Initinalization date </label>
                    <input type="date" name="date" class="form-control" id="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1"> Agrement Active Date </label>
                    <input type="date" name="active_date" class="form-control" id="">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1"> House Owner Name </label>
                    <input type="text" name="owner_name" class="form-control" id="">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1"> House owner Address </label>
                    <input type="text" name="owner_address" class="form-control" id="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">House Owner NID </label>
                    <input type="text" name="owner_nid" class="form-control" id="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1"> Guest Name </label>
                    <input type="text" name="guest_name" class="form-control" id="">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Guest Husband/ Father Name </label>
                    <input type="text" name="gurdian_name" class="form-control" id="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1"> Guest NID </label>
                    <input type="text" name="guest_nid" class="form-control" id="">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1"> Guest Address </label>
                    <input type="text" name="permanent_address" class="form-control" id="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1"> Guest Seat No </label>
                    <input type="text" name="seat_no" class="form-control" id="">
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Agrement End date </label>
                    <input type="date" name="validity_date" class="form-control" id="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Room Rent</label>
                    <input type="text" name="seat_rent" class="form-control" id="">
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Aamission Fee </label>
                    <input type="text" name="admission_fee" class="form-control" id="">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Security Deposit </label>
                    <input type="text" name="security_deposit" class="form-control" id="">
                </div>
            </div>


        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Room No</label>
                    <input type="text" name="roo_no" class="form-control" id="">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Hostel Floor </label>
                    <input type="text" name="floor" class="form-control" id="">
                </div>
            </div>
        </div>



        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Hostel address</label>
                    <input type="text" name="hostel_address" class="form-control" id="">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-block btn-primary">Save Agrement Information</button>
    </form>


@endsection
