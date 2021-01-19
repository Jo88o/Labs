@extends('adminlte::page')

@section('content')
@foreach ($contact as $elem)
    <form action="/contactMB/{{$elem->id}}" method="POST">
        @method('PUT')
        @csrf
        <div>
            <h1>Modification de la map</h1>
            <hr>
            <h3>Nouvelle map</h3>
            <input type="text" name="map" value="{{$elem->map}}">
            <br>
            <button class="bg-warning mt-3" type="submit">Modifier</button>
        </div>
        @endforeach
    </form>
@endsection