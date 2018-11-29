<!DOCTYPE html>
<?php
    $conexao = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conexao, "tcc");
?>
	<html lang="en">
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
		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header">
				<h1><a href="index.html"> ARÔMATA </a></h1>
				<!-- <img src="images/arômata.png" width="120" alt=""> -->
				<nav id="nav" style="position: absolute; right: 22em;" >
					<ul>
						<li><a href="index.php" class="button1 special">Home</a></li>
						<li><a href="generic_nlog.php" >Quem Somos</a></li>
						<li><a href="prod_home_nlog.html" >Produtos</a>	</li>
					</ul>
				</nav>
				<button id="botao1" style="position: absolute; right: 12em; top:2em;" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
        <button id="botao1" style="position: absolute; right: 3em; top:2em;" onclick="document.getElementById('id02').style.display='block'">Cadastrar</button>
			</header>



		<div id="id01" class="modal">

		  <form class="modal-content animate" enctype="multipart/form-data"  method="post" action="autenticar.php">
		    <div class="imgcontainer">
		      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

		    </div>

		    <div class="container">
		      <label class="lab-login" for="user"><b>Username</b></label>
		      <input type="text" placeholder="Enter Username" name="user" required>

		      <label class="lab-login" for="pass"><b>Password</b></label>
		      <input type="password" placeholder="Enter Password" name="pass" required>

		      <button class="button-log" type="submit">Login</button>
		      </div>

		    <div class="container5" style="background-color:#f1f1f1">
		      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
		      <span class="psw">Forgot <a href="#">password?</a></span>
		    </div>
		  </form>
		</div>

    <div id="id02" class="modal">

		  <form class="modal-content animate" enctype="multipart/form-data"  method="post" action="cadastrar.php">
		    <div class="imgcontainer">
		      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>

		    </div>

		    <div class="container">
		      <label class="lab-login" ><b>Nome de usuário</b></label>
		      <input type="text" placeholder="Insira aqui" name="nome" required>
          <label class="lab-login" ><b>CPF</b></label>
		      <input type="number" placeholder="Insira aqui" name="cpf" required>
          <label class="lab-login" ><b>Endereço</b></label>
		      <input type="text" placeholder="Insira aqui" name="endereco" required>
          <label class="lab-login" ><b>Email</b></label>
		      <input type="text" placeholder="Insira aqui" name="email" required>
		      <label class="lab-login" ><b>Senha</b></label>
		      <input type="password" placeholder="insira aqui" name="senha" required>

		      <button type="submit" class="button-log">Cadastrar</button>
		      </div>

		    <div class="container5" style="background-color:#f1f1f1">
		      <button type="button" class="cancelbtn" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
		    </div>
		  </form>
		</div>

    <script>
		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		}
		</script>

    <script>
		// Get the modal
		var modal1 = document.getElementById('id02');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		    if (event.target == modal1) {
		        modal.style.display = "none";
		    }
		}
		</script>

		<!-- Banner -->
			<section id="banner">
				<h2>A Melhor Casa De Aromas</h2>
				<p>Descubra aromas inovadores!</p>
				<!-- <ul class="actions">
					<li>
						<a href="#" class="button big">Lorem ipsum dolor</a>
					</li>
				</ul> -->
			</section>

			<section>
				<div id="history">
						<img id="pnglogo" src="images/arômata.png" width="250" alt="">
						<h2>Conheça a tradição!</h2>
						<p id="logotext">Desde de 2000 a Arômata já era a primeira do mercado, pelo seu ótimo atendimento e alta qualidade do produto, assim gerando clientes com fidelidade exporática todo ano a Arômata sempre busca a melhoria e inovação para nossos clientes e funcionários que são nossos representantes; fora isso a Arômata está deixando a nomenclatura nacional para a adquirir a multinacional.</p>
				</div>
			</section>
			<!-- Sale -->
			<section id="one" class="wrapper style1 special">
				<div class="container">
					<header class="major">
						<h2>Por que usar Arômata?</h2>
						<p>Porque temos as melhores fragrâncias para sua casa e corpo</p>
					</header>
					<div class="row 150%">
						<div class="4u 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color1 fa-paper-plane"></i>
								<h3>Inovação</h3>
								<p>A Arômata busca inovações todos os dias, para você possa sentir sempre algo diferente.</p>
							</section>
						</div>
						<div class="4u 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color9 fa-unlock"></i>
								<h3>Transparência</h3>
								<p>Nós temos total transparência com nossos clientes e fornecedores, gerando melhor convivência à todos.</p>
							</section>
						</div>
						<div class="4u$ 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color6 fa-sliders"></i>
								<h3>Experiência</h3>
								<p>Com mais de dez anos no mercado, a Arômata tem total conhecimento do mercado e por isso continua no topo.</p>
							</section>
						</div>
					</div>
				</div>
			</section>



			<div id="sale" class="container">
				<div class="tag">
					<h2>Produtos em promoção</h2>
					<span>confira nossas ofertas</span>
				</div>
				<div class="boxA">
					<img src="images/difusor1.jpg" alt="" height="300" class="image-sale image-full" />
					<h3>Difusor De Ambiente </h3>
					<p>Deixe o ar de seu ambiente mais agrádavel com nosso difulsor de ambientes &shy;  .</p>
					<a href="prod_home_nlog.html" class="button-sale">Saber Mais</a>
				</div>
				<div class="boxB">
					<img src="images/sabonete.jpg" alt="" height="300" class="image-sale image-full" />
					<h3>Sabonete líquido</h3>
					<p>Deixe sua casa mais confortável com nossos aromatizantes  .</p>
					<a href="prod_home_nlog.html" class="button-sale">Saber Mais</a>
				</div>
				<div class="boxC">
					<img src="images/creme.jpg" alt="" height="300" class="image-sale image-full" />
					<h3>Creme Hidratante</h3>
					<p>Traga maciez e frescor para sua pele com nossos cremes hidratantes   	.</p>
					<a href="prod_home_nlog.html" class="button-sale">Saber Mais</a>
				</div>
			</div>

		<!-- Three -->
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
								<li>COPYYRIGHT &copy; ARÔMATA		 &shy; |</li>
								<li>SAC - 0800 344 377 984 &shy; |</li>
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
