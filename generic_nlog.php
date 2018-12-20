<!DOCTYPE html>
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
	</head>
	<body>

		<!-- Header -->
    <header id="header">
      <h1><img src="images/arômata.png" width="150" alt=""></h1>
      <!-- <img src="images/arômata.png" width="120" alt=""> -->
      <nav id="nav" style="position: absolute; right: 22em;" >
        <ul>
          <li><a href="index.php" >Home</a></li>
          <li><a href="generic_nlog.php" class="button special" >Quem Somos</a></li>
          <li><a href="prod_home_nlog.html" >Produtos</a>	</li>
        </ul>
      </nav>
      <button class="button special" style="position: absolute; right: 12em; top:2em; background-color: #ae4d92;" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
      <button class="button special" style="position: absolute; right: 3em; top:2em; background-color: #ae4d92;" onclick="document.getElementById('id02').style.display='block'">Cadastrar</button>
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

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major1">
						<h2 class="purple">Quem Somos?</h2>
						<p>Conheça mais sobre nossa equipe e nossa empresa.</p>
					</header>

					<a href="#" class="image fit"><img src="images/download.jpg" height="450" alt="" /></a>
						<h2 class="purple">Nossa história</h2>
						<p>A indústria Arômata Cosméticos e Perfumes Ltda atua no desenvolvimento e na fabricação de produtos de higiene pessoal e aromas para ambientes.
							Uma empresa nacional familiar,
							estabelecida em 2015, localizada em Jundiaí – SP.A fim de diversificar seus canais de divulgação e distribuição, a Arômata iniciou em dezembro de 2016, um ponto de venda anexo à fábrica,
							possibilitando a expansão e exploração de novos mercados.A empresa possui planta própria com XXX m2 de área construída, e todas as licenças e autorizações necessárias para o desenvolvimento
							e a fabricação dos produtos, bem como um anexo utilizado como ponto de venda.</p>
						<section id="aboutus">
							<div class="box1">
								<h2 class="purple">Missão</h2>
								<p>A partir de uma ampla gama de cosméticos e aromatizantes proprocionar ao cliente uma experiência que   supra suas   necessidades e
									satisfaça os seus desejos.</p>
								</div>
								<div class="box3">
									<h2 class="purple">Valores</h2>
									<p><b>Ética:</b> &shy; agir com transparência em todos seus relacionamentos, honrando com rigor os compromissos assumidos.<br>
									<b>Respeito:</b> &shy; respeito com o ser humano, tratando com igualdade todos os clientes.<br>
									<b>Excelência:</b> &shy; oferecer produto de qualidade, Sempre atendendo as necessidades do cliente.<br>
									<b>Comprometimento:</b> &shy; preocupar-se com os clientes, sempre com uma equipe muito bem preparada, para o melhor atendimento dos clientes.</p>
								</div>
								<div class="box2">
									<h2 class="purple">Visão</h2>
									<p>Através do investimento em técnicas de relacionamento&shy;(externo/interno) torna-se uma rede de cosméticos e aromatizantes admirada
										pela sua forma de atendimentos ao cliente.</p>
								</div>
							</div>
						</section>
						<section id="two" class="wrapper style2 special">
							<div class="container">
								<header class="major2">
									<h2 >Desenvolvedores</h2>
									<p>Conheça um pouco sobre a equipe de desenvolvedores web da Arômata.</p>
								</header>
								<section class="profiles">
									<div class="row">
										<section class="3u 6u(medium) 12u$(xsmall) profile">
											<img src="images/thomaz.jpg"  width="110" alt="" />
											<h4>Thomaz Staziak</h4>
											<p>Desenvolvedor Full Stack</p>
										</section>
										<section class="3u 6u$(medium) 12u$(xsmall) profile">
											<img src="images/julio.png" width="110" alt="" />
											<h4>Julio</h4>
											<p>Desenvolvedor Full Stack</p>
										</section>
										<section class="3u 6u(medium) 12u$(xsmall) profile">
											<img src="images/carol.jpg" width="110" alt="" />
											<h4>Carolina Molina</h4>
											<p>Desenvolvedora Full Stack </p>
										</section>
										<section class="3u$ 6u$(medium) 12u$(xsmall) profile">
											<img src="images/kaique.jpg" width="110" alt="" />
											<h4>Kaique Dias</h4>
											<p>Desenvolvedor Full Stack</p>
										</section>
									</div>
								</section>
							</div>
						</section>
						<section id="two" class="wrapper style2 special">
							<div class="container">
								<header class="major">
									<h2 >Implantação</h2>
									<p>Conheça um pouco sobre a equipe de Implantação da Arômata.</p>
								</header>
								<section class="profiles1">
									<div class="row">
										<section class="3u 6u(medium) 12u$(xsmall) profile3">
											<img src="images/andre.png"  width="110" alt="" />
											<h4>André Soares</h4>
											<p>Coordenador Protheus</p>
										</section>
										<section class="3u 6u$(medium) 12u$(xsmall) profile3">
											<img src="images/lucas.jpg" width="110" alt="" />
											<h4>Lucas Castro</h4>
											<p>Custumizador Cofigurador 1</p>
										</section>
										<section class="3u 6u(medium) 12u$(xsmall) profile3">
											<img src="images/caio.jpg" width="110" alt="" />
											<h4>Caio Russo</h4>
											<p>Desenvolvedor Configurador 2</p>
										</section>
										<section class="3u 6u(medium) 12u$(xsmall) profile2">
											<img src="images/cora.png" width="110" alt="" />
											<h4>Corallizie Tenário</h4>
											<p>Gerente de projetos </p>
										</section>
										<section class="3u 6u(medium) 12u$(xsmall) profile1">
											<img src="images/thais.jpg" width="110" alt="" />
											<h4>Thais Jennifer</h4>
											<p>Coordenadora Bemacash </p>
										</section>
									</div>
								</section>

							</div>
						</section>

						<section id="two" class="wrapper style2 special">
							<div class="container">
								<header class="major">
									<h2 >Infraestrutura e redes</h2>
									<p>Conheça um pouco sobre a equipe de Infraestrutura e redes da Arômata.</p>
								</header>
								<section class="profiles">
									<div class="row">
										<section class="3u 6u(medium) 12u$(xsmall) profile">
											<img src="images/aline.jpg"  width="110" alt="" />
											<h4>Aline</h4>
											<p>Analista de Processos</p>
										</section>
										<section class="3u 6u$(medium) 12u$(xsmall) profile">
											<img src="images/karol.jpg" width="110" alt="" />
											<h4>Maria Karoline</h4>
											<p>Analista de projetos</p>
										</section>
										<section class="3u 6u(medium) 12u$(xsmall) profile">
											<img src="images/murilo.jpg" width="110" alt="" />
											<h4> Murilo </h4>
											<p>Analista de operações </p>
										</section>
										<section class="3u$ 6u$(medium) 12u$(xsmall) profile">
											<img src="images/michel.png" width="110" alt="" />
											<h4>Danilo </h4>
											<p>Analista de suporte</p>
										</section>
										<section class="3u 6u(medium) 12u$(xsmall) profile4 ">
											<img src="images/danilo.png" width="110" alt="" />
											<h4>Michel </h4>
											<p>Analista de suporte </p>
										</section>
										<section class="3u 6u(medium) 12u$(xsmall) profile4">
											<img src="images/tais.jpg" width="110" alt="" />
											<h4>Tais Rizzo </h4>
											<p>Líder de operações</p>
										</section>
										<section class="3u 6u(medium) 12u$(xsmall) profile4">
											<img src="images/jeferson.jpg" width="110" alt="" />
											<h4>Jeferson Braga</h4>
											<p>Analista de redes </p>
										</section>
									</div>
								</section>
							</div>
						</section>

			</section>
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
