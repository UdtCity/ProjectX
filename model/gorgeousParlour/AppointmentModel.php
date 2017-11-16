<?php

    include_once '../appConnection.php';


    class Appointment {
        
        public function getAllApp($datetime = null) {
            
            try {

                $conn = Connection::openConnection();
                if($datetime != null) {
                    $stmt = $conn->prepare("
                        SELECT
                            C.BOOK_ID,
                            A.USER_ID, A.USERNAME, A.MOBILE_NO, A.ADDRESS, 
                            B.SERVICE_ID, B.SERVICE_NAME, B.PRICE, 
                            C.SERVICE_AT,C.SERVICE_DATETIME  
                        FROM
                            users A, gorgeous_biz B, gorgeous_book C
                        WHERE 
                            C.USER_ID = A.USER_ID AND C.SERVICE_ID = B.SERVICE_ID AND C.SERVICE_TAKEN = 1 AND C.SERVICE_DATETIME LIKE '{$datetime}%'
                        ");
                }
                else {
                    $stmt = $conn->prepare("
                        SELECT
                            C.BOOK_ID,
                            A.USER_ID, A.USERNAME, A.MOBILE_NO, A.ADDRESS, 
                            B.SERVICE_ID, B.SERVICE_NAME, B.PRICE, 
                            C.SERVICE_AT,C.SERVICE_DATETIME  
                        FROM
                            users A, gorgeous_biz B, gorgeous_book C
                        WHERE 
                            C.USER_ID = A.USER_ID AND C.SERVICE_ID = B.SERVICE_ID AND C.SERVICE_TAKEN IS NULL
                        ");
                }
                
                
                $row = $stmt->execute();                
                $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                $result = $stmt->fetchAll();
                $array = array();                
                foreach ($result as $row) {
                    array_push($array, $row);
                }
                return $array;
                
            }
        
            catch (PDOException $e) {
                echo "There is some problem in connection: " . $e->getMessage();
            }

            
        }
        
        public function acceptAppointment($id, $status) {
            
            try {
                $conn = Connection::openConnection();
                $stmt = $conn->prepare("UPDATE gorgeous_book SET SERVICE_TAKEN = :status WHERE BOOK_ID = :id");
                $stmt->execute(array(':status' => $status, ':id' => $id)); 
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
        
        public function rejectAppointment($id, $status) {
            
            try {
                $conn = Connection::openConnection();
                $stmt = $conn->prepare("UPDATE gorgeous_book SET SERVICE_TAKEN = :status WHERE BOOK_ID = :id");
                $stmt->execute(array(':status' => $status, ':id' => $id)); 
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
        
        public function getTimeList($datetime) {
            
            try {

                $conn = Connection::openConnection();
                $stmt = $conn->prepare("SELECT SERVICE_DATETIME FROM gorgeous_book WHERE SERVICE_DATETIME LIKE '{$datetime}%'") ;
                $row = $stmt->execute();                
                $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                $result = $stmt->fetchAll();
                $array = array();                
                foreach ($result as $row) {
                    array_push($array, $row['SERVICE_DATETIME']);
                }
                return $array;
                
            }
        
            catch (PDOException $e) {
                echo "There is some problem in connection: " . $e->getMessage();
            }

            
        }
        
        public function getServiceID($class, $name) {

            try {
                $conn = Connection::openConnection();
                $stmt = $conn->prepare("SELECT SERVICE_ID FROM gorgeous_biz WHERE CLASS = :class and SERVICE_NAME = :name");
                $row = $stmt->execute(array(':class' => $class, ':name' => $name));                
                $stmt->setFetchMode(PDO::FETCH_ASSOC); 		    
		        $result = $stmt->fetch();		    
                $conn = Connection::closeConnection();
                return $result['SERVICE_ID'];
                
            }
        
            catch (PDOException $e) {
                echo "There is some problem in connection: " . $e->getMessage();
            }

            
        }
        
        public function bookNew($arr) {
            
            try {
                $conn = Connection::openConnection();
                $stmt = $conn->prepare("INSERT INTO gorgeous_book(USER_ID, SERVICE_ID, SERVICE_AT, SERVICE_DATETIME) VALUES(:userId, :serviceId, :serviceAt, :serviceDateTime)") ;
                $stmt->execute(array(
                    ':userId' => $arr['userId'],
                    ':serviceId' => $arr['serviceId'], 
                    ':serviceAt' => $arr['serviceAt'], 
                    ':serviceDateTime' => $arr['serviceDateTime']
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

    class Session_Type extends Appointment {
        
        public function typeClassify($arr, $type) {
            
            if($type == 1) {        // Morning Session - .5 hrs
                
                $slots = array(
                    "10:00:00" => "10:00 to 10:30",
                    "10:30:00" => "10:30 to 11:00",
                    "11:00:00" => "11:00 to 11:30",
                    "11:30:00" => "11:30 to 12:00",
                    "12:00:00" => "12:00 to 12:30",
                    "12:30:00" => "12:30 to 01:00"
                );
                
            }
            
            else if($type == 2) {  // Morning Session - 1 hrs
                
                $slots = array(
                    "14:00:00" => "2:00 to 3:00",
                    "15:00:00" => "3:00 to 4:00",
                    "16:00:00" => "4:00 to 5:00",
                    "17:00:00" => "5:00 to 6:00",
                    "18:00:00" => "6:00 to 7:00"
                );
                
            }
            
            foreach($arr as $row) {
                
                $time = (new DateTime($row))->format('H:i:s');
                if(array_key_exists($time, $slots)) {
                    unset($slots[$time]);
                }
                
            }
            echo json_encode($slots);
                
        }
        
    }