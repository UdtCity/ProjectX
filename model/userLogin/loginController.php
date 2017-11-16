<?php

    require_once 'loginModel.php';

    class Login extends Authentication {

        static public function userLogin($mobile, $pwd) {
            
            try	{
                    $result = Authentication::login($mobile, $pwd);
                    
                    if(!is_array($result)) {
                        return json_encode($RESPONSE['Status'] = 'failed');
                    }
                    else {
                        $_SESSION['USERID'] = $result['USER_ID'];
                        $_SESSION['USERNM'] = $result['USERNAME'];
                        $_SESSION['USERMB'] = $result['MOBILE_NO'];
                        $_SESSION['USERAD'] = $result['ADDRESS'];
                        $_SESSION['USEREM'] = $result['EMAIL'];
                        return json_encode($RESPONSE['Status'] = 'Success');    
                    }
            }

            catch (PDOException $e) {
                echo "There is some problem in Login: " . $e->getMessage();
            }

        }

        static public function userSignup($usr, $mobile, $email, $pwd, $addr) {

            try	{
                    $result = Authentication::signup($usr, $mobile, $email, $pwd, $addr);
                
                    if($result === true) {
                        return json_encode($RESPONSE['Status'] = 'Success');
                    }
                    else {
                        return json_encode($RESPONSE['Status'] = 'failed');  
                    }
            }

            catch (PDOException $e) {
                echo "There is some problem in Signup: " . $e->getMessage();
            }

        }

    }