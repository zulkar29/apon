@extends('layouts.mainbody')

@section('DashboardContent')

<form action={{route('project.store')}} method="POST">
    @csrf
<div class="row">
    <div class="col-md-6">
     <div class="form-group">
           <label for="exampleInputEmail1"> Select Customer </label>
         <select class="form-control" name="customer_name" id="">
             @foreach($customers as $customer)
                 <option value="{{$customer->name}}">{{$customer->name}} </option>
             @endforeach
         </select>

     </div>
 </div>

<div class="col-md-6">
    <div class="form-group">
          <label>Select Employee</label>
        <select class="form-control" name="employee_name" id="">
            @foreach($users as $user)
                <option value="{{$user->name}}">{{$user->name}} </option>
            @endforeach
        </select>

 </div>
</div>
</div>

<div class="row">
    <div class="col-md-6">
     <div class="form-group">
           <label for="exampleInputEmail1"> Project Start Date </label>
         <input type="date" class="form-control" name="start_date">
      </div>
 </div>

<div class="col-md-6">
    <div class="form-group">
          <label for="exampleInputEmail1">Project End Date</label>
          <input type="date" class="form-control" name="end_date">
 </div>
</div>
<div class="col-md-6">
    <div class="form-group">
          <label for="exampleInputEmail1">Budget</label>
          <input type="text" class="form-control" name="budget">
 </div>
</div>
<button type="submit" class="btn btn-block btn-primary">Confirm Project Assign </button>
</form>


@endsection
