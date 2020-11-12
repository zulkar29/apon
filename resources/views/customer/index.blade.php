
@extends('layouts.mainbody');

@section('DashboardContent')
<div class="row">
    <div class="col-md-6 insert-info">
    <a href={{route('customer.create')}}>Insert Customer Info</a>
    </div>


    </div>
        <div class="row">

           <div class="col-md-12 table-responsive">

            <table class="table" >
            <thead class="thead-dark">
                <tr>
                    <th> Customer Name </th>
                    <th> Customer phone </th>
                    <th> Address </th>
                    <th> Email </th>
                    <th>Action</th>
                </tr>
            </thead>

                @foreach ($customers as $customer)
                    <tbody>

                    <td>{{$customer->name}} </td>
                    <td>{{$customer->email}} </td>
                    <td>{{$customer->phone}} </td>
                    <td>{{$customer->Address}} </td>

                    <td class="action-button">

                        <form class="custom-action-btn" onclick="return confirm('Do you really want to delete this customer?')"  action="{{ route('customer.destroy', $customer->id)}}" method="post">
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
