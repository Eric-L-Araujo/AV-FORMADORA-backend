<?php
// EXERCÍCIO 01
// Função que exibe na tela o nome e o sobrenome do usuário, na quantidade de vezes que o usuário digitar.
function repeatName() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST["nome"]);
        $sobrenome = htmlspecialchars($_POST["sobrenome"]);
        $repeticao = htmlspecialchars($_POST["repeticao"]);
    
        if (!empty($nome) && !empty($sobrenome) && !empty($repeticao) && $repeticao >=0) {
        
            for ($i = 1; $i <=$repeticao; $i++) {

                if ($i % 2 == 1) {
                    echo $i." - ".$nome."<br>";

                } else {
                    echo $i." - ".$sobrenome."<br>";
                }   
            }

        } else {
            echo "Por favor, preencha todos os campos corretamente";
            
        }
    
    }

    
}

repeatName();


// // EXERCÍCIO 02
// // Função para autenticar meu login e seha do AVA.

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // $matricula = 24201601;
//     // $pass = 12345678;
//     $login = ($_POST['login']);
//     $senha = ($_POST['senha']);
    
//     if (!empty($login) && !empty($senha)) {
//         echo "<p>Usuário autenticado com sucesso!</p>";
//     } else {
//         echo "[ERRO] Os dados inseridos não conferem";
//     }
//     // foreach ($_POST as key -> $value) {
//     //     echo "$key: $value <br>";
//     // }
// } 


?>
