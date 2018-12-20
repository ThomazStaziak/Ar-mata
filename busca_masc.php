<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Arômata</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
      <link rel="stylesheet" href="css/skel.css" />
      <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>
    <?php
    $link=mysqli_connect('localhost', 'root', '', 'tcc');
    ?>
  </head>
  <body>

    <header id="header">
      <h1><a href="index.html"><img src="images/arômata.png" width="150" alt=""></a></h1>
      <nav id="nav">
  			<ul class="wrapper-menu">
  				<li><a href="index_logado_admin.php">Home</a></li>
  				<li><a href="generic_adm.php">Quem Somos</a></li>
  				<li><a href="prod_home_adm.html" class="button special">Produtos</a></li>
  				<li><a href="adm.html">Administração</a></li>
  			</ul>
  		</nav>
      <div id="pesquisa">
  			<!-- <img src="images/search.png" id="fotoimg" alt="Faça sua busca"/> -->
        <form class="" action="busca_masc.php" method="post">
          <input type="text" id="caixabusca" name='palavra' placeholder="Pesquise aqui..."/>
    			<button type="submit" id="btnBusca"> <img src="images/search.png" alt=""> </button>
        </form>
      </div>
      <a href="usuario.php"class="icon fa-user" style=" font-size: 2.2em;position: absolute; right: 2.3em; top: -0.1em;   "><span class="label">User</span></a>
  		<a href="logout.php" class="icon fa-share-square-o" style=" font-size:2em; position: absolute; right: 1em; top:0em;"><span class="label">Logout</span></a>
    </header>


    <?php
    $link=mysqli_connect('localhost', 'root', '', 'tcc');
    ?>
    <?php
    $busca=$_POST['palavra'];
    echo"<div id='extra'>";
				echo "<div class='container'>";
          echo"<header class='major'>";
					echo "<h2 class='blue'>Produtos para o corpo</h2>";
				  echo "<p>Confira os melhores produtos para o corpo da Arômata.</p>";
					echo "</header>";
    echo"<div class='row no-collapse-1'>";
    $consulta="SELECT * FROM produtos_masc where titulo LIKE '%$busca%'";
    $resultado=mysqli_query($link,$consulta);
    if($resultado){
      while($linha = mysqli_fetch_assoc($resultado)){
       echo"<section class='4u'> <a href='#' class='image-prod featured-prod'><center><img src='images/".$linha['Nome_imagem']."' width='170' alt=''></center></a>";
        echo "<div class='box-prod'>";
        echo"<span class='titulo'><h2> ". $linha["titulo"]." </h2></span>";
          echo"<p> ".$linha['descricao']."</p>";
          echo"<p><b>Preço</b> R$ ".$linha["preco"]."</p>";
          echo "<form class='' enctype='multipart/form-data' action='comprar.php' method='post'>";
          echo "<p style='margin-left:-2em;'><b>Quantidade</b></p>";
          echo "<select class='quantidade'  name='quantidade'>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
          </select>";
          echo "<input type='hidden' name='id' value='".$linha['id']."'>";
          echo"<input type='submit' name='button' value='Comprar' class='button-prod' style='background-color:#4d9dae;  '></input> </div>";
          echo "</form>";
          echo"</section>";
         }
      echo"</div>";
      echo"</div>";
      echo"</div>";
    echo"</div>";
    }else{
    echo "Nenhum resultado!";
    }

    ?>



  <section id="three" class="wrapper style3 special">
    <div class="container">
      <header class="major">
        <h2>Dúvidas ou Sugestões?</h2>
        <p>Deixe sua mensagem!</p>
      </header>
    </div>
    <div class="container 50%">
      <form action="mensagem.php" method="post">
        <div class="row uniform">
          <div class="6u 12u$(small)">
            <input name="name" id="name" value="" placeholder="Nome" type="text">
          </div>
          <div class="6u$ 12u$(small)">
            <input name="email" id="email" value="" placeholder="Email" type="email">
          </div>
          <div class="12u$">
            <textarea name="message" id="message" placeholder="Mensagem" rows="6"></textarea>
          </div>
          <div class="12u$">
            <ul class="actions">
              <li><input value="Enviar Mensagem" class="special big" type="submit"></li>
            </ul>
          </div>
        </div>
      </form>
    </div>
  </section>
<!-- Footer -->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="8u 12u$(medium)">
        <ul class="copyright">
          <li>COPYYRIGHT &copy; ARÔMATA</li>
          <li>SAC - 0800 344 377 984</a></li>
          <li>AROMA HOUSE</li>
        </ul>
      </div>
      <div class="4u$ 12u$(medium)">
        <ul class="icons">
          <li>
            <a class="icon rounded fa-facebook"><span class="label">Facebook</span></a>
          </li>
          <li>
            <a class="icon rounded fa-twitter"><span class="label">Twitter</span></a>
          </li>
          <li>
            <a class="icon rounded fa-google-plus"><span class="label">Google+</span></a>
          </li>
          <li>
            <a class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
  </body>
</html>
