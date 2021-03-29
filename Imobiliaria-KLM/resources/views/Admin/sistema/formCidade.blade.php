@extends('admin.layouts.principal')
@section('conteudo-principal')
  <section>

    <form action="{{$action}}" method="POST">
        @csrf
        @isset($municipio)
         @method('PUT')
        @endisset
        <div class="mb-3">
            <label for="Cidade Nome" class="form-label">Cidade Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{old('nome', $municipio->nome ?? '')}}" aria-describedby="nome da cidade">
            @error('nome')
            <span>{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
        <a href="{{ route('municipio.index')}}"><button type="button" class="btn btn-primary">Cancelar</button></a>
@endsection
