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
		<nav id="nav" style="position: absolute; right:12em;">
			<ul>
				<li><a href="index_logado_admin.php">Home</a></li>
				<li><a href="generic_adm.php">Quem Somos</a></li>
				<li><a href="prod_home_adm.html" >Produtos</a></li>
				<li><a href="adm.html" class="button special">Administração</a></li>
			</ul>
		</nav>
		<a href="logout.php" class="icon fa-share-square-o" style=" font-size:2em; position: absolute; right: 1em; top:0em;"><span class="label">Logout</span></a>
	</header>
	<center><h2 class="purple">Cadastre os produtos para o ambiente</h2></center>
	<div class="container1">
		<h3 class="white">Cadastre os produtos para o ambiente</h3>
		<form action="prodsfem.php" name="form1" method="POST" enctype="multipart/form-data"/>
			<br><input type="text" name="titulo" placeholder="Título" /><br>
			<br><input type="text" placeholder="Digite a descrição do produto que você irá publicar." name="descricao" size="40" maxlength="40"></textarea><br>
			<br><input type="text" name="preco" placeholder="Preço"><br>
			<label for='selecao-arquivo'>Selecione sua imagem para Upload</label>
			<input type="file"  id="selecao-arquivo" name="file" onchange="updatepicture(this);" />
			<input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
			<img style="min-height:120;min-width:200;max-height:120px;" id="image"/><br></br>
			<iframe style="display:none" name="iframe"/></iframe>
			<button type="submit" class="button2" name="publicar" onclick="verificar_foto()">Publicar</button>
			<button type="reset" class="button2" name="cancelar">Cancelar</button>
		</form>
	</div>
	<?php
		$link=mysqli_connect('localhost', 'root', '', 'tcc');
	?>
	<div class='container2-masc'>
		<h3 class="white">Exclua os produtos para o ambiente</h3>
	<?php
		session_start();

		$consulta="select * from produtos_fem";
		$resultado=mysqli_query($link,$consulta);
		if($resultado){
			while($linha = mysqli_fetch_assoc($resultado)){
		echo"
			<form method='post' action='delete_fem.php?publicar=".$linha['id']."'>
			<button for='delete' value='".$_SESSION['id_prod']=$linha['id']."' type='submit' class='button2' name='publicar1'>Apagar</button>
			<p id='delete' class='titulo'><h2 class='white'>" . $linha["titulo"] ."</h2></p>
			</form>
		";
		}
		}else{
		echo "Nenhum resultado!";
		}
	?>
	</div>
	<section id="three" class="wrapper style3 special">
		<div class="container">
			<header class="major" style="position:relative; left:25em; display:inline-block; height:10px;">
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
