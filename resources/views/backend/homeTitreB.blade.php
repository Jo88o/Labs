@extends('adminlte::page')

@section('content')
    <div>
        <h1>Titres</h1>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $elem)

                    <th scope="row">{{ $elem->id }}</th>
                    <td>
                        <p type="text" value="">{{ $elem->titre }}</p>
                    <td><a href="/homeTitre/{{ $elem->id }}/edit"><button class="bg-warning mt-4" type="submit"
                                class="mt-3">edit</button></a></td>
                    <td>
                        <form action="/homeT/" method="post">
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
