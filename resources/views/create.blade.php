@extends('templates.template')


@section('content')
<h1 class="text-center"> @if($book) EDITAR @else CADASTRAR @endif </h1> <hr>
    @if (isset($errors)&& count($errors)>0)
        <div class="text-center mt-4 mb-4 p-2 alert-danger" >
            @foreach ($errors->all() as $erro)
                {{$erro}}
            @endforeach
        </div>
    @endif

    @if ($book)
    <form name="forEdit" id="formEdit" method="POST" action="{{url("books/$book->id")}}">
        @method('PUT')
    @else
    <form name="forCad" id="formCad" method="POST" action="{{url("books")}}">
    @endif
            

    <div class="col-8 m-auto">
    <form name="forCad" id="formCad" method="POST" action="{{url("books")}}">
    @csrf
    <input class="form-control" type="text" name="title" id="title" value="{{$book->title ?? ''}}" placeholder="Titulo" required> <br>
    <input class="form-control" type="text" name="pages" id="pages" value="{{$book->pages ?? ''}}" placeholder="Paginas" required> <br>
    <select class="form-control" name="id_user" id="id_user">
    <option value="{{$book->relUsers->id ?? ''}}">{{$book->relUsers->name ?? 'Author'}}</option>
        @foreach ($users as $user)
    <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select> <br>  
    <input class="form-control" type="text" name="price" id="price" placeholder="Preço" value="{{$book->price ?? ''}}" required> <br>
    <input type="submit" class="btn btn-primary" value="@if($book) EDITAR @else CADASTRAR @endif" required>
    
    
    
    
    </form>

    </div>
