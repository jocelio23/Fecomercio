<?php
$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('fecomercio');
  if (isset($entrar)) {

    $verifica = mysql_query("SELECT * FROM usuarios WHERE usuario =
    '$usuario' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        setcookie("usuario",$usuario);
        header("Location:index.html");
      }
  }
?>