<?php
	$link=mysqli_connect('localhost','root','','tcc');
?>
<?php
	$titulo=$_POST['titulo'];
	$descricao=$_POST['descricao'];
	$preco=$_POST['preco'];
	$tipo = $_FILES['file']['type'];
	$nome = $_FILES['file']['name'];
	$tamanho = $_FILES['file']['size'];
		move_uploaded_file($_FILES['file']['tmp_name'],"C:\\xampp\\htdocs\\localhost\\Arômata\\images\\$nome");
	$inserir = "insert into produtos_masc (titulo,descricao,preco,nome_imagem, tamanho_imagem, tipo_imagem) VALUES ('$titulo', '$descricao', '$preco','$nome','$tamanho','$tipo')";
		mysqli_query($link,$inserir);
		echo "<script type='text/javascript'>
			window.location='inserir.php'
		</script>";
?>
