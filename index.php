<?php include 'template/header.php' ?>

<?php
include_once "model/conexao.php";
$frase = $bd->query("select * from pessoa");
$pessoa = $frase->fetchAll(PDO::FETCH_OBJ);
//print_r($pessoa);
?>

<div class="container mt-5">
  <div class="row justify-content-center ">


    <div class="col-md-4">
      <div class="card">
        <div class="card-header text-center bg-primary text-light">
          Cadastrar Contato
        </div>
        <form class="p-4" method="POST" action="salvar.php">
          <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" name="txtNome" autofocus required>
          </div>

          <div class="mb-3">
            <label class="form-label">Empresa</label>
            <input type="text" class="form-control" name="txtEmpresa" autofocus required>
          </div>

          <div class="mb-3">
            <label class="form-label">Contato</label>
            <input type="number" class="form-control" name="txtContato" autofocus required>
          </div>
          <div class="d-grid">
            <input type="hidden" name="oculto" value="1">
            <input type="submit" class="btn btn-primary" value="Cadastrar">
          </div>
        </form>
      </div>
    </div>

    <div class="col-md-5">
      <!-- inicio da mensagem -->
      <?php
      if (isset($_GET['mensagem']) and $_GET['mensagem'] == 'erro') {
      ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Erro!</strong> Preencha todos os campos
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
      }
      ?>

      <?php
      if (isset($_GET['mensagem']) and $_GET['mensagem'] == 'salvo') {
      ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Salvo!</strong> As informações foram salvas com sucesso
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
      }
      ?>

      <?php
      if (isset($_GET['mensagem']) and $_GET['mensagem'] == 'error') {
      ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Erro!</strong> Tente novamente.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
      }
      ?>

      <!-- fim da mensagem  -->
      <div class="card">
        <div class="card-header text-center bg-primary text-light">
          Lista de Contatos
        </div>
        <div class="p4" style="height: 345px; overflow-y: auto">
          <table class="table align-middle">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Contato</th>
                <th scope="col">Empresa</th>

              </tr>
            </thead>

            <tbody>

              <?php
              foreach ($pessoa as $dado) {
              ?>

                <tr>
                  <td scope="row"><?php echo $dado->id; ?></td>
                  <td><?php echo $dado->nome; ?></td>
                  <td><?php echo $dado->contato; ?></td>
                  <td><?php echo $dado->empresa; ?></td>

                </tr>

              <?php
              }
              ?>

            </tbody>
          </table>

        </div>
      </div>
    </div>

  </div>
</div>

<?php include 'template/footer.php' ?>