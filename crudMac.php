  <!DOCTYPE html>
  <html lang="en">
  
  <head>
  <meta charset="UTF-8">
    <title>Cadastrar Maçaneta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather|Inconsolata">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
      .font2 {
        font-family: "Merriweather", sans-serif;
        }
        .font1 {
        font-family: "Inconsolata", sans-serif;
        }
      .centro{
        margin-left: 900px;
      }
  
      .logo1{
        margin-left: 200px;
      }
      .logo2{
        margin-right: 100px;
      }
    </style>
  </head>
  
  <body>
  <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper brown font2">
          <a href="#!" class="brand-logo logo1">TudoMaçanetas.com</a>
          <ul class="right hide-on-med-and-down logo2">
            <li><a href="crudPorta.php">Portas</a></li>
            
            <li><a href="crudMac.php">Maçanetas</a></li>
          </ul>
        </div>
      </nav>
    </div>
  
    <br><br><br><br><br>
  
    <i class="material-icons prefix large centro">door_front</i>
    <section class="container">
      <div class="row">
  
        <h3 class="center-align font2"> Cadastrar Maçaneta </h3>
        <article class="col s6 offset-s3">
          <form method="POST" action="cadastrarMac.php">
            <div class="input-field">
              <i class="material-icons prefix">palette</i>
              <label for="cor">Cor </label>
              <input type="text" name="cor" required>
            </div>
  
            <div class="input-field">
              <i class="material-icons prefix ">create</i>
              <label for="modelo">Modelo</label>
              <input type="text" name="modelo" required>
            </div>
  
            <div class="input-field">
              <i class="material-icons prefix">attach_money</i>
              <label for="valor">Valor</label>
              <input type="number" name="valor" required>
            </div>
  
  
            <p class="center-align">
              <button class="waves-effect waves-light btn brown" type="submit"><i class="material-icons right">send</i> Cadastrar </button>
            </p>
  
          </form>
  
        </article>
      </div>
    </section>
    </form>
  
  <body>
  
    <main class="container">
    <h2 class="font2"> Maçaneta </h2>
  
  
      <table class="bordered highlight responsive-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Cor</th>
            <th>Modelo</th>
            <th>Valor</th>
          </tr>
        </thead>
        <tbody>
  
          <?php
          include("conecta.php");
  
          $sql = "SELECT id,cor,modelo,valor FROM macaneta";
          $resultado = mysqli_query($conexao, $sql);
  
          while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            $id = $linha['id'];
            $cor = $linha['cor'];
            $modelo = $linha['modelo'];
            $valor = $linha['valor'];
  
            echo "<tr>";
            echo "<td>" . $id . "</td>";
            echo "<td>" . $cor . "</td>";
            echo "<td>" . $modelo . "</td>";
            echo "<td>" . $valor . "</td>";
  
            echo "<td>  <a href= 'formAtualMac.php?id=$id' class='btn-floating waves-effect waves-light brown'> <i class='material-icons'>mode_edit</i></a> </td>";
            echo "<td> <a href='#modal1' onclick='preencheId($id)' class='btn-floating waves-effect waves-light#ffb300 brown modal-trigger'> <i class='material-icons'>delete</i></a> </td>";
  
            echo "</tr>";
          }
  
          ?>
        </tbody>
      </table>
      <br>
  
  
    </main>
    <br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br>
  
  
    <!-- Modal Trigger -->
    <!-- <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a> -->
  
    <!-- Modal Structure -->
    <div id="modal1" class="modal">
      <div class="modal-content">
        <h4>Excluir maçaneta</h4>
        <p>Tem certeza que deseja excluir essa maçaneta?</p>
      </div>
      <div class="modal-footer center">
        <a href="" id="btn-sim" class="modal-close waves-effect waves-green btn-flat">Sim</a>
        <a href="#!" class="modal-close waves-effect waves-red btn-flat">Não</a>
      </div>
    </div>
    <!--Import jQuery before materialize.js-->
    <!-- <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems);
      });
  
      $(document).ready(function() {
        //$('.modal').modal();
        $('.dropdown-trigger').dropdown();
        <?php
        if (isset($_GET['result'])) {
          if ($_GET['result'] == true) {
            echo "M.toast({html: 'Maçaneta salva com sucesso!'})";
          } else {
            echo "M.toast({html: 'Erro ao salvar maçaneta!'})";
          }
        } ?>
      });
  
      function preencheId(id) {
        let btnSim = document.getElementById("btn-sim");
        btnSim.href = "deletarMac.php?id=" + id;
      }
    </script>
  
  
  
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
  </body>
  
  </html>