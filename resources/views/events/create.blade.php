@extends('layout.main')

@section('content')

<h1>Cria evento</h1>

<div>
    <form class="form" action="/events" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Picture</label>
        <input type="file"  name="image">
        <label for="">Title</label>
        <input type="text" placeholder="title" name="titlex">
        <label for="">City</label>
        <input type="text" placeholder="city" name="cityx">
        <label for="">Private</label>
        <select type="text" placeholder="private" value="0" name="privatex">
            <option value="0">No</option>
            <option value="1">Yes</option>
        </select>
        <label for="">Description</label>
        <textarea rows="30" type="text" placeholder="desc" name="descx"></textarea>
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