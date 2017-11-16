<?php 

    require_once 'AppointmentModel.php';

    /*$data['serverAPI'] = 'bookNew';
    $data['Data']['userId'] = 101;
    $data['Data']['mobile'] = 'bala';
    $data['Data']['email'] = 'rinesh93bharath@gmail.com';
    $data['Data']['Address'] = 'Udumalpet';
    $data['Data']['serviceAt'] = 1;
    $data['Data']['serviceClass'] = 'Basicfacial';
    $data['Data']['serviceName'] = 'Basic cleanup';
    $data['Data']['date'] = '2017-10-19';
    $data['Data']['time'] = '14:00:00';*/
    
    /*$data['serverAPI'] = 'getAllApp';
    $data['dateTime']  = '2017';*/

    $data = isset($_POST['serverAPI']) ? $_POST : json_decode(file_get_contents("php://input"));
    
    if(isset($data['serverAPI'])) {
        
        $app = new Appointment();
        $ses = new Session_Type();
        
        switch($data['serverAPI']) {
            
            case 'bookNew':
                
                unset($data['serverAPI']);
                return bookNewAppointment($data);
                
            case 'getProductList':
                
                unset($data['serverAPI']);
                return $app->getProductList();
                
            case 'getTimeList':
                
                unset($data['serverAPI']);
                return json_encode($ses->typeClassify($app->getTimeList($data['dateTime']), $data['sessionType']));
                
            case 'getAllApp':
                
                unset($data['serverAPI']);                
                die (json_encode($app->getAllApp($data['dateTime'])));
                
            case 'acceptApp':
                
                unset($data['serverAPI']);             
                die (json_encode($app->acceptAppointment($data['appid'], $data['status'])));
                
            case 'rejectApp':
                
                unset($data['serverAPI']);             
                die (json_encode($app->rejectAppointment($data['appid'], $data['status'])));
                
            default:
                    
                echo json_encode(array('status' => 'false', 'status_code' => '400', 'message' => 'Invalid API Action'));
        }
        
    }


    function bookNewAppointment($data) {
        
        if(isset($data['Data'])) {
            
            $app = new Appointment();
            
            unset($data['Data']['mobile'], $data['Data']['email'], $data['Data']['Address']);
            
            $data['Data']['serviceId'] = $app->getServiceID($data['Data']['serviceClass'], $data['Data']['serviceName']);
            
            unset($data['Data']['serviceClass'], $data['Data']['serviceName']);
            
            $data['Data']['serviceDateTime'] = mergeDateTime($data['Data']['date'], $data['Data']['time']);
            
            unset($data['Data']['date'], $data['Data']['time']);
            
            return $app->bookNew($data['Data']);
            
        }
        
    }


    function mergeDateTime($d, $t) {

        $merge = new DateTime((new DateTime($d))->format('Y-m-d') .' ' .(new DateTime($t))->format('H:i:s'));
        return $merge->format('Y-m-d H:i:s'); // Outputs '2017-03-14 13:37:42'

    }