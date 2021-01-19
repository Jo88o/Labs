@extends('adminlte::page')

@section('content')
<form action="/homeTeam" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <h1>Création de nouveaux teamate</h1>
        <hr>
        <h3>Image</h3>
        <input type="file" name="src">
        <h3>Nom</h3>
        <input type="text" name="nom">    
        <h3>Prénom</h3>
        <input type="text" name="prenom">
        <h3>Fonction</h3>
        <input type="text" name="fonction">
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
                <th scope="col">Image</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Fonction</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($create as $elem)

                <th scope="row"></th>
                <td>
                    <img height="100px" src="{{asset('img/team/'.$elem->src)}}" alt="">
                </td>
                <td>
                    <p>{{$elem->nom}}</p>
                </td>
                <td>
                    <p>{{$elem->prenom}}</p>
                </td>
                <td>
                    <p>{{$elem->fonction}}</p>
                </td>
                <td><a href="/homeTeam/{{$elem->id}}/edit"><button class="bg-warning mt-4" type="submit"
                            class="mt-3">edit</button></a></td>
                <td>
                    <form action="/homeTeam/{{$elem->id}}" method="post">
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