<?php
    $host="localhost";
    $bd="info2B";
    $user="root";
    $senha="Labinfo1";

    $con = mysqli_connect($host, $user, $senha, $bd) 
    or die("Não foi possivel conectar-se ao servidor!");

    $codbarras=$_POST["txtcod"];
    $nome=$_POST["txtnome"];
    $custo=$_POST["txtcusto"];
    $venda=$_POST["txtvenda"];
    $estoque=$_POST["txtestoque"];
    $foto=$_POST["txtfoto"];

    $query="INSERT INTO produtos (codbarras, nome, custo, venda, estoque, foto) VALUES ('$codbarras', '$nome', '$custo', '$venda','$estoque','$foto')";
    $retorno=mysqli_query($con, $query) or die ("Erro ao cadastrar o produto");

    echo("<h2>Produto cadastrado</h2>");
?>