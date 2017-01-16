<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

	if (isset($_SERVER['HTTP_ORIGIN'])) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
    }

    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET");         
                      
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers: Authorization, Accept, X-Custom-Header");
                
        exit(0);
        
    }
 
//including the required files
require_once '../include/DbOperation.php';
require '.././libs/Slim/Slim.php';


 
\Slim\Slim::registerAutoloader();
 
$app = new \Slim\Slim();
 

 
/* *
 * URL: 
 * Parameters: none
 * Authorization: Put API Key in Request Header
 * Method: GET
 * */
$app->get('/tratamiento/:id', 'authenticate', function($pacientid) use ($app){
    $db = new DbOperation();
    $result = $db->getTrata($pacientid);
    $response = array();
    $response['error'] = false;
    $response['prescriptions'] = array();
    while($row = $result->fetch_assoc()){
        $temp = array();
        $temp['person_id']=$row['person_id'];
        $temp['diagnostic_id'] = $row['diagnostic_id'];
        $temp['status_treatment'] = $row['status_treament'];
        $temp['prescription'] = $row['prescription'];
        $temp['indications']= $row['indications'];
        $temp['creado'] = $row['created'];
        $temp['modificado']= $row['modified'];
        array_push($response['prescriptions'],$temp);
    }
    echoResponse(200,$response);
});

$app->get('/citas/:id', 'authenticate', function($pacientid) use ($app){
    $db = new DbOperation();
    $result = $db->getCita($pacientid);
    $response = array();
    $response['error'] = false;
    $response['citations'] = array();
    while($row = $result->fetch_assoc()){
        $temp = array();
        $temp['id']=$row['id'];
        $temp['person_id'] = $row['person_id'];
        $temp['datecitation_id'] = $row['datecitation_id'];
        $temp['date_hour'] = $row['date_hour'];
        $temp['created']= $row['created'];
        $temp['modified']= $row['modified'];
        array_push($response['citations'],$temp);
    }
    echoResponse(200,$response);
});
$app->get('/indicacion/:id', 'authenticate', function($pacientid) use ($app){
    $db = new DbOperation();
    $result = $db->getIndi($pacientid);
    $response = array();
    $response['error'] = false;
    $response['indication'] = array();
    while($row = $result->fetch_assoc()){
        $temp = array();
        $temp['id']=$row['id'];
        $temp['person_id'] = $row['person_id'];
        $temp['indicacion'] = $row['indication'];
         $temp['diagnostic_id'] = $row['diagnostic_id'];
        array_push($response['indication'],$temp);
    }
    echoResponse(200,$response);
});
//http://192.168.137.1:8080/Sitios_web/APIMEDICALMASTER/v1/diagnostico/2
$app->get('/diagnostico/:id', 'authenticate', function($pacientid) use ($app){
    $db = new DbOperation();
    $result = $db->getDiag($pacientid);
    $response = array();
    $response['error'] = false;
    $response['diagnostics'] = array();
    while($row = $result->fetch_assoc()){
        $temp = array();
        $temp['id']=$row['id'];
        $temp['person_id'] = $row['person_id'];
        $temp['history_id'] = $row['history_id'];
        $temp['diagnostico'] = $row['diagnostico'];
        array_push($response['diagnostics'],$temp);
    }
    echoResponse(200,$response);
});
$app->get('/estudios/:id', 'authenticate', function($pacientid) use ($app){
    $db = new DbOperation();
    $result = $db->getEstu($pacientid);
    $response = array();
    $response['error'] = false;
    $response['studies'] = array();
    while($row = $result->fetch_assoc()){
        $temp = array();
        $temp['id']=$row['id'];
        $temp['person_id'] = $row['person_id'];
        $temp['diagnostic_id'] = $row['diagnostic_id'];
        $temp['nombre_estudio'] = $row['name_studie'];
        $temp['observacion'] = $row['observations'];
        $temp['Fecha_orden'] = $row['created'];
        
        array_push($response['studies'],$temp);
    }
    echoResponse(200,$response);
});

 /* * ID PACIENTE
 * URL: 
 * Parameters: none
 * Authorization: Put API Key in Request Header
 * Method: GET
 * */
$app->get('/paciente/:id', 'authenticate', function($paciente_id) use ($app){
    $db = new DbOperation();
    $result = $db->getpaciente($paciente_id);
    $response = array();
    $response['error'] = false;
    $response['paciente'] = array();
    while($row = $result->fetch_assoc()){
        $temp = array();
        $temp['id'] = $row['id'];
        $temp['name'] = $row['name'];
        $temp['dni'] = $row['dni'];
        $temp['last_name'] = $row['last_name'];
        $temp['genero'] = $row['gender'];
        $temp['direccion'] = $row['address'];
        $temp['telefono'] = $row['phone'];
        $temp['correo'] = $row['email'];
        $temp['nacionalidad'] = $row['nationality_id'];
        $temp['claveapp'] = $row['pass_app'];
        $temp['token'] = $row['token'];
        array_push($response['paciente'],$temp);
    }
    echoResponse(200,$response);
});

 
/* *
 * URL: 
 * Parameters: none
 * Authorization: Put API Key in Request Header
 * Method: GET
 * */
$app->get('/people', 'authenticate', function() use ($app){
    $db = new DbOperation();
    $result2 = $db->getallAssig();
    $result = $db->getAllStudents();
    $response = array();
    $response['error'] = false;
    $response['people'] = array();
 
    while($row = $result->fetch_assoc()) {
        $temp = array();
        $temp['id'] = $row['id'];
        $temp['name'] = $row['name'];
        $temp['dni'] = $row['dni'];
        $temp['last_name'] = $row['last_name'];
        $temp['genero'] = $row['gender'];
        $temp['direccion'] = $row['address'];
        $temp['telefono'] = $row['phone'];
        $temp['correo'] = $row['email'];
        $temp['nacionalidad'] = $row['nationality_id'];
        $temp['claveapp'] = $row['pass_app'];
        $temp['token'] = $row['token'];

        while ($row2 = $result2->fetch_assoc()){
        $temp = array();
        $temp['person_id']=$row2['person_id'];
        $temp['diagnostic_id'] = $row2['diagnostic_id'];
        $temp['status_treatment'] = $row2['status_treament'];
        $temp['prescription'] = $row2['prescription'];
        $temp['observacion']= $row2['observations_prescription'];
        $temp['creado'] = $row2['created'];
        $temp['modificado']= $row2['modified'];
        array_push($response['people'],$temp);
        }
        array_push($response['people'],$temp);
    }   
 
    echoResponse(200,$response);
});
 
function echoResponse($status_code, $response)
{
    $app = \Slim\Slim::getInstance();
    $app->status($status_code);
    $app->contentType('application/json');
    echo json_encode($response);
}
 
 
function verifyRequiredParams($required_fields)
{
    $error = false;
    $error_fields = "";
    $request_params = $_REQUEST;
 
    if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
        $app = \Slim\Slim::getInstance();
        parse_str($app->request()->getBody(), $request_params);
    }
 
    foreach ($required_fields as $field) {
        if (!isset($request_params[$field]) || strlen(trim($request_params[$field])) <= 0) {
            $error = true;
            $error_fields .= $field . ', ';
        }
    }
 
    if ($error) {
        $response = array();
        $app = \Slim\Slim::getInstance();
        $response["error"] = true;
        $response["message"] = 'Required field(s) ' . substr($error_fields, 0, -2) . ' is missing or empty';
        echoResponse(400, $response);
        $app->stop();
    }
}
 
function authenticate(\Slim\Route $route)
{
    $headers = apache_request_headers();
    $response = array();
    $app = \Slim\Slim::getInstance();
 
    if (isset($headers['authorization'])) {
        $db = new DbOperation();
        $api_key = $headers['authorization'];
        if (!$db->isValid($api_key)) {
            $response["error"] = true;
            $response["message"] = "Access Denied. Invalid Api key";
            echoResponse(401, $response);
            $app->stop();
        }
    } else {
        $response["error"] = true;
        $response["message"] = "Api key is misssing";
        echoResponse(400, $response);
        $app->stop();
    }
}
 
$app->run();