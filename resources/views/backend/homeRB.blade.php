@extends('adminlte::page')

@section('content')
@foreach ($datas as $elem)
<form action="/homeR/{{$elem->id}}" method="POST">
@method('PUT')
@csrf
    
<div>
    <h1>Modification du titre</h1>
    <hr>
    <h3>Nouveau titre</h3>
    <input type="text" name="titre" value="{{$elem->titre}}">
    <h3>Nouveau soustitre</h3>
    <input type="text" name="soustitre" value="{{$elem->soustitre}}">
    <h3>Nouveau bouton</h3>
    <input type="text" name="button" value="{{$elem->button}}">
    <br>
    <button class="bg-warning mt-3" type="submit">modifier</button>
</div>
@endforeach
</form>
@endsection