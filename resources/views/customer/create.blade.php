@extends('layouts.mainbody')

@section('DashboardContent')
<form action={{route('customer.store')}} method="POST">
    @csrf
<div class="row">
    <div class="col-md-6">
     <div class="form-group">
           <label for="exampleInputEmail1"> Customer Name</label>
         <input type="text" class="form-control" name="name">
      </div>
 </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1"> Customer phone	</label>
            <input type="text" class="form-control" name="phone">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1"> Address </label>
            <input type="text" class="form-control" name="Address">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1"> Email</label>
            <input type="text" class="form-control" name="email">
        </div>
    </div>
</div>


<button type="submit" class="btn btn-block btn-primary">Generate Employee Salary</button>
</form>

@endsection
