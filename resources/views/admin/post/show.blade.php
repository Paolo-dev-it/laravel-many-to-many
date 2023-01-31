@extends('layouts.app')

@section('title-page')
    Va che bel post - {{ $elem->id }}
@endsection

@section('content')
    <div class="container text-center">
        <div>
            <h1>{{ $elem->name }}</h1>
        </div>

        {{-- @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif --}}

        <div>
            <h3>
                <div>Descrizione:</div>
                {{ $elem->description }}
            </h3>
        </div>

        <div>
            <p>
            <div>Data:</div>
            {{ $elem->date }}
            </p>
        </div>

        <div>
            <p>
                {{ $elem->title }}
            </p>
        </div>

        <div>
            <img src="{{ asset("storage/$elem->cover") }}" alt="">
        </div>

        <button class="btn btn-primary">
            <a href="{{ route('admin.posts.index') }}"><i class="fa-solid fa-left-long text-white"></i></a>
        </button>

    </div>
@endsection
