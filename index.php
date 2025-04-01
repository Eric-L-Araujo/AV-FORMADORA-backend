<?php include 'cabecalho.php'?>

<div class="container text-center" style="font-size: 30px; index">
  <div class="row justify-content-md-center index">
    
    <div class="col col-lg-3">
      <div class="container-img">
        <img src="images/anime-girl.png" alt="">
      </div>
    </div>
    <div class="col-lg-1">
    </div>
    <div class="col-lg-3">
      Nome:
      <div class="row justify-content-md-center index">
        Eric Luix Xavier de Araujo
      </div>
      Idade:
      <div class="row justify-content-md-center index">
        22 anos
      </div>
    </div>
    <div class="col-lg-1">
    </div>
    <div class="col col-lg-3">
      Matrícula:
      <div class="row justify-content-md-center index">
        24201601
      </div>
      Curso
      <div class="row justify-content-md-center index">
        Análise e desenvolvimento de sistemas
      </div>
    </div>
    
  </div>
</div>

<?php
  if (isset($_GET['page'])) {
    $pagina = $_GET['page'];
    if ($pagina == 'ex02') {
      include(__DIR__ .  'ex02.php');
    } else {
      echo "erro, página não encontrada";
    }
  }
?>
<?php include 'rodape.php'?>
