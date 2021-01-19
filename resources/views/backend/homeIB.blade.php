@extends('adminlte::page')

@section('content')
@foreach ($datas as $elem)
<form action="/homeI/{{$elem->id}}" method="POST">
@method('PUT')
@csrf
<div>
    <h1>Modification du formulaire</h1>
    <hr>
    <h3>Name</h3>
    <input type="text"  name="name" value="{{$elem->name}}">
    <br>
    <h3>Mail</h3>
    <input type="text" name="mail" value="{{$elem->mail}}">
    <br>
    <h3>Subject</h3>
    <input type="text" name="subject" value="{{$elem->subject}}">
    <br>
    <h3>Message</h3>
    <input type="text"  name="message" value="{{$elem->message}}">
    <br>
    <h3>Button</h3>
    <input type="text"  name="button" value="{{$elem->button}}">
    <br>
    <h1 class="mt-5">Modification des infos</h1>
    <hr>
    <h3>Titre 1</h3>
    <input type="text"  name="titre1" value="{{$elem->titre1}}">
    <h3>Texte</h3>
    <input type="text"  name="texte" value="{{$elem->texte}}">
    <h3>Titre 2</h3>
    <input type="text"  name="titre2" value="{{$elem->titre2}}">
    <h3>Adresse</h3>
    <input type="text"  name="adresse" value="{{$elem->adresse}}">
    <h3>Téléphone</h3>
    <input type="text"  name="phone" value="{{$elem->phone}}">
    <h3>E-mail</h3>
    <input type="text"  name="email" value="{{$elem->email}}">
    <br>
    <button class="bg-warning mt-3" type="submit">Modifier</button>
</div>
@endforeach
</form>
@endsection