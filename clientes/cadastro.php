<?php 
  
  require_once('../clientes_functions.php'); 
  
  if (isset($_GET['id'])) {
    edit();   
    $vSexoEdit  = isset($vgCliente['CLIENTE_SEXO']) ? $vgCliente['CLIENTE_SEXO'] : '';
    $vTitulo = 'Editar Cliente';

  } else {
    add(); 
    $vSexoEdit  = '';
    $vTitulo = 'Novo Cliente';
  }

  include(HEADER_TEMPLATE); 


  echo '<h2>'. $vTitulo . '</h2>';
?>


<form action="cadastro.php<?php echo (isset($_GET['id'])) ? '?id='. $vgCliente['CLIENTE_ID'] : '' ?>" method="post">
  

  <hr />
  
  <div class="row">

    <div class="form-group col-md-7">
      <label for="name">Nome:</label>
      <input type="text" class="form-control" name="cliente['CLIENTE_NOME']"  placeholder="Seu Nome" value="<?php echo isset($vgCliente['CLIENTE_NOME']) ? $vgCliente['CLIENTE_NOME'] : ''; ?>"  required>
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Dt. Nascimento:</label>
      <input type="date" class="form-control" name="cliente['CLIENTE_DT_NASC']" value="<?php echo isset($vgCliente['CLIENTE_DT_NASC']) ? $vgCliente['CLIENTE_DT_NASC'] : ''; ?>"  required>
    </div>
   
    <div class="form-group col-md-3">
      <fieldset class="form-group" required>

          <legend class="col-form-label col-sm-2 pt-0">Sexo:</legend>
          
            
            <div class="form-check">
              <input class="form-check-input" type="radio" name="cliente['CLIENTE_SEXO']" id="gridRadios1" value="M" <?php echo $vSexoEdit == 'M' ?  'checked' : ''; ?> required>
              <label class="form-check-label" for="gridRadios1">Masculino</label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="cliente['CLIENTE_SEXO']" id="gridRadios1" value="F" <?php echo $vSexoEdit == 'F' ?  'checked' : ''; ?> required>
              <label class="form-check-label" for="gridRadios1">Feminino</label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="cliente['CLIENTE_SEXO']" id="gridRadios1" value="O" <?php echo $vSexoEdit == 'O' ?  'checked' : ''; ?> required>
              <label class="form-check-label" for="gridRadios1">Outro</label>
            </div>

      </fieldset>
    </div>

  </div>
  
  <div class="row">

    <div class="form-group col-md-2">
      <label for="campo1">CEP:</label>
      <input type="text" class="form-control" name="cliente['CLIENTE_CEP']" maxlength="9" onblur="pesquisacep(this.value);" value="<?php echo isset($vgCliente['CLIENTE_CEP']) ? $vgCliente['CLIENTE_CEP'] : ''; ?>" > 
    </div>
    
    <div class="form-group col-md-5">
      <label for="campo1">Endereço:</label>
      <input type="text" class="form-control" id="CLIENTE_ENDERECO" name="cliente['CLIENTE_ENDERECO']" value="<?php echo isset($vgCliente['CLIENTE_ENDERECO']) ? $vgCliente['CLIENTE_ENDERECO'] : ''; ?>" readonly>
    </div>

    <div class="form-group col-md-2">
      <label for="campo1">Número:</label>
      <input type="text" class="form-control" name="cliente['CLIENTE_NUMERO']" value="<?php echo isset($vgCliente['CLIENTE_NUMERO']) ? $vgCliente['CLIENTE_NUMERO'] : ''; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo1">Complemento:</label>
      <input type="text" class="form-control" name="cliente['CLIENTE_COMPLEMENTO']" value="<?php echo isset($vgCliente['CLIENTE_COMPLEMENTO']) ? $vgCliente['CLIENTE_COMPLEMENTO'] : ''; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Bairro:</label>
      <input type="text" class="form-control" id="CLIENTE_BAIRRO" name="cliente['CLIENTE_BAIRRO']" value="<?php echo isset($vgCliente['CLIENTE_BAIRRO']) ? $vgCliente['CLIENTE_BAIRRO'] : ''; ?>" readonly>
    </div>
    
    <div class="form-group col-md-1">
      <label for="campo3">UF</label>
      <input type="text" class="form-control" id="CLIENTE_UF" name="cliente['CLIENTE_UF']" value="<?php echo isset($vgCliente['CLIENTE_UF']) ? $vgCliente['CLIENTE_UF'] : ''; ?>" readonly>
    </div>

    <div class="form-group col-md-3">
      <label for="campo1">Município</label>
      <input type="text" class="form-control" id="CLIENTE_CIDADE" name="cliente['CLIENTE_CIDADE']" value="<?php echo isset($vgCliente['CLIENTE_CIDADE']) ? $vgCliente['CLIENTE_CIDADE'] : ''; ?>" readonly>
    </div>

  </div>

  <hr>

  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="<?php echo BASEURL; ?>" class="btn btn-default">Cancelar</a>
    </div>
  </div>

</form>

<?php include(FOOTER_TEMPLATE); ?>