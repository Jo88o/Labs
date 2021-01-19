@extends('adminlte::page')

@section('content')
    <form action="/homeT" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <h1>Ajouter un témoignage</h1>
            <hr>
            <h3>Témoignages</h3>
            <input type="text" name="temoignage">
            <h3>Avatar</h3>
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
        <h1>Nos témoignages</h1>
        <hr>
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
                @foreach ($create as $elem)

                    <th scope="row">{{ $elem->id }}</th>
                    <td><img height="30px" width="30px" src="{{ asset('img/avatar/' . $elem->src) }}" alt=""></td>
                    <td>
                        <p>{{ $elem->nom }}</p>
                    </td>
                    <td>
                        <p>{{ $elem->prenom }}</p>
                    </td>
                    <td>
                        <p>{{ $elem->temoignage }}</p>
                    </td>
                    <td>
                        <p>{{ $elem->fonction }}</p>
                    </td>
                    <td><a href="/homeT/{{ $elem->id }}/edit"><button class="bg-warning mt-4" type="submit"
                                class="mt-3">edit</button></a></td>
                    <td>
                        <form action="/homeT/{{ $elem->id }}" method="post">
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
