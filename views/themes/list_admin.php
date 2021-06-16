
<?php if(!empty($users)){  ?>

<table class="centered highlight">
<thead>
          <tr>
              <th>Código</th>
              <th>Usuário</th>
              <th>Nome</th>
              <th>CPF</th>
              <th>Ações</th>
              
          </tr>
</thead>
<tbody>

<?php 

  

  

  foreach($users as $user){
    
?>


<tr>
<td> <b> <?= $user['US_CODIGO'] ?> </b></td>
<td><?= $user['US_USUARIO']?></td>
<td><?= $user['US_NOME'] ?></td>
<td><?= formatCPF($user['US_CPF']) ?></td>
<td> <a class="btn-floating btn-small waves-effect waves-light yellow darken-3" name="update" href="<?= "listar/editar?id=". $user['US_CODIGO'] ?>"><i class="material-icons right">edit</i></a>
<button class="btn-floating btn-small waves-effect waves-light red" name="delete" data-action="" data-id=""><i class="material-icons right">delete_forever</i></button> </td>
</tr>
        
       

     
         
<?php } ?> </tbody> </ <?php }else{ ?>
    <div class="row center">
        <div>
          <div class="card grey lighten-3">
            <div class="card-content white-text">
              <span class="card-title grey-text text-darken-4">Nenhum Usuário Cadastrado</span>
              <p class="grey-text text-darken-2">Para cadastrar um novo usuário, clique no botão abaixo.</p>
            </div>
            <div class="card-action">
              <a href="" class="light-green-text text-lighten-1">CADASTRAR USUÁRIO</a>

            </div>
          </div>
        </div>
      </div>
      <?php }

      ?>


 


    
            

    


