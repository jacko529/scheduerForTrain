@extends('layouts.app')

@section('title', 'Create Driver ')


@section('content')
<div>
@foreach($timetable as $timetables)

<ul class="collapsible">
    <li>
        <div class="collapsible-header"><i class="material-icons">filter_drama</i>{{ $timetables->date }}</div>
        <div class="collapsible-body"><span>
                    {!!   $timetables->timetable!!}
            </span></div>
    </li>
</ul>

    @endforeach
</div>
@endsection