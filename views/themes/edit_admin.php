


    <div class="main_content_box">

      <form class="form" action="" method="post" autocomplete="off">

    <form class="col s12">

      <div class="row">
      <div class="row">
      <div class="input-field col s6">
          <input id="first_name" type="number" class="validate" name="first_name" value="<?= $user[0]['US_CODIGO'] ?>">
          <label for="first_name">Código</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="last_name" value="<?= $user[0]['US_USUARIO'] ?>">
          <label for="last_name">Usuário</label>
        </div>

      </div>
     
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="text" class="validate" name="nome" value="<?= $user[0]['US_NOME'] ?>">
          <label for="email">Nome</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="cpf" type="text" name="cpf">
          <label for="cpf">EMAIL</label>
        </div>

      </div>

      <div class="row">

      <div class="input-field col s6">
          <input id="first_name" type="number" class="validate" name="first_name" value="<?= $user[0]['US_CARGO'] ?>">
          <label for="first_name">Cargo</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="number" class="validate" name="last_name" value="<?= $user[0]['US_NIVEL'] ?>">
          <label for="last_name">Nível</label>
        </div>

      </div>

        <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="passwd" value="US_SENHA">
          <label for="password">Senha</label>
        </div>
      </div>

      <div class="row center">
      <div class="input-field col s12">
      <button class="waves-effect waves-light btn"><i class="material-icons right">edit</i>EDITAR</a>
      </div>
      </div>
    
    </form>
  </div>
      

     




