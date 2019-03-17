@extends('layouts.app')

@section('title', 'Create Driver ')


@section('content')
    <form action="{{ route('timetable.create')}}" method="POST">
        @csrf
    <input type="date" name="date" >

    {!! $output !!}
        <div class="text-center">
            <button class="btn waves-effect waves-light " type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
@endsection