@extends('layouts.app')

@section('content')
    {{-- <h1>Dati Utente</h1>

    {{ $userId }} | {{ $user->name }}
 --}}
 <a href="{{ route('admin.posts.create') }}">
    Crea un nuovo post
    <i class="fa-solid fa-plus"></i>
</a>

 <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Data</th>
            <th scope="col">Descrizione</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $elem)
            <tr>
            <td>{{$elem->id}}</td>
            <td>{{$elem->name}}</td>
            <td>{{$elem->date}}</td>
            <td>{{$elem->description}}</td>
            <td><a href="{{ route('admin.posts.show', $elem->id) }}"><i class="fa-solid fa-eye"></i></a></td>
            <td><a href="{{ route('admin.posts.edit', $elem->id) }}"><i class="fa-solid fa-pencil"></i></a>  </td>
            <td>
                <form method="POST" action="{{ route('admin.posts.destroy', $elem->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </form></a></td>
            <td>
                @if ($posts->user_social)
                    {{$posts->user_social['user_social']}}
                @endif
            </td>
        </tr>
        @endforeach


    </tbody>
</table>
{{$posts->links()}}
@endsection
