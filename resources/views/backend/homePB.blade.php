@extends('adminlte::page')

@section('content')
@foreach ($datas as $elem)
    <form action="/homeP/{{$elem->id}}" method="POST">
    @method('PUT')
    @csrf
        
    <div>
        <h1>Modification du titre</h1>
        <hr>
        <h3>Nouveau titre</h3>
        <input type="text" name="titre" value="{{$elem->titre}}">
        <h3>Nouveau texte paragraphe 1</h3>
        <input type="text" name="texte1" value="{{$elem->texte1}}">
        <h3>Nouveau texte paragraphe 2</h3>
        <input type="text" name="texte2" value="{{$elem->texte2}}">
        <h3>Mot du texte en vert</h3>
        <input type="text" name="vert" value="{{$elem->vert}}">
        <h3>Nouveau bouton</h3>
        <input type="text" name="button" value="{{$elem->button}}">
        <br>
        <button class="bg-warning mt-3" type="submit">modifier</button>
    </div>
    @endforeach
    </form>
@endsection