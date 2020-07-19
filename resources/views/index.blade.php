@extends('templates.template')


@section('content')
    <h1 class="text-center">CRUD</h1>

    <div class="text-center">
    <a href="{{url('books/create')}}">

        <button class="btn btn-success">Cadastrar</button>
      </a>
    </div>
    <br><br>


<div class="col-8 m-auto">
    <table class="table text-center">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Paginas</th>
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th scope="col">Preço</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($book as $books)
            @php
                $user = $books->find($books->id)->relUsers;
            @endphp
              <tr>
              <th scope="row">{{$books->pages}}</th>
              <td>{{$books->title}}</td>
              <td>{{$user->name}}</td>
              <td>R$ {{$books->price}}</td>
              <td>
              <a href="{{url("books/$books->id")}}">
                  <button class="btn btn-dark">Vizualizar</button>
                </a>
              <a href="{{url("books/$books->id/edit")}}">
                  <button class="btn btn-primary">Editar</button>
                </a>

                <form method="POST" action="{{url("books/$books->id")}}" >
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
              </td>
              </tr>
          @endforeach

      </table>
</div>

@endsection
