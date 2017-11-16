<?php

    include_once '../appConnection.php';

    class KickGrassAdmin {
        
        static public function fetchList($str) {
            
            try {
                $conn = Connection::openConnection();
                $stmt = $conn->prepare("SELECT * FROM kickgrass_biz WHERE product_name LIKE '%{$str}%'") ;
                $row = $stmt->execute();                
                $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                $result = $stmt->fetchAll();		    
                $array = array();                
                foreach ($result as $row) {
                    $array[] = array (
                        'product' => $row['PRODUCT_NAME'],
                        'price' => $row['PRICE'],
                    );
                }
                return $array;
            }
        
            catch (PDOException $e) {
                echo "There is some problem in connection: " . $e->getMessage();
            }
        }
    
            
        static public function getBookingList() {
            
            if(isset($_SESSION['USERMB'])) {
                
                try {
                    $conn = Connection::openConnection();
                    $stmt = $conn->prepare("SELECT * FROM kickgrass_book WHERE DISPATCH_TIME IS NULL") ;
                    $stmt->execute();                
                    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                    $result = $stmt->fetchAll();		    
                    return $result;
                }

                catch (PDOException $e) {
                    echo "There is some problem in connection: " . $e->getMessage();
                }
                
            }
            
        }

        static public function fetchProducts($biz) {

            try {
                $conn = Connection::openConnection();
                $stmt = $conn->prepare("SELECT * FROM kickgrass_biz WHERE CLASS = :biz");
                $stmt->execute(array(':biz' => $biz));
                $stmt->setFetchMode(PDO::FETCH_ASSOC);          
                $result = $stmt->fetchAll();            
                $conn = Connection::closeConnection();
                return $result;
            }

            catch (PDOException $e) {
                echo "There is some problem in connection: " . $e->getMessage();
            }

        }
        

        static public function updateBookTime($id) {
            
            try {
                $conn = Connection::openConnection();
                $stmt = $conn->prepare("UPDATE kickgrass_book SET DISPATCH_TIME = :time WHERE BOOK_ID = :id") ;
                $stmt->execute(array(':time' => self::dateTime(), ':id' => $id));       
                if($stmt) {
                    return true;
                }
                else {
                    return false;
                }
                return $result;
            }
        
            catch (PDOException $e)	{
                echo "There is some problem in connection: " . $e->getMessage();
            }
            
        }
        

        static public function availUnavailToggle($pid, $stat) {
            
            try	{
                $conn = Connection::openConnection();
                $stmt = $conn->prepare("UPDATE kickgrass_biz SET AVAILABILITY = :stat WHERE PRODUCT_ID = :id") ;
                $stmt->execute(array(':id' => $pid, ':stat' => $stat));       
                if($stmt) {
                    return true;
                }
                else {
                    return false;
                }
                return $result;
            }

            catch (PDOException $e) {
                echo "There is some problem in connection: " . $e->getMessage();
            }
            
        }
        
        static public function toggleOnOff($stat) {
            
            try	{
                $conn = Connection::openConnection();
                $stmt = $conn->prepare("UPDATE kickgrass_biz SET AVAILABILITY = :stat") ;
                $stmt->execute(array(':stat' => $stat));       
                if($stmt) {
                    return true;
                }
                else {
                    return false;
                }
                return $result;
            }

            catch (PDOException $e) {
                echo "There is some problem in connection: " . $e->getMessage();
            }
            
        }
        
        static public function dateTime() {
            
            date_default_timezone_set('Asia/Kolkata');
            $time = date("Y-m-d H:i:s");
            return $time;
            
        }
        
        static public function insertOffer($arr) {
            
             try {
                $conn = Connection::openConnection();
                $stmt = $conn->prepare("INSERT INTO kickgrass_offer(PRODUCT_ID, OFFER_NAME, DESCRIPTION, PRICE, CLASS) VALUES(:id, :name, :desc, :price, :class)") ;
                $stmt->execute(array(
                    ':id' => $arr['offerId'],
                    ':name' => $arr['offerName'], 
                    ':desc' => $arr['offerDesc'], 
                    ':price' => $arr['offerPrice'],
                    ':class' => $arr['offerClass'],
                    ));
                
                if($stmt) {
                    return true;
                }
                else {
                    return false;
                }                
            }
        
            catch (PDOException $e) {
                echo "There is some problem in connection: " . $e->getMessage();
            }
            
        }
        
        
    }