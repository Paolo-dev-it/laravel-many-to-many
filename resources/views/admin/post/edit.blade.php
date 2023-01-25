@extends('layouts.app')

@section('title-page')
Cos'e' non ti piace il post?
@endsection

@section('content')

<h1 class="text-center">Modifica il post</h1>

<form method="POST" action="{{route('admin.posts.update', $elem->id)}}">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nome:</label>
        <input name="name" type="text" class="form-control" id="title" value="{{$elem->name}}">
    </div>

    <div class="mb-3">
        <label class="form-label">Descrizione:</label>
        <textarea name="description" class="form-control" id="">{{$elem->description}}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Data:</label>
        <input name="date" value="{{$elem->date}}" type="date" class="form-control" id="title">
    </div>

    <button type="submit" class="btn btn-primary">Crea record</button>
</form>
@endsection
