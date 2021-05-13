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
                  <td>{{$municipio->nome}}</td>
                  <td>Excluir - Remover</td>
              </tr>
        @empty
             <tr>
                  <td colspan="2"> Não existe cidades cadastradas.</td>
             </tr>
        @endforelse

        @section('conteudo-Secudario')
        <a href="{{ route('municipio.create')}}"><button type="button" class="btn btn-success">Cadastrar Nova Cidade</button></a>

           @if (session('sucesso'))
                <div>
                    {{session('sucesso')}}
                </div>
           @endif

        @endsection
    </tbody>
</table>
