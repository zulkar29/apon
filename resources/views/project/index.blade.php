

@extends('layouts.mainbody')
@section('DashboardContent')
<div class="row">
    <div class="col-md-6 insert-info">
    <a href={{route('project.create')}}>Shedule New Project</a>
    </div>


    </div>
        <div class="row">

           <div class="col-md-12 table-responsive">

            <table class="table" >
            <thead class="thead-dark">
                <tr>
                    <th> Customer Name </th>
                    <th>Employee</th>
                    <th> Project Start Date </th>
                    <th> Project End Date</th>
                    <th> Budget</th>
                    <th>Action</th>
                </tr>
            </thead>

                @foreach ($projects as $project)
                    <tbody>

                    <td>{{$project->customer_name}} </td>
                    <td>{{$project->employee_name}} </td>
                    <td>{{$project->start_date}} </td>
                    <td>{{$project->end_date}} </td>
                    <td>{{$project->budget}} </td>
                    <td class="action-button">

                        <form class="custom-action-btn" onclick="return confirm('Do you really want to delete this Row?')"  action="{{ route('project.destroy', $project->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>



                    </td>
                    </tbody>
                @endforeach


            </table>
        </div>
        </div>
@endsection
