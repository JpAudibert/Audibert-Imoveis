<div class="control-group form-group row">
        <div class="controls col-md-6">
          <label for="obs" class="form-label">Observações:</label><br>
          <textarea class="form-control" id="obs" name="obs" rows="4" placeholder="Observações do Imóvel" required>{{$imovel->obs}}</textarea>
        </div>
        <div class="controls col-md-6">
          <label for="img" class="form-label">Imagens:</label><br>
          <div class="custom-file">
          <input type="file" class="custom-file-input" id="img" name="img[]" multiple value="{{$imovel->img[0]}}">
            <label for="img" class="custom-file-label">Selecione</label><br>
          </div>
          <button type="submit" class="btn btn-primary abaixa">Enviar</button>
        </div>
      </div>
      </div>
    </form>
  </div>
  </div>
</div>
