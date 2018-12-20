<?php
$link=mysqli_connect('localhost', 'root', '', 'aromata');
?>
<?php
$consulta="select * from produtos order by id desc";
$resultado=mysqli_query($link,$consulta);
if($resultado){
  while($linha = mysqli_fetch_assoc($resultado)){
echo "<fieldset>";
echo "<span class='titulo'><h2>" . $linha["titulo"] ."</h2></span>";
echo "<br>";
echo "<img class='produto' src='images/".$linha['Nome_imagem']."' width='180' height='180'/>";
echo "<div class='desc'><p>" . $linha["descricao"]. "<br><br></p>". "<span>Preço: </span>" . $linha["preco"]."<br><br>". "<br><br></div>";
echo "</fieldset>";
echo "<br>";

}
}else{
echo "Nenhum resultado!";
}
?>

<!-- <section class='4u'> <a href='#' class='image-prod featured-prod'><img src='images/pic02.jpg' alt=''></a>
  <div class='box-prod'>
    <p>Descrição2.</p>
    <a href='#' class='button-prod'>Comprar </a> </div>
</section>
<section class='4u'> <a href='#' class='image-prod featured-prod'><img src='images/pic03.jpg' alt=''></a>
  <div class='box-prod'>
    <p>Descrição3.</p>
    <a href='#' class='button-prod'> Comprar</a> </div>
</section>
<section class='4u'> <a href='#' class='image-prod featured-prod'><img src='images/pic02.jpg' alt=''></a>
  <div class='box-prod'>
    <p>Descrição4.</p>
    <a href='#' class='button-prod'> Comprar</a> </div>
</section>
<section class='4u'> <a href='#' class='image-prod featured-prod'><img src='images/pic02.jpg' alt=''></a>
  <div class='box-prod'>
    <p>Descrição5.</p>
    <a href='#' class='button-prod'>Comprar</a> </div>
</section>
<section class='4u'> <a href='#' class='image-prod featured-prod'><img src='images/pic03.jpg' alt=''></a>
  <div class='box-prod'>
    <p>Descrição6.</p>
    <a href='#' class='button-prod'>Comprar</a> </div>
</section> -->
