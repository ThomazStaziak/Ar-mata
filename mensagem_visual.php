<!DOCTYPEhtml>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Arômata</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<script src="js/jquery.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/skel-layers.min.js"></script>
	<script src="js/init.js"></script>
	<noscript>
		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-xlarge.css" />
	</noscript>
	</head>
	<body>
	<header id="header">
		<h1><a href="index.html"><img src="images/arômata.png" width="150" alt=""></a></h1>
		<nav id="nav" style="position: absolute; right: 12em;">
			<ul class="wrapper-menu">
				<li><a href="index_logado_admin.php">Home</a></li>
				<li><a href="generic_adm.php">Quem Somos</a></li>
				<li><a href="prod_home_adm.html">Produtos</a></li>
				<li><a href="adm.html" class="button special">Administração</a></li>
			</ul>
		</nav>
		<a href="logout.php" class="icon fa-share-square-o" style=" font-size:2em; position: absolute; right: 1em; top:0em;"><span class="label">Logout</span></a>
	</header>
<?php
$link=mysqli_connect('localhost', 'root', '', 'tcc');
?>
<div class='container3'>
<center><h2 class="white">Visualize Todas as mensagens</h2></center>
<?php
$consulta="select nome, email, mensagem from mensagem;";
$resultado=mysqli_query($link,$consulta);
if($resultado){
  while($linha = mysqli_fetch_assoc($resultado)){
echo"
  <hr>
	<a href='delete_men.php' class='button2'>Apagar!</a>
  <a href='mailto:".$linha['email']."' class='button2'>Contatar!</a>
  <p class='white'>".$linha['nome']."</p>
  <p class='white'>".$linha['mensagem']."</p>
  <hr>
";
}
}else{
echo "Nenhum resultado!";
}
?>
</div>
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
