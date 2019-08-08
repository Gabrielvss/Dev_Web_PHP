@extends('layout.site')

@section('titulo','Editar')

@section('conteudo')

<div class="container">
    <h3 class="center">Editando Musicas</h3>
    <br>
    <div class="row">
        <form action="{{route('admin.cursos.atualizar',$registro->id)}}" method ="POST">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">
            @include('Admin.cursos._form')

            <button class="btn deep-red">Atualizar</button>
        </form>
        
    </div>
</div>

@endsection