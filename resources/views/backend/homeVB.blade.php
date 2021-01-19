@extends('adminlte::page')

@section('content')
@foreach ($datas as $elem)
    <form action="/homeV/{{$elem->id}}" method="POST">
        @method('PUT')
        @csrf
        <div>
            <h1>Modification de la vidéo</h1>
            <hr>
            <h3>Nouvelle vidéo</h3>
            <input type="text" name="src" value="{{$elem->src}}">
            <br>
            <button class="mt-3 bg-warning" type="submit">Modifier</button>
        </div>
        @endforeach
    </form>
@endsection