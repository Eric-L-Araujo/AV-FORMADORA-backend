<?php include 'cabecalho.php'?>

<form action="processa.php" method="post" name="form"  style="margin: 20px;" target="resultadoFrame">
 <!-- Inicio -->
  <div class="row">
  <div class="row">
      <iframe frameborder="1" id="resultadoFrame" name="resultadoFrame" class="result" style=" width: 450px; height:80px; font-size:40px;">
      </iframe>
  </div>
  <h1>Exercício 2</h1>
    <div class="col-3">
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Joana XXXXX" name="login" minlength = "6" maxlength ="10" required>
        <label for="floatingInput">Login</label>
      </div>
    </div>
  </div>
  <!-- fim -->
   <!-- inicio -->
  <div class="row">
    <div class="col-3">
        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="senha" minlength = "6" maxlength ="10" required>
          <label for="floatingPassword">Senha </label>
        </div>
    </div>
  </div>
  <!-- fim -->
  <div class="row" >
    <div class="col-1" >
      <button type="submit" value="Enviar" style="height: 40px; width: 90px; border-radius:8px;" onclick="mostrarResultado()">Enviar</button>
    </div>
    <div class="col-1 ">
      <a href="index.php"><button type="button" value="voltar" style="height: 40px; width: 90px; border-radius:8px;" >Voltar</button></a>
    </div>
  </div>
</div>
</form>

<?php include 'rodape.php'?>