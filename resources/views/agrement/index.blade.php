@extends('layouts.mainbody')

@section('DashboardContent')
    <div class="row">
        <div class="col-md-6 insert-info">
            <a href={{route('agrement.create')}}>Make New Agrement</a>
        </div>

        <div class="col-md-6">
            @if(session()->get('delete'))
                <div class="alert alert-danger">
                    {{ session()->get('delete') }}
                </div>
            @endif

            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>

    </div>
    <div class="row">

        <div class="col-md-12 table-responsive">

            <table class="table" >
                <thead class="thead-dark">
                <tr>
                    <th> Guest Name </th>
                    <th>Gurdian Name</th>
                    <th> Agrement Date </th>
                    <th> Branch</th>
                    <th>Action</th>
                </tr>
                </thead>

                @foreach ($agrements as $agrement)
                    <tbody>

                    <td>{{$agrement->guest_name}} </td>
                    <td>{{$agrement->gurdian_name}} </td>
                    <td>{{$agrement->date}} </td>
                    <td>{{$agrement->hostel_address}} </td>



                    <td class="action-button">

                        <form onclick="return confirm('Do you really want to delete this Invoice?')" action="{{ route('agrement.destroy', $agrement->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>

                        <form action="{{ route('agrement.edit', $agrement->id)}}" method="get">
                            @csrf
                            @method('edit')
                            <button class="btn btn-warning" type="submit">Edit</button>
                        </form>

                        <form action="{{ route('agrement.show', $agrement->id)}}" method="get">
                            @csrf
                            @method('edit')
                            <button class="btn btn-warning" type="submit">PDF</button>
                        </form>

                    </td>
                    </tbody>
                @endforeach



            </table>
        </div>
    </div>
@endsection
