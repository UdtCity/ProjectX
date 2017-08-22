<?php

    require_once '../appConnection.php';

    class BookOrder {
        
        static protected function initializeBooking($prodid, $prodnm, $quant) {
             
            try	{
                $conn = Connection::openConnection();
                $stmt = $conn->prepare("INSERT INTO kickgrass_book(USER_ID, CUSTOMER_NAME, MOBILE_NO, PRODUCT_ID, PRODUCT_NAME, QUANTITY) VALUES( :userid, :usernm, :usermb, :prodid, :prodnm, :quant)") ;
                $stmt->execute(array(':userid' => $_SESSION['USERID'], ':usernm' => $_SESSION['USERNM'], ':usermb' => $_SESSION['USERMB'], ':prodid' => $prodid, ':prodnm' => $prodnm, ':quant' => $quant));

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
        
    
        static protected function initializeDelivery($class, $prodid, $prodnm, $quant) {
            
            try {
                $conn = Connection::openConnection();
                $stmt = $conn->prepare("INSERT INTO pinto_book(USER_ID, CUSTOMER_NAME, MOBILE_NO, ADDRESS, CLASS, PRODUCT_ID, PRODUCT_NAME, QUANTITY) VALUES( :userid, :usernm, :usermb, :userad, :class, :prodid, :prodnm, :quant)") ;
                $stmt->execute(array(':userid' => $_SESSION['USERID'], ':usernm' => $_SESSION['USERNM'], ':usermb' => $_SESSION['USERMB'], ':userad' => $_SESSION['USERAD'], ':class' => $class, ':prodid' => $prodid, ':prodnm' => $prodnm, ':quant' => $quant));

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
        

        static public function orderDispatched($id) {

            try {
                $conn = Connection::openConnection();
                $stmt = $conn->prepare("UPDATE kickgrass_book SET DISPATCH_TIME = :time WHERE BOOK_ID = :id") ;
                $stmt->execute(array(':time' => dateTime(), ':id' => $id));       
                if($stmt) {
                    $stmt1 = $conn->prepare("UPDATE pinto_book SET DISPATCH_TIME = :time WHERE DEL_ID = :id") ;
                    $stmt1->execute(array(':time' => self::dateTime(), ':id' => $id));       
                    if($stmt1) {
                        return true;
                    }
                    else {
                        return false;
                    }
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

    class CheckOut extends  BookOrder {
    
        static private function convJSONtoOBJ($arr) {

            $temp = [];

            foreach($arr as $key => $value) {
                $temp[$key] = json_decode($value, true);
            }

            return $temp;
            
        }

        static public function bookTheOrder($arr, $class) {

            $dataArray = self::convJSONtoOBJ($arr);

            foreach($dataArray as $key => $value) {
                BookOrder::initializeBooking($key, $value['name'], $value['quant']);
                BookOrder::initializeDelivery($class, $key, $value['name'], $value['quant']);
            }

            return true;
            
        }

    }