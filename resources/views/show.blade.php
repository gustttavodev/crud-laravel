@extends('templates.template')


@section('content')
    <h1 class="text-center">VIZUALIZAR</h1>


<div class="col-8 m-auto">

    <div class="col-8 m-auto">
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Paginas</th>
                <th scope="col">Preço</th>
                <th scope="col">Autor</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                @php
                    $user = $book->find($book->id)->relUsers;
                @endphp
                    <td>{{$book->title}}</td>
                    <td>{{$book->pages}}</td>
                    <td>{{$book->price}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
            <tb

</div>
@endsection