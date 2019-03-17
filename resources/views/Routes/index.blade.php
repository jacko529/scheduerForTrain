
@extends('layouts.app')

@section('title', 'Retrieve')


@section('content')

    <table class="table table-striped">

        <thead>

        <tr>

            <th>Route</th>

            <th>Start location</th>

            <th>End location</th>

            <th>EDIT</th>

            <th>DELETE</th>

        </tr>

        </thead>

        <tbody>

        @foreach($routes as $LogoRoutes)

            <tr>

                <td>{{ $LogoRoutes->route_id }}</td>

                <td>{{ $LogoRoutes->start_location }}</td>

                <td>{{ $LogoRoutes->end_location }}</td>

                <td><a href="{{action('RouteController@edit', $LogoRoutes->route_id)}}" class="btn btn-warning">Edit</a></td>

                <td>

                    <form action="{{action('RouteController@destroy', $LogoRoutes->route_id)}}" method="post">

                        @csrf

                        <input name="_method" type="hidden" value="DELETE">

                        <button class="btn btn-danger" type="submit">Delete</button>

                    </form>

                </td>

            </tr>

        @endforeach

        </tbody>

    </table>




@endsection