@extends('admin.layouts.principal')
@section('conteudo-principal')
  <section>
      <table>
          <thead>
              <tr>
              <th>Cidades</th>
              <th>Opções</th>
              </tr>
          </thead>
          <tbody>
              @forelse ($municipios as $municipio)
                    <tr>
                        <td>{{$municipio}}</td>
                        <td>Excluir - Remover</td>
                    </tr>
              @empty
                   <tr>
                        <td colspan="2"> Não existe cidades cadastradas.</td>
                   </tr>
              @endforelse
              @section('conteudo-Secudario')
                     <p>conteudo  secundario</p>
              @endsection
          </tbody>
      </table>
  </section>
@endsection
