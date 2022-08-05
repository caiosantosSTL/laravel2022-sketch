@extends('layout.main')

@section('content')

<div>
    <h1>{{$event->title}}</h1>
    <ul>
        <li>
            {{$event->desc}}
        </li>
        <li>
            {{$event->city}}
        </li>
        <li>
            <img src="/img/events/{{$event->image}}" style="max-height: 100px; max-width:100;" alt="">
        </li>

    </ul>
    <h3>Evento com</h3>
    <ul>
        @foreach($event->items as $item)
        <li>{{$item}}</li>
        @endforeach
    </ul>
</div>

@endsection