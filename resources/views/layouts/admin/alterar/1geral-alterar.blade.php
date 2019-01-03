<input name="id" id="id" type="hidden" value="{{$imovel['id']}}">
            <div class="row">
              <div class="container">
                  <br>
                <h5> Dados Gerais:</h5><br>
                <div class="control-group form-group row">
                  <div class="controls col-md-6">
                    <label for="titulo" class="form-label">Título:</label><br>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="{{$imovel->titulo}}" required data-validation-required-message="Insira o Título" placeholder="Título do Anúncio">
                  </div>
                  <div class="controls col-md-6">
                    <label for="areatt" class="form-label">Área Total:</label><br>
                    <input type="text" class="form-control" id="areatt" name="areatt" value="{{$imovel->areatt}}" required data-validation-required-message="Insira a Área Total" placeholder="Área Total do Imóvel" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                  </div>
                </div>

                <div class="control-group form-group row">
                  <div class="controls col-md-6">
                    <label for="valor" class="form-label">Valor:</label><br>
                    <input type="text" class="form-control" id="valor" name="valor" value="{{$imovel->valor}}"  data-validation-required-message="Insira o Valor" placeholder="Valor do Imóvel" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                  </div>
                  <div class="controls col-md-6">
                    <label for="endereco" class="form-label">Endereço:</label><br>
                    <input type="text" class="form-control" id="endereco" name="endereco" value="{{$imovel->endereco}}" required data-validation-required-message="Insira o Endereço" placeholder="Endereço do Imóvel">
                  </div>
                </div>

                <div class="control-group form-group row">
                  <div class="controls col-md-6">
                    <label for="cidade" class="form-label">Cidade:</label><br>
                    <input type="text" class="form-control" id="cidade" name="cidade" value="{{$imovel->cidade}}" required data-validation-required-message="Insira a Cidade" placeholder="Cidade do Imóvel">
                  </div>
                  <div class="controls col-md-6">
                    <label for="bairro" class="form-label">Bairro:</label><br>
                    <input type="text" class="form-control" id="bairro" name="bairro" value="{{$imovel->bairro}}" required data-validation-required-message="Insira o Bairro" placeholder="Bairro em que se encontra">
                  </div>
                </div>

                <div class="control-group form-group row">
                  <div class="controls col-md-6">
                    <label for="cep" class="form-label">CEP:</label><br>
                    <input type="text" class="form-control" id="cep" name="cep" value="{{$imovel->cep}}"  >
                  </div>
                  <div class="controls col-md-6">
                    <label for="estado" class="form-label">Estado:</label><br>
                    <input type="text" class="form-control" id="estado" name="estado" value="{{$imovel->estado}}" required data-validation-required-message="Insira o Estado" placeholder="UF">
                  </div>
                </div>
