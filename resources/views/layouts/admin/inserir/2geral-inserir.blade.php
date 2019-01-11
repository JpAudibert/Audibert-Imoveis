<div class="control-group form-group row">
    <div class="controls col-md-6">
        <label for="obs" class="form-label">Observações:</label><br>
        <textarea class="form-control" id="obs" name="obs" rows="4" placeholder="Observações do Imóvel" required></textarea>
    </div>
    <div class="controls col-md-6">
        <label for="img" class="form-label">Imagens: <span style="color:gray;">(a primeira imagem será o destaque)<span></label><br>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="img" name="img[]" multiple required>
                <label for="img" class="custom-file-label">Selecione</label>
            </div>
        </div>
    </div>
    <br><h5>Notas:</h5><br>
    <div class="control-group form-group row">
        <div class="controls col-md-6">
            <label for="nome_prop" class="form-label">Nome do Proprietário:</label><br>
            <input type="text" class="form-control" id="nome_prop" name="nome_prop" placeholder="Nome do Proprietário">
        </div>
        <div class="controls col-md-6">
            <label for="matricula" class="form-label">Número da Matrícula:</label><br>
            <input type="text" class="form-control" id="matricula" name="matricula" placeholder="Número da Matrícula">
        </div>
    </div>
    <div class="control-group form-group row">
        <div class="controls col-md-6">
            <label for="telefone_prop" class="form-label">Telefone do Proprietário:</label><br>
            <input type="text" class="form-control" id="telefone_prop" name="telefone_prop" placeholder="Telefone do Proprietário">
        </div>
        <div class="controls col-md-6">
            <label for="celular_prop" class="form-label">Celular do Proprietário:</label><br>
            <input type="text" class="form-control" id="celular_prop" name="celular_prop" placeholder="Celular do Proprietário">
        </div>
    </div>
    <div class="control-group form-group row">
        <div class="controls col-md-6">
            <label for="obs" class="form-label">Notas:</label><br>
            <textarea class="form-control" id="obs" name="notas" rows="4" placeholder="Notas da Venda"></textarea>
        </div>
        <div class="controls col-md-6">
            <label for="valor_real" class="form-label">Valor do Imóvel (Se sob consulta):</label><br>
            <input type="text" class="form-control" id="valor_real" name="valor_real" placeholder="Valor do Imóvel (Se sob consulta)">
            <button type="submit" class="btn btn-primary abaixa-muito">Enviar</button>
        </div>
    </div>
</form>
</div>
</div>
</div>
