@extends('adminlte::page')

@section('content')
@foreach ($edit as $elem)
     <form action="/homeLU/updatecarou/{{$elem->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       
                        <th scope="row"></th>
                        <td><input type="file"></td>
                        <td><img height="30px" width="30px" src="{{asset('img/'.$elem->src)}}" alt=""></td>
                        <td><button type="submit" class="mt-3">modifier</button></td>
                    </tbody>
                    
                </table>
        </div>
    </form>
@endforeach
   


@endsection
