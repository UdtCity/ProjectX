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
        
        
        static public function dateTime() {
            
            date_default_timezone_set('Asia/Kolkata');
            $time = date("Y-m-d H:i:s");
            return $time;
            
        }
        
    }