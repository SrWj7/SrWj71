<?php
    $host="localhost";
    $bd="info2B";
    $user="root";
    $senha="Labinfo1";

    $con = mysqli_connect($host, $user, $senha, $bd) 
    or die("Não foi possivel conectar-se ao servidor!");

    $nome=$_POST["txtnome"];
    $sobrenome=$_POST["txtsobrenome"];
    $rua=$_POST["txtrua"];
    $bairro=$_POST["txtbairro"];
    $cep=$_POST["txtcep"];
    $cidade=$_POST["txtcity"];
    $uf=$_POST["txtuf"];
    $celular=$_POST["txtcel"];
    $email=$_POST["txtemail"];
    $senha=$_POST["txtsenha"];


    $query="INSERT INTO clientes (nome, sobrenome, rua, bairro, cep, cidade, uf, celular, email, senha) VALUES ('$nome', '$sobrenome', '$rua', '$bairro','$cep', '$cidade', '$uf', '$celular', '$email', '$senha')";
    $retorno=mysqli_query($con, $query) or die ("Erro ao cadastrar o Cliente");

    echo("<h2>Cliente cadastrado</h2>");
?>