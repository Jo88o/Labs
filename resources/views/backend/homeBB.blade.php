@extends('adminlte::page')

@section('content')
    {{-- Slogan et logo --}}
    @foreach ($datas as $elem)
        <form action="/homeLU/updateimg/{{ $elem->id }}" method="POST" class="border" enctype="multipart/form-data">
            @csrf
            <div>
                <h1>Modification du logo</h1>
                <hr>
                <h3>Logo</h3>
                <br>
                <img src="{{ asset('img/' . $elem->src) }}" alt="">
                <br>
                <h3>Nouveau Logo</h3>
                <input  type="file" name="src">
                <br>
                <h3>Nouveau Slogan</h3>
                <input type="text" name="slogan">
                <br>
                <button class="mt-3 bg-warning" type="submit">Modifier</button>
            </div>
        </form>
    @endforeach

    <br>

    {{-- Caroussel ajout --}}
    <div class="border">
        <h1>Modification du caroussel</h1>
        <hr>
        <form action="/homeL" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <h3>Ajouter une image au caroussel</h3>
                <input type="file" name="src">
                <br>
                <button class="bg-success mt-4" type="submit">Ajouter</button>
            </div>
        </form>

        <br>

        {{-- Caroussel edit/delete --}}
        <form action="">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($caroussel as $elem)    
                    <tr>
                        <th scope="row">{{$elem->id}}</th>
                        <td><img height="30px" width="30px" src="{{asset('img/'.$elem->src)}}" alt=""></td>
                        <td><a class="border bg-warning" href="/homeLE/{{$elem->id}}">editer</a></td>
                        <td><form action="/homeL/{{$elem->id}}" method="post">
                        @csrf
                        @method('delete')
                            <button type="submit" class="mt-3 bg-danger">supprimer</button>
                        </form></td>
                </tbody>
                    @endforeach
            </table>
    </div>
    </form>
@endsection
