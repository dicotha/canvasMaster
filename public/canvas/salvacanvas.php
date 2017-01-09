<?php 


$titulo = $_POST['titulo'];
$parceiro = $_POST['parceiro'];
$atividade = $_POST['atividade'];
$recursos = $_POST['recursos'];
$proposta = $_POST['proposta'];
$relacao = $_POST['relacao'];
$canais = $_POST['canais'];
$segmentos = $_POST['segmentos'];
$custos = $_POST['custos'];
$fontes = $_POST['fontes'];
$userid = $_POST['userid'];
$datas = $_POST['datas'];




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "canvasmaster";


	


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if($conn->query("INSERT INTO canvas(userId, titulo, parceiros, atividades, recursos, proposta,relacao,canais,segmentos,custos,fontes,data) VALUES ('$userid','$titulo','$parceiro','$atividade','$recursos','$proposta','$relacao','$canais','$segmentos','$custos','$fontes', '$datas');") === TRUE){
        echo '<div style="
                font-size: 24px;
                font-weight: bold;
                color: green;
            ">Salvo! </div>';
            
    }
    else{
        echo '<div>Erro</div>';
    }
    
    $conn->close();