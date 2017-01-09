@extends('layouts.app')

@section('content')
<script type="text/javascript">
	

	window.location.href = "{{ url('/home') }}";
</script>

<?php 



$id = $_GET['deletar'];

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

    if($conn->query("DELETE FROM canvas WHERE id = '$id';") === TRUE){
       echo '

       <script type="text/javascript">
	

			window.location.href = "/home";
		</script>



       ';
    }
    else{
        echo '<div>Erro</div>';
    }
    
    $conn->close();

    ?>


    @endsection
