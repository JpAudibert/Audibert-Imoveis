<br>
    <h5> Dados Gerais:</h5><br>
            <div class="control-group form-group row">
                  <div class="controls col-md-6">
                    <label for="titulo" class="form-label">Título:</label><br>
                    <input type="text" class="form-control" id="titulo" name="titulo" required="" placeholder="Título do Anúncio">
                  </div>
                  <div class="controls col-md-6">
                    <label for="areatt" class="form-label">Área Total / Área do Terreno:</label><br>
                    <input type="text" class="form-control" id="areatt" name="areatt" required=""  placeholder="Área do Imóvel" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                  </div>
                </div>

                <div class="control-group form-group row">
                  <div class="controls col-md-6">
                    <label for="valor" class="form-label">Valor: <span style="color:gray">(deixe em branco se sob consulta)</span></label><br>
                    <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor do Imóvel">
                  </div>
                  <div class="controls col-md-6">
                    <label for="endereco" class="form-label">Endereço:</label><br>
                    <input type="text" class="form-control" id="endereco" name="endereco" required="" placeholder="Endereço do Imóvel">
                  </div>
                </div>

                <div class="control-group form-group row">
                  <div class="controls col-md-6">
                    <label for="cidade" class="form-label">Cidade:</label><br>
                    <input type="text" class="form-control" id="cidade" name="cidade" required="" placeholder="Cidade do Imóvel">
                  </div>
                  <div class="controls col-md-6">
                    <label for="bairro" class="form-label">Bairro:</label><br>
                    <input type="text" class="form-control" id="bairro" name="bairro" required="" placeholder="Bairro em que se encontra">
                  </div>
                </div>

                <div class="control-group form-group row">
                  <div class="controls col-md-6">
                    <label for="cep" class="form-label">CEP:</label><br>
                    <input type="text" class="form-control" id="cep" name="cep" required="" placeholder="CEP do local - (00000-000)" pattern="\d{5}-\d{3}">
                  </div>
                  <div class="controls col-md-6">
                    <label for="estado" class="form-label">Estado:</label><br>
                    <input type="text" class="form-control" id="estado" name="estado" required="" placeholder="UF">
                  </div>
                </div>
