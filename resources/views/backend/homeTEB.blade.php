@extends('adminlte::page')

@section('content')
<form action="/homeT/{{$edit->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Avatar</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Témoignages</th>
                    <th scope="col">Fonction</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{$edit->id}}</th>
                        <td><input type="file" name="src"></td>
                        <td><input type="text" name="nom" value="{{$edit->nom}}"></td>
                        <td><input type="text" name="prenom" value="{{$edit->prenom}}"></td>
                        <td><input type="text" name="temoignage" value="{{$edit->temoignage}}"></td>
                        <td><input type="text" name="fonction" value="{{$edit->fonction}}"></td>
                        <br>
                        <td><button class="bg-warning" type="submit">Modifier</button></td>
                </tbody>
            </table>
        </div>
    </form>
@endsection
