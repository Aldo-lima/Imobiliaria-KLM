@extends('admin.layouts.principal')
@section('conteudo-principal')
<form action="{{$action}}" method="POST">
    @csrf
    @isset($imovel)
    @method('PUT')
    @endisset
    <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Titulo</label>
        <input type="text" id="disabledTextInput" name="titulo" value="{{old('titulo', $imovel->titulo ?? '' )}}"  class="form-control" placeholder="Disabled input">
        @error('titulo')
        <span>{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="disabledSelect" class="form-label">Tipo</label>
        <select id="disabledSelect"  name="tipo_id" class="form-select">
          <option>Escolha um Tipo</option>
           @foreach ($tipos as $tipo)
           <option value="{{$tipo->id}}"
            {{old('tipo_id', $imovel->tipo->id ?? '') == $tipo->id ? 'selected' : ''}}>{{$tipo->nome}}</option>

           @endforeach
        </select>
      </div>
      @error('tipo_id')
      <span>{{$message}}</span>
      @enderror
      <div class="mb-3">
        <label for="disabledSelect" class="form-label">Cidade</label>
        <select id="disabledSelect"  name="municipio_id" class="form-select">
          <option>Escolha um municipio</option>
           @foreach ($municipios as $municipio)
           <option value="{{$municipio->id}}"
             {{old('municipio_id', $imovel->municipio->id ?? '') == $municipio->id ? 'selected' : ''}}>{{$municipio->nome}}</option>
           @endforeach
        </select>
        @error('municipio_id')
        <span>{{$message}}</span>
        @enderror
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" value="1" name="finalidade_id" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          Alugel
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" value="2" name="finalidade_id" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
          Venda
        </label>
        @error('finalidade_id')
        <span>{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Preço</label>
        <input type="number" id="disabledTextInput" name="preco" value="{{old('preco', $imovel->preco ?? '' )}}"  class="form-control" placeholder="Disabled input">
      </div>
      @error('preco')
      <span>{{$message}}</span>
      @enderror
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Quantidade de dormitorio</label>
        <input type="number" name="dormitorio" value="{{old('dormitorio', $imovel->dormitorio ?? '' )}}"  id="disabledTextInput" class="form-control" placeholder="Disabled input">
        @error('dormitorio')
        <span>{{$message}}</span>
        @enderror
    </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Quantidade de salas</label>
        <input type="number" name="salas" value="{{old('salas', $imovel->salas ?? '' )}}"  id="disabledTextInput" class="form-control" placeholder="Disabled input">
        @error('salas')
        <span>{{$message}}</span>
        @enderror
    </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Quantidade de balheiro</label>
        <input type="number" id="disabledTextInput" name="banheiro" value="{{old('banheiro', $imovel->banheiro ?? '' )}}"  class="form-control" placeholder="Disabled input">
        @error('banheiro')
        <span>{{$message}}</span>
        @enderror
    </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Terreno m² </label>
        <input type="number" id="disabledTextInput" name="terreno" value="{{old('terreno', $imovel->terreno ?? '' )}}"  class="form-control" placeholder="Disabled input">
        @error('terreno')
        <span>{{$message}}</span>
        @enderror
    </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Vagas na garagens</label>
        <input type="number" id="disabledTextInput" name="garagems" value="{{old('garagems', $imovel->garagems ?? '' )}}" class="form-control" placeholder="Disabled input">
        @error('garagems')
        <span>{{$message}}</span>
        @enderror
    </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
        <textarea class="form-control"name="Descricao" value="{{old('Descricao', $imovel->descricao ?? '' )}}"  id="exampleFormControlTextarea1" rows="3"></textarea>
        @error('Descricao')
        <span>{{$message}}</span>
        @enderror
    </div>
      {{-- Endereço --}}
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Rua</label>
        <input type="text" class="form-control" name="rua" value="{{old('rua', $imovel->endereco->rua ?? '' )}}"  id="exampleFormControlInput1" placeholder="Rua">
        @error('rua')
        <span>{{$message}}</span>
        @enderror
    </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Numero</label>
        <input type="number" class="form-control" name="numero" value="{{old('numero', $imovel->endereco->numero ?? '' )}}"  id="exampleFormControlInput1" placeholder="Numero">
        @error('numero')
        <span>{{$message}}</span>
        @enderror

    </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Complemento</label>
        <input type="text"  class="form-control" name="complemento" value="{{old('complemento', $imovel->endereco->complemento ?? '' )}}" id="exampleFormControlInput1" placeholder="Complemento">
        @error('complemento')
        <span>{{$message}}</span>
        @enderror
    </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Bairro</label>
        <input type="text" class="form-control" name="bairro" value="{{old('bairro', $imovel->endereco->bairro ?? '' )}}" id="exampleFormControlInput1" placeholder="Bairro">
        @error('bairro')
        <span>{{$message}}</span>
        @enderror
    </div>

     <div class="ruw">
          <div class="input-field col s12">
              <select name="proximidade[]" id="proximidade" multiple >
                  <option value="" disabled>selecione uma proximidade</option>
                  @foreach ($proximidades as $proximidade)
                  <option value="{{$proximidade->id}}">{{$proximidade->nome}}</option>
                  @endforeach
              </select>
          </div>
          @error('proximidades')
          <span>{{$message}}</span>
          @enderror
     </div>
         <button type="submit" class="btn btn-primary">Salvar</button>
    </fieldset>
  </form>
 @section('conteudo-Secudario')
@endsection
          </tbody>
@endsection


