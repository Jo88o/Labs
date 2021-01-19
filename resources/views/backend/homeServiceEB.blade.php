@extends('adminlte::page')

@section('content')
<form action="/homeService/{{$edit->id}}" method="POST" >
    @method('PUT')
    @csrf
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Paragraphe</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{$edit->id}}</th>
                        <td><input type="text" name="titre" value="{{$edit->titre}}"></td>
                        <td><input type="text" name="icon" value="{{$edit->icon}}"></td>
                        <td><input type="text" name="para" value="{{$edit->para}}"></td>
                        <br>
                        <td><button class="bg-warning" type="submit">Modifier</button></td>
                </tbody>
            </table>
        </div>
    </form>
@endsection