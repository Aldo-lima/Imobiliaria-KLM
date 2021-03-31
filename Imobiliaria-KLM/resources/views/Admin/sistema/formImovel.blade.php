@extends('admin.layouts.principal')
@section('conteudo-principal')
<form action="{{$action}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Titulo</label>
        <input type="text" id="disabledTextInput" name="titulo"  class="form-control" placeholder="Disabled input">
    </div>
    <div class="mb-3">
        <label for="disabledSelect" class="form-label">Tipo</label>
        <select id="disabledSelect"  name="tipo_id" class="form-select">
          <option>Escolha um Tipo</option>
           @foreach ($tipos as $tipo)
           <option value="{{$tipo->id}}">{{$tipo->nome}}</option>
           @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="disabledSelect" class="form-label">Cidade</label>
        <select id="disabledSelect"  name="municipio_id" class="form-select">
          <option>Escolha um municipio</option>
           @foreach ($municipios as $municipio)
           <option value="{{$municipio->id}}">{{$municipio->nome}}</option>
           @endforeach
        </select>
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
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Preço</label>
        <input type="number" id="disabledTextInput" name="preco"  class="form-control" placeholder="Disabled input">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Quantidade de dormitorio</label>
        <input type="number" name="dormitorio" id="disabledTextInput" class="form-control" placeholder="Disabled input">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Quantidade de salas</label>
        <input type="number" name="salas" id="disabledTextInput" class="form-control" placeholder="Disabled input">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Quantidade de balheiro</label>
        <input type="number" id="disabledTextInput" name="banheiro" class="form-control" placeholder="Disabled input">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Terreno m² </label>
        <input type="number" id="disabledTextInput" name="terreno" class="form-control" placeholder="Disabled input">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Vagas na garagens</label>
        <input type="number" id="disabledTextInput"name="garagems" class="form-control" placeholder="Disabled input">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
        <textarea class="form-control"name="Descricao" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      {{-- Endereço --}}
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Rua</label>
        <input type="text" class="form-control" name="rua" id="exampleFormControlInput1" placeholder="Rua">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Numero</label>
        <input type="number" class="form-control" name="numero" id="exampleFormControlInput1" placeholder="Numero">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Complemento</label>
        <input type="text" class="form-control" name="complemento" id="exampleFormControlInput1" placeholder="Complemento">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Bairro</label>
        <input type="text" class="form-control" name="bairro" id="exampleFormControlInput1" placeholder="Bairro">
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
     </div>
         <button type="submit" class="btn btn-primary">Salvar</button>
    </fieldset>
  </form>
 @section('conteudo-Secudario')
@endsection
          </tbody>
@endsection


