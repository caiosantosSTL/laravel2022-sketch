@extends('layout.main')
@section('content')

<h1>Oi oi ************************************************</h1>

<div>
    <form action="/" method="get">
        <input type="text" name="search" placeholder="Buscar..">
    </form>
   
</div>

@foreach($events as $event)

<div style="display: flex; flex-direction: row; align-items:center;">
    <p>Title: {{$event->title}} | Desc: {{$event->desc}} | City: {{$event->city}}</p>
    <img src="/img/events/{{$event->image}}" style="max-height: 100px; max-width:100; margin-left: 20px;" alt="">
    <div>
        <a style="background-color: #3291a8; padding: 10px;" href="/events/{{$event->id}}">Show more</a>
        <a style="background-color: #34a832; padding: 10px;" href="/events/edit/{{$event->id}}">Edit it</a>
        <a style="background-color: red; padding: 10px;" href="/events/delete/{{$event->id}}">Delete it</a>
    </div>
</div>



@endforeach

@endsection