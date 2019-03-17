@extends('layouts.app')

@section('title', 'Update')

@section('content')


    <div class="col-md-4 col-md-offset-3 mx-auto bg-default">


        @if ($errors->has('route_id')) {{ $errors->first('route_id') }} <br> @endif

        @if ($errors->has('start_location')) {{ $errors->first('start_location') }} <br> @endif

        @if ($errors->has('end_location')) {{ $errors->first('end_location') }} <br> @endif

        <h3 class="text-center">Create Route</h3><hr>

        <form action="{{ url('route')}}" method="POST">

            @csrf

            <div class="row">
                <div class="row ">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">edit</i>
                        <input id="route_id" name="route_id" type="text" class="validate">
                        <label for="route_id">Route Number</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">edit</i>
                        <input  name="start_location" id="start_location" type="text" class="validate">
                        <label for="start_location">Start Location</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">home</i>
                        <input  name="end_location" id="end_location" type="text" class="validate">
                        <label for="end_location">End Location</label>
                    </div>
                </div>

            </div>
            <div class="text-center">
                <button class="btn waves-effect waves-light " type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>

    </div>
@endsection