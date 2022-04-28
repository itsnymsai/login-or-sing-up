	
<?php 
header('Content-Type: text/html; charset=UTF-8');
include_once ("conexao.php");
session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

$conn = mysql_connect("localhost", "root", "") or die
 ("Sem conexão com o servidor");
$select = mysql_select_db("site") or die("Sem acesso ao DB, Entre em 
contato com o Administrador");
 

$result = mysql_query("SELECT * FROM `login` 
WHERE `login` = '$login' AND `senha`= '$senha'");

if(mysql_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
echo"<script language='javascript' type='text/javascript'>
          alert('Login efetuado com sucesso!');window.location.
          href='index.php'</script>";
          exit();
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
 echo"<script language='javascript' type='text/javascript'>
          alert('Esse login não existe!');window.location.
          href='login.php'</script>";
   exit();
  }
?>