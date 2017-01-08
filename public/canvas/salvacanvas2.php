<?php  
                
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

                    if($conn->query("SELECT * FROM canvas WHERE userId = 1") === TRUE){
                         echo 'foi';
                    }
                    else{
                        echo '<div>Erro</div>';
                    }
                    
                    $conn->close(); 
                    
                   


                
             
               ?>