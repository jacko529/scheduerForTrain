
@extends('layouts.app')

@section('title', 'Retrieve')


@section('content')
    <div id="scrolltable">

    <table class="table table-striped">

        <thead>

        <tr>

            <th>Driver id</th>

            <th>Title</th>

            <th>First name</th>

            <th>Surname</th>

            <th>Phone number</th>

            <th>Route</th>

            <th>EDIT</th>

            <th>DELETE</th>

        </tr>

        </thead>

        <tbody>

        @foreach($drivers as $LogoDriver)

            <tr>

                <td>{{ $LogoDriver->driver_id }}</td>

                <td>{{ $LogoDriver->title }}</td>

                <td>{{ $LogoDriver->first_name }}</td>

                <td>{{ $LogoDriver->surname }}</td>

                <td>{{ $LogoDriver->phone_number }}</td>

                <td>{{ $LogoDriver->route_id }}</td>

                <td><a href="{{action('DriverController@edit', $LogoDriver->driver_id)}}" class="btn btn-warning">Edit</a></td>

                <td>

                    <form action="{{action('DriverController@destroy', $LogoDriver->driver_id)}}" method="post">

                        @csrf

                        <input name="_method" type="hidden" value="DELETE">

                        <button class="btn btn-danger" type="submit">Delete</button>

                    </form>

                </td>

            </tr>

        @endforeach

        </tbody>

    </table>
    </div>



@endsection