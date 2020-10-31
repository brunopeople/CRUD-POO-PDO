
<?php
/**
 * Autor: Bruno Pessoa Nunes De Melo
 * Versão: 1.0.0
 * Linguagem: PHP na versão 7.5.9
 * Arquivo que tem como guardar os métodos e funções para que o sistema de cadastros,
 * atualização, remoção e adição de usuários
 */

session_start();
/**
 * A função tem como função para ativar o buffer de saída. O buffer por definição
 * é uma região da própria memória física para armazenar os dados por um período de tempo
 * enquanto os dados estão sendo transferidos para um dispositivo de entrada. Enquanto o buffer de 
 * saída estiver ativo, não é enviada a saída do script ( outros que não sejam cabeçalhos), ao invés
 * a saída é guardada em um buffer interno. 
 */

 ob_start();
 ini_set('display_errors', 1);
 ini_set('display_startup_erros', 1);
 error_reporting(E_ALL);
 spl_autoload_register(function($class) {
     if(file_exists('classes/'.ucfirst($class). '.php')){
         require_once 'classes/' .ucfirst($class). 'php';
     }
 });

 $logar = new Login();
 include "view/layout/head.php";
 if(isset($_SESSION['você está logado!!'])){
     $usuario
 }

?>