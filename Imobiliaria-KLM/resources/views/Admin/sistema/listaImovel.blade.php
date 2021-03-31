@extends('admin.layouts.principal')
@section('conteudo-principal')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Cidade</th>
        <th scope="col">Bairro</th>
        <th scope="col">Título</th>
        <th scope="col">Opções</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($imoveis as $imovel)
        <th >{{$imovel->municipio->nome}}</th>
        <td >{{$imovel->endereco->bairro}}</td>
        <td>{{$imovel->titulo}}</td>
      </tr>
      @empty

      @endforelse
    </tbody>
  </table>
 @section('conteudo-Secudario')
              <a href="{{ route('imovel.create')}}"><button type="button" class="btn btn-success">Cadastrar Nova Imovel</button></a>
              @endsection
          </tbody>
      </table>
  </section>
@endsection
