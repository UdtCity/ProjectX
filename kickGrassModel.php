<?php

	function retrieveItems($biz) {
		try
		{
            $conn = Connection::openConnection();
            //$database = new Connection();
			//$conn = $database->openConnection();
            $stmt = $conn->prepare("SELECT * FROM kickgrass_biz WHERE CLASS = :biz");
            $stmt->execute(array(':biz' => $biz));
            $stmt->setFetchMode(PDO::FETCH_ASSOC); 		    
		    $result = $stmt->fetchAll();		    
            $conn = Connection::closeConnection();
            return $result;
		}
        
		catch (PDOException $e)
		{
			echo "There is some problem in connection: " . $e->getMessage();
		}
	}
    
    $class = [];
    $getProducts = array('BURGER', 'PIZZA', 'SANDWICH', 'STARTER', 'CURRIES', 'BREADS', 'BRIYANI', 'RICE', 'NOODLES', 'PASTAS', 'SOUP', 'MOJITOS AND COOLERS', 'MILKSHAKES', 'DESSERTS', 'COLD BEVERAGES', 'FRESH JUICE', 'HOT BEVERAGES', 'ICE CREAM','SIDES');

    foreach($getProducts as $items) {
        $class[$items] = retrieveItems($items);
    }
	//var_dump($class['BURGER']);die;
?>