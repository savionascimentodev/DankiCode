<?php
// ! Sessão é quando armazenamos uma váriavel, que mesmo fechando a aba, essa váriavel ainda vai estar guardada, só é destruida quando o usuário fecha o navegador;
// ! Cookies são várivaeis que definimos um tempo para expirar;

// Primeira coisa ao trabalhar com sessões é usar o session_start();
session_start();

//Validando se existe uma sessão com o isset;
if (isset($_SESSION['nome'])) {
  echo $_SESSION['nome'] = 'Savio';
} else {
  echo 'Nenhuma sessão está ativa no momento';
}

// Para limpar uma seção da memória usamos o session_destroy();
session_destroy();

# -------------------------------------------------- #

// Para criar um cookie, passamos a função setcookie que recebe 
setcookie('nome', 'Savio', time() + 10, '/');

// Agora temos que acessar o cookie criado;
echo $_COOKIE['nome'];
