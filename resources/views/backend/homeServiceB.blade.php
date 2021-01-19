@extends('adminlte::page')

@section('content')
<form action="/homeService" method="POST">
    @csrf
    <div>
        <h1>Création de nouveaux services</h1>
        <hr>
        <h3>Icon</h3>
        <input type="text" name="icon">
        <h3>Titre</h3>
        <input type="text" name="titre">
        <h3>Paragraphe</h3>
        <input type="text" name="para">
        <br>
        <button class="bg-success mt-3 mb-5" type="submit">Ajouter</button>
    </div>
</form>


<div>
    <h1>Nos services</h1>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Icon</th>
                <th scope="col">Titre</th>
                <th scope="col">Paragraphe</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($service as $elem)

                <th scope="row">{{ $elem->id }}</th>
                <td>
                    <p>{{ $elem->titre }}</p>
                </td>
                <td>
                    <p>{{ $elem->icon }}</p>
                </td>
                <td>
                    <p>{{ $elem->para }}</p>
                </td>
                <td><a href="/homeService/{{ $elem->id }}/edit"><button class="bg-warning mt-4" type="submit"
                            class="mt-3">edit</button></a></td>
                <td>
                    <form action="/homeService/{{$elem->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="mt-4 bg-danger">Delete</button>
                    </form>
                </td>
        </tbody>
        @endforeach
    </table>
</div>
@endsection