<?php

    /*require_once '../appConnection.php';*/

    class KickGrass {

       static public function fetchProducts($biz) {

           try {
                $stat = 1;
                $conn = Connection::openConnection();
                $stmt = $conn->prepare("SELECT * FROM kickgrass_biz WHERE CLASS = :biz AND availability = :stat");
                $stmt->execute(array(':biz' => $biz,':stat' => $stat));
                $stmt->setFetchMode(PDO::FETCH_ASSOC); 		    
                $result = $stmt->fetchAll();		    
                $conn = Connection::closeConnection();
                return $result;
            }

            catch (PDOException $e)	{
                echo "There is some problem in connection: " . $e->getMessage();
            }

        }
        
        static public function hotelAvailability() {

            try {
                $stat = 1;
                $conn = Connection::openConnection();
                $stmt = $conn->prepare("SELECT * FROM kickgrass_biz WHERE AVAILABILITY = :stat");
                $stmt->execute(array(':stat' => $stat));
                $stmt->setFetchMode(PDO::FETCH_ASSOC); 		    
                $result = $stmt->fetchAll();		    
                $conn = Connection::closeConnection();
                return $result;
            }

            catch (PDOException $e)	{
                echo "There is some problem in connection: " . $e->getMessage();
            }

        }

    }