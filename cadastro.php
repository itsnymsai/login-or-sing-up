<?php 
header('Content-Type: text/html; charset=UTF-8');
 include_once ("conexao.php");
 
$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('site');
$query_select = "SELECT login FROM cadastro WHERE login = '$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['login'];
 
  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    cadastros.php';</script>";
 
    }else{
      if($logarray == $login){
 
        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');window.location.href='
        cadastros.php';</script>";
        die();
 
      }else{
        $query = "INSERT INTO cadastro (login,senha) VALUES ('$login','$senha')";
        $insert = mysql_query($query,$connect);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='login.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='cadastros.php'</script>";
        }
      }
    }
?>