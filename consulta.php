<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Lojão dos Móveis</title>
        <meta charset="UTF-8">
        <meta name="description" content="Moveis ,roupas e eletrodomesticos variados">
        <meta name="keywords" content="Cama, mesa, banho, roupas ">
        <meta name="viewport" content="width-device-width, initial-scale = 1, shrink-to-fit=no">

        <link rel="stylesheet" type="text/css" href="estilos/estilo.css">
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">

    </head>
<body class="xyz">
	<div class="container-fluid">
		<div class="row">
<?php
    //Fazendo a conexão com a base de dados
    $host="localhost";
    $bd="info2B";
    $user="root";
    $senha="Labinfo1";

    //Criando uma variavel de conexão agr
    $con = mysqli_connect($host, $user, $senha, $bd) 
    or die("Não foi possivel se conectar ao servidor!");

    //Capturando o tarte do nome do produto a ser pesquisado no BD
    $pesq=$_POST['txtpesquisa'];
	
    //Criando a query de pesquisa
    $query="SELECT * FROM produtos WHERE nome LIKE '%$pesq%'";
   
    //Finalmente efetuando a consulta no BD que esta apontado pela variavle $con
    $dados=mysqli_query($con, $query) or die ("Erro ao consultar na tabela produtos");

    //Transforma os dados em um array
    $linha = mysqli_fetch_assoc($dados);

    //Calcula quantos dados retornaram
    $total = mysqli_num_rows($dados);

    //Mostrando os dados que foram retornados e que estão na Mem. Ram
    if($total > 0) {
        //inicia o loop que foram retornados
        do {
            echo "
                <div class='col'>
                <div class='card' style='width: 18rem'>
                    <img class='card-img-top' src='images/cards/" . $linha['foto'] . "'>
                    <div class='card-body'>
                        <h5 class='card-title'>". $linha['nome'] . "</h5>
                        <p class='card-text'>". $linha['venda'] . "</p>
                        <a href='arpuro.php?codprod=" . $linha['codprod'] . "&venda=" .  $linha['venda'] . " ' class='btn btn-outline-dark'>Comprar</a>
                        <a href='#' class='btn btn-outline-primary'>ver mais</a>
                    </div>
                </div>
        ";
        echo"</div>";
        
        }while($linha = mysqli_fetch_assoc($dados));
    }
    else{
        echo "Não foi encontrado nenhum produto com o critério de pesquisa informado";
    }

    	//enviando o nome da imagem o que facilita o codigo
?>
	</div>
	<script src="src/bootstrap/js/jquery-3.2.1.min.js"></script>
	<script src="src/bootstrap/js/popper.min.js"></script>
	<script src="src/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>