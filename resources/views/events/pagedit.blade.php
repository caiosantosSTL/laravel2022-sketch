@extends('layout.main')

@section('content')

<h1>Update evento</h1>

<div>
    <form class="form" action="/events/update/{{$event->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Picture</label>
        <img style="max-width: 100px; max-height: 100px;" src="/img/events/{{$event->image}}" alt="">
        <input type="file"  name="image">
        <label for="">Title</label>
        <input type="text" placeholder="title" name="title" value="{{$event->title}}">
        <label for="">City</label>
        <input type="text" placeholder="city" name="city" value="{{$event->city}}">
        <label for="">Private</label>
        <select type="text" placeholder="private" value="0" name="private">
            <option value="0">No</option>
            <option value="1">Yes</option>
        </select>
        <label for="">Description</label>
        <textarea rows="30" type="text" placeholder="desc" name="desc">{{$event->desc}}</textarea>
        <label for="">Add item infra</label>
        <input type="checkbox" name="items[]" value="cadeiras"> Cadeiras
        <input type="checkbox" name="items[]" value="palco"> Palco
        <input type="checkbox" name="items[]" value="cerveja"> Cerveja

        <input type="submit" value="go">
    </form>
</div>

<style>
    .form{
        display: flex;
        flex-direction: column;
        justify-content: start;
        font-size: large;
        
   
    }
    .form *{
        margin-top: 15px;
        padding: 10px;
        
    }
    .form, input, select, textarea{
        border: solid black;
    }
</style>



@endsection