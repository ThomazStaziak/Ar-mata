<?php
	$link=mysqli_connect('localhost','root','','tcc');
	session_start();
	$usuario = $_SESSION["usuario"];
?>
<?php
	$tipo = $_FILES['file']['type'];
	$nome = $_FILES['file']['name'];
	$tamanho = $_FILES['file']['size'];
		move_uploaded_file($_FILES['file']['tmp_name'],"C:\\xampp\\htdocs\\localhost\\templated-transit\\images\\$nome");
	$inserir = "update clientes set nome_foto='$nome' where nome ='$usuario'";
		mysqli_query($link,$inserir);
		echo "Produto inserido no carrinho! Click <a href='usuario.php'> Aqui</a>";
?>
