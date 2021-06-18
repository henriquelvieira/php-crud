<?php
    require_once('functions.php');
    index();

    include(HEADER_TEMPLATE); 

    include('clientes\modalRemover.php');

?>



<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Clientes</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="clientes/cadastro.php"><i class="fa fa-plus"></i> Novo Cliente</a>
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>

	<?php 
        clear_messages();
        endif; 
  ?>



<table class="table table-hover table-responsive">
    <thead>
        <tr>
            <th>ID</th>
            <th width="20%">Nome</th>
            <th>Dt. Nasc</th>
            <th>Sexo</th>
            <th>CEP</th>
            <th>Endereço</th>
            <th>Número</th>
            <th>Complemento</th>
            <th>Bairro</th>
            <th>UF</th>
            <th>Cidade</th>
            <th width="15%">Opções</th>
        </tr>
    </thead>
    
    <tbody>
    <?php 
        if ($vgClientes) : 
            foreach ($vgClientes as $vCliente) : 
    ?>
        <tr>
            <td><?php echo $vCliente['CLIENTE_ID']; ?></td>
            <td><?php echo $vCliente['CLIENTE_NOME']; ?></td>
            <td><?php echo $vCliente['CLIENTE_DT_NASC']; ?></td>
            <td><?php echo $vCliente['CLIENTE_SEXO']; ?></td>
            <td><?php echo $vCliente['CLIENTE_CEP']; ?></td>
            <td><?php echo $vCliente['CLIENTE_ENDERECO']; ?></td>
            <td><?php echo $vCliente['CLIENTE_NUMERO']; ?></td>
            <td><?php echo $vCliente['CLIENTE_COMPLEMENTO']; ?></td>
            <td><?php echo $vCliente['CLIENTE_BAIRRO']; ?></td>
            <td><?php echo $vCliente['CLIENTE_UF']; ?></td>
            <td><?php echo $vCliente['CLIENTE_CIDADE']; ?></td>

            <td class="actions text-right">
                <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#view-modal-id-<?php echo $vCliente['CLIENTE_ID']; ?>" data-cliente="<?php echo $vCliente['CLIENTE_ID']; ?>"><i class="fa fa-eye"></i></a>
                <a href="clientes\cadastro.php?id=<?php echo $vCliente['CLIENTE_ID']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $vCliente['CLIENTE_ID']; ?>"><i class="fa fa-trash"></i></a>
            </td>

        </tr>

        <!-- Modal de Delete-->
        <div class="modal fade" id="view-modal-id-<?php echo $vCliente['CLIENTE_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detalhes do Clientes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              
                <?php   
                    require_once('functions.php'); 
                ?>
                
                <div class="form-group col-md-7">
                  <label for="name"><b>ID:</b></label>
                  <label for="name"><?php echo $vCliente['CLIENTE_ID']; ?></label>
                </div>

                <div class="form-group col-md-7">
                  <label for="campo2"><b>Nome:</b></label>
                  <label for="name"><?php echo $vCliente['CLIENTE_NOME']; ?></label>
                </div>

                <div class="form-group col-md-7">
                  <label for="campo2"><b>Dt. Nasc:</b></label>
                  <label for="name"><?php echo $vCliente['CLIENTE_DT_NASC']; ?></label>
                </div>

                <div class="form-group col-md-7">
                  <label for="campo2"><b>Sexo:</b></label>
                  <label for="name"><?php echo $vCliente['CLIENTE_SEXO']; ?></label>
                </div>

                <div class="form-group col-md-7">
                  <label for="campo2"><b>CEP:</b></label>
                  <label for="name"><?php echo $vCliente['CLIENTE_CEP']; ?></label>
                </div>

                <div class="form-group col-md-7">
                  <label for="campo2"><b>Endereço:</b></label>
                  <label for="name"><?php echo $vCliente['CLIENTE_ENDERECO']; ?></label>
                </div>

                <div class="form-group col-md-7">
                  <label for="campo2"><b>Número:</b></label>
                  <label for="name"><?php echo $vCliente['CLIENTE_NUMERO']; ?></label>
                </div>

                <div class="form-group col-md-7">
                  <label for="campo2"><b>Complemento:</b></label>
                  <label for="name"><?php echo $vCliente['CLIENTE_COMPLEMENTO']; ?></label>
                </div>


                <div class="form-group col-md-7">
                  <label for="campo2"><b>Bairro:</b></label>
                  <label for="name"><?php echo $vCliente['CLIENTE_BAIRRO']; ?></label>
                </div>

                <div class="form-group col-md-7">
                  <label for="campo2"><b>UF:</b></label>
                  <label for="name"><?php echo $vCliente['CLIENTE_UF']; ?></label>
                </div>

                <div class="form-group col-md-7">
                  <label for="campo2"><b>Cidade:</b></label>
                  <label for="name"><?php echo $vCliente['CLIENTE_CIDADE']; ?></label>
                </div>

              </div>
              <div class="modal-footer">
                <a id="cancel" class="btn btn-default" data-dismiss="modal">Fechar</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.modal -->









    <?php 
            endforeach; 
        else : ?>
        <tr>
            <td colspan="11">Nenhum registro encontrado.</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>


<?php include(FOOTER_TEMPLATE);  ?>


