<?php include 'cabecalho.php'?>

<h1>Exercício 1</h1>

<form action="processa.php" method="post" name="form"  style="margin: 20px;">
<h1 style="font-size: 35px;">Formulário de cadastro</h1>
  <div class="row">
    <div class="col-3">
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Joana XXXXX">
        <label for="floatingInput">Nome</label>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-3">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" placeholder="Password">
          <label for="floatingInput">Sobrenome</label>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-3">
        <div class="form-floating mb-3">
          <input type="number" class="form-control" id="floatingNumber" placeholder="Insira um número">
          <label for="floatingNumber">Repetições</label>
        </div>
      </div>
  </div>
  <div class="row" >
    <div class="col-1" >
      <button type="submit" value="Enviar" style="height: 40px; width: 90px; border-radius:8px;">Enviar</button>
    </div>
  </div>
</div>
</form>
<?php include 'rodape.php'?>