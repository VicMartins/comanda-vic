<?php  
  include('conexao.php')
?>
<!DOCTYPE html>
<html lang="port">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MC Sujo's</title>

    <script src="https://kit.fontawesome.com/bc58fc4108.js" crossorigin="anonymous"></script>
    <script src="components/loader.js"></script>
    <script src="components/jquery-3.4.1.min.js"></script>
    <script src="components/acao.js"></script>
  
    <link rel="stylesheet" href="components/loader.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<style>
  .paginaInteira{
    display: grid;
    grid-template-columns: 2fr 4fr 2fr;
    grid-template-rows: 50vh 50vh;
}
.menu{
    grid-column: 2/3;
    grid-row: 1/3;
}
.titulo{
  font-size: 4vh;
  color:black ;
}
.browser-default{
  margin-top: 5vh;
}
.entrada{
  width: 10px;
}
.menuzinho{
    height: 70vh;
    width: 60vh;
    margin-top: 4vh;
    margin-left: 10vh;
}
.cardapio{
    height: 40vh;
    width: 50vh;
    margin-left: 5vh;
    margin-right: 5vh;
    margin-top: 5vh;
}
.bebida{
    grid-column: 1/2;
    grid-row: 2/3;
}
.porcao{
    grid-column: 1/2;
    grid-row: 2/3;
}
.pP{
    grid-column: 3/4;
    grid-row: 2/3;
}
.sobremesa{
    grid-column: 3/4;
    grid-row: 1/2;
}
.cartao{
  overflow-x: hidden;
  overflow-y: scroll;
}

th{
  color:#ff6f00;
}
.titulo-card{
  color:#ff6f00;
  
}
.btn{
  background-color: #ff6f00;
}
.btn:hover{
  background-color: #ffa000;
}
</style>
<body>
  <div class="paginaInteira">
    <div class="bebidas">
        <div class="card black cartao cardapio">
            <div class="card-content white-text">
              <span class="card-title titulo-card">Bebidas</span>
              <table>
                <thead>
                  <tr>
                      <th>Nome</th>
                      <th>Preço</th>
                      <hr>
                  </tr>
                </thead>
        
                <tbody>
                  <tr>
                    <td>Suco</td>
                    <td>$0.87</td>
                  </tr>
                  <tr>
                    <td>Refrigerante</td>
                    <td>$3.76</td>
                  </tr>
                  <tr>
                    <td>Cerveja</td>
                    <td>$7.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
    </div>
    <div class="porcao">
        <div class="card black cartao cardapio">
            <div class="card-content white-text">
              <span class="card-title titulo-card">Porções</span>
              <table>
                <thead>
                  <tr>
                      <th>Nome</th>
                      <th>Preço</th>
                      <hr>
                  </tr>
                </thead>
        
                <tbody>
                <?php
              $prodselect = $mysql->query("SELECT * FROM tb_produtos WHERE cd_categoria_produto");
              while($cat = mysqli_fetch_array($prodselect))
              {
              ?>
              <tr>
                <td><?php echo $cat['nm_produto'];?></td>
                <td><?php echo $cat['vl_produto'];?></td>
              </tr>
              <?php
              };
              ?>
                </tbody>
              </table>
            </div>
          </div>
    </div>
    <div class="menu"> 
      <center>
      <label class="titulo"> MC SUJO'S</label>
      </center>
    <select class="browser-default">
    <option value="" disabled selected>Escolha uma Mesa</option>
    <option value="1">Mesa 1</option>
    <option value="2">Mesa 2</option>
    <option value="3">Mesa 3</option>
    <option value="4">Mesa 4</option>
    <option value="5">Mesa 5</option>
    <option value="6">Mesa 6</option>
    <option value="7">Mesa 7</option>
    <option value="8">Mesa 8</option>
    <option value="9">Mesa 9</option>
    <option value="10">Mesa 10</option>
  </select>
        <div class="card cartao black menuzinho">
            <div class="card-content white-text">
              <span class="card-title titulo-card">Pedidos</span>
              <table>
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                      <hr>
                  </tr>
                </thead>       
                <tbody>
                  <tr>
                    <td>Alvin</td>
                    <td>$0.87</td>
                  </tr>
                  <tr>
                    <td>Alan</td>
                    <td>$3.76</td>
                  </tr>
                  <tr>
                    <td>Jonathan</td>
                    <td>$7.00</td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
            <div class="card-action">
              <a>Preço total:</a>
            </div>
          </div>
          <center>
          <button class="btn botao" type="submit" name="action">Enviar Pedido
              <i class="fas fa-chevron-right"></i>
          <a href="pagadmin.php"><button class="btn pagadmin"> Ir para Página do Admin</button></a>
            </button>
            </center>
    </div>
    <div class="pP">
        <div class="card black cartao cardapio">
            <div class="card-content white-text">
              <span class="card-title titulo-card">Prato Principal</span>
              <table>
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                      <hr>
                  </tr>
                </thead>       
                <tbody>
                  <tr>
                    <td>Alvin</td>
                    <td>$0.87</td>
                  </tr>
                  <tr>
                    <td>Alan</td>
                    <td>$3.76</td>
                  </tr>
                  <tr>
                    <td>Jonathan</td>
                    <td>$7.00</td>
                  </tr>
                  <tr>
                    <td>Jonathan</td>
                    <td>$7.00</td>
                  </tr>
                  <tr>
                    <td>Jonathan</td>
                    <td>$7.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
    </div>
    <div class="sobremesa">
        <div class="card cartao black cardapio">
            <div class="card-content white-text">
              <span class="card-title titulo-card">Sobremesa</span>
              <table>
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                      <hr>
                  </tr>
                </thead>
        
                <tbody>
                  <tr>
                    <td>Alvin</td>
                    <td>$0.87</td>
                  </tr>
                  <tr>
                    <td>Alan</td>
                    <td>$3.76</td>
                  </tr>
                  <tr>
                    <td>Jonathan</td>
                    <td>$7.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
    </div>
  </div>
</body>
</html>