@extends('layouts.app')

@section('title', 'Update')

@section('content')

        <div class="col-md-4 col-md-offset-3 mx-auto bg-default">

            <h3 class="text-center">Update Driver</h3><hr>
            <form method="post" action="{{action('DriverController@update', $id)}}">

            @csrf
                <input name="_method" type="hidden" value="PATCH">


                <div class="row">
                    <div class="row ">
                        <div class="input-field col s12">
                            <select name="title">
                                <option value="" disabled selected>Choose your option</option>
                                <option value="Miss">Miss</option>
                                <option value="Ms">Ms</option>
                                <option value="Mr">Mr</option>
                            </select>
                            <label>Prefix</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">edit</i>
                            <input id="first_name" name="first_name" type="text" class="validate">
                            <label for="first_name">First name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">edit</i>
                            <input placeholder="Placeholder" name="surname" id="surname" type="text" class="validate">
                            <label for="surname">Surname</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">home</i>
                            <input id="property_number" name="property_number" type="text" class="validate">
                            <label for="property_number">Property number</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">home</i>
                            <input placeholder="Placeholder" name="first_line_address" id="first_line_address" type="text" class="validate">
                            <label for="first_line_address">first_line_address</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">home</i>
                            <input placeholder="Placeholder" name="post_code" id="post_code" type="text" class="validate">
                            <label for="post_code">Post code</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">phone</i>
                            <input name="phone_number" id="phone_number" type="tel" class="validate">
                            <label for="phone_number">Telephone</label>
                        </div>
                    </div>
                    <div class="row">

                    <div class="input-field col s12">
                        <select name="route_id">
                            <option value="" disabled selected>Choose your option</option>
                            @foreach($LessThanFive as $selectRoute)
                                <option>{{ $selectRoute }}</option>
                            @endforeach
                        </select>
                        <label>Route</label>
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