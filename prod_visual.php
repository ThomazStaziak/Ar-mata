<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
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
    <br><br><br>
<?php
$link=mysqli_connect('localhost', 'root', '', 'tcc');
session_start();
$usuario=$_SESSION["usuario"];
?>
<div style=''>

</div>
<?php
$total="select preco * quantidade as total, nome, preco, quantidade from pedidos_rapidos where nome_cliente='$usuario'";
$total_conta=mysqli_query($link, $total);
echo "<center><table>";
echo "<tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Total</th>
      </tr>";
if($total_conta){
  while($linha = mysqli_fetch_assoc($total_conta)){
      echo "
          <tr>
            <td>".$linha['nome']."</td>
            <td>R$".$linha['preco'].",00</td>
            <td>".$linha['quantidade']."</td>";
            echo "<td>R$$linha[total],00</td>";
            echo "</tr>";
}
}else{
echo "Nenhum resultado!";
}
echo "</table></center>";

$total_final="select Sum(preco * quantidade)  as subtotal from pedidos_rapidos";
$total_conta_final=mysqli_query($link, $total_final);
if ($total_conta_final) {
  while ($linha2=mysqli_fetch_assoc($total_conta_final)) {
    echo "<center><h2>Subtotal:$linha2[subtotal]</h2></center>";
  }
}
?>
<center><a style="background:#4d9dae; color:#fff; text-decoration:none; border:0; border-radius:5px; padding:0.7em;" href="fim.php">Finalizar pedido!</a></center>

<br><br><br>
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
