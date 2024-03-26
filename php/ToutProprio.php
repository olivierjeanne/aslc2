<?php

header('Content-type: text/plain; charset=utf-8');

	try {
        // connection to the database.
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES utf8';
        $bdd = new PDO('mysql:host=91.216.107.219;dbname=elsus1134362', 'elsus1134362', 'pas9hpy71f', $pdo_options); 
 		
        // Execute SQL request on the database.
        
        $sql = "SELECT * FROM `gasl_prop`";
        
        $response = $bdd->query($sql);
        $output = $response->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

	//echo'<pre>';
	//var_dump($output);
	//echo'</pre>';

    echo json_encode($output);
    
    exit(0);

	
?>