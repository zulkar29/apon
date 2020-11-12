
@extends('layouts.mainbody')
@section('DashboardContent')
    <style>
        .custom-action-btn{
        display: inherit;
        }
    </style>
<div class="row">
    <div class="col-md-6 insert-info">
    <a href={{route('salary.create')}}>Generate Employee Salary</a>
    </div>


    </div>
        <div class="row">

           <div class="col-md-12 table-responsive">

            <table class="table" >
            <thead class="thead-dark">
                <tr>
                    <th> Employee Name </th>
                    <th> Base Salary </th>
                    <th> Total Working Day </th>
                    <th>Payable Salary</th>
                    <th>Action</th>
                </tr>
            </thead>

                @foreach ($salarys as $salary)
                    <tbody>

                    <td>{{$salary->name}} </td>
                    <td>{{$salary->basic_salary}} </td>
                    <td>{{$salary->total_working_day}} </td>
                    <td>{{$salary->final_salary}} </td>

                    <td class="action-button">

                        <form class="custom-action-btn" onclick="return confirm('Do you really want to delete this Invoice?')"  action="{{ route('salary.destroy', $salary->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>

                        <form class="custom-action-btn"  action="{{ route('salary.show', $salary->id)}}" method="get">
                            @csrf
                            @method('pdf')
                            <button class="btn btn-primary" type="submit">PDF</button>
                        </form>

                    </td>
                    </tbody>
                @endforeach

            </table>
        </div>
        </div>

@endsection
