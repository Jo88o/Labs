@extends('adminlte::page')

@section('content')
<form action="/homeTitre/{{$datas->id}}" method="POST">
    @method('PUT')
    @csrf
    <div>
        <h1>Modification du titres</h1>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                </tr>
            </thead>
            <tbody>
                <th scope="row">{{ $datas->id }}</th>
                <td><input type="text" name="titre" value="{{ $datas->titre }}"></td>
                <td><button class="bg-warning mt-4" type="submit" class="mt-3">Modifier</button></td>
            </tbody>
        </table>
    </div>
</form>
    
@endsection
