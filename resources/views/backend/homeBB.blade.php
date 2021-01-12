@extends('adminlte::page')

@section('content')
@foreach ($datas as $elem)
    
<form action="/homeLU/updateimg/{{$elem->id}}" method="POST" enctype="multipart/form-data">
@csrf
    <div>
        <h1>Modification du logo</h1>
        <hr>
        <h3>Logo</h3>
        <br>
        <img src="{{asset('img/'.$elem->src)}}" alt="">
        <br>
        <h3>Nouveau Logo</h3>
        <input type="file" name="src">
        <br>
        <button class="mt-3 bg-warning" type="submit">Modifier</button>
    </div>
</form>
@endforeach
@endsection
