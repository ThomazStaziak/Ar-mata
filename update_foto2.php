<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<form action="update_foto.php" name="form1" method="POST" enctype="multipart/form-data"/>
		<input type="file"  id="selecao-arquivo" name="file" onchange="updatepicture(this);" />
		<input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
		<button type="submit" class="button2" name="publicar" onclick="verificar_foto()">Publicar</button>
		<button type="reset" class="button2" name="cancelar">Cancelar</button>
	</form>
	</body>
</html>
