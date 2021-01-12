@extends('adminlte::page')

@section('content')
    <form action="/homeL/{{$datas->id}}" method="POST">
    @method('PUT')   
     @csrf
        <div>
            <h1>Modification des liens</h1>
            <hr>
            <h3>Lien 1</h3>
            <input type="text" name="lien1" placeholder="{{$datas->lien1}}">
            <h3>Lien 2</h3>
            <input type="text" name="lien2" placeholder="{{$datas->lien2}}">
            <h3>Lien 3</h3>
            <input type="text" name="lien3" placeholder="{{$datas->lien3}}">
            <h3>Lien 4</h3>
            <input type="text" name="lien4" placeholder="{{$datas->lien4}}">
            <br>
            <button class="bg-warning mt-3" type="submit">Modifier</button>
        </div>
    </form>
@endsection
