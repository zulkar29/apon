@extends('layouts.mainbody')

@section('DashboardContent')
<form action={{route('salary.store')}} method="POST">
    @csrf
<div class="row">
    <div class="col-md-6">
     <div class="form-group">
           <label for="exampleInputEmail1"> Select Employee </label>
           <select class="form-control" name="user_id" id="">
            @foreach($users as $user)
               <option value="{{$user->id}}">{{$user->name}} </option>


            @endforeach
         </select>
      </div>
 </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1"> Bonus </label>
            <input type="text" class="form-control" name="bonus">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1"> Salary Start Date </label>
            <input type="date" class="form-control" name="salary_start_date">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1"> End Date </label>
            <input type="date" class="form-control" name="salary_end_date">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1"> Holydays </label>
            <input type="text" class="form-control" name="holyday">
        </div>
    </div>
</div>


<button type="submit" class="btn btn-block btn-primary">Generate Employee Salary</button>
</form>

@endsection
