<?php
$titulo = "Logout";
session_start();
include '../conexao/conexao.php';
if(isset($_SESSION['logado']) && $_SESSION["logado"]){
  session_destroy();
  header ('location:../index.php');
}
else{
  header ('location:../index.php');
}
