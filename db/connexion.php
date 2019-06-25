<?php
	$servername='localhost';
    $username='root';
    $password='';
    
    
    try {
        $db = new PDO("mysql:host=$servername;dbname=clinique_db", $username, 
        $password);
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                  
                              
    } 
	catch (PDOException $e) {
        echo "Erreur !: " . $e->getMessage();
       
    }
    function get_total_query($db, $table_name){
        $query = "SELECT * FROM $table_name";
        $statement = $connect->prepare($query);
        $statement->execute();
        return $statement->rowCount();        
    }
?>