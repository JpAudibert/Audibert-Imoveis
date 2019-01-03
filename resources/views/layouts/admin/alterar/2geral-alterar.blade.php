<div class="control-group form-group row">
        <div class="controls col-md-6">
            <label for="obs" class="form-label">Observações:</label><br>
            <textarea class="form-control" id="obs" required="" name="obs" rows="4" placeholder="Observações do Imóvel" required>{{$imovel->obs}}</textarea>
        </div>
        <div class="controls col-md-6">
            <label for="obs" class="form-label">Notas:</label><br>
            <textarea class="form-control" id="obs" name="notas" rows="4" placeholder="Notas da Venda">{{$imovel->notas}}</textarea>
        </div>
    </div>
    <div class="control-group form-group row">
        <div class="controls col-md-6">
            <label for="img" class="form-label">Imagens: <span style="color:gray;">(a última imagem será o destaque)<span></label><br>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="img" required="" name="img[]" multiple value="{{$imovel->img[0]}}">
                    <label for="img" class="custom-file-label">Selecione</label>
                </div>
            </div>
                <div class="controls col-md-6">
                    <button type="submit" class="btn btn-primary abaixa inline">Enviar</button>
                </div>
        </div>
    </div>
    </form>
    </div>
    </div>
    </div>

