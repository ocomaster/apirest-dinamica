<?php 
//Capturar datos de url
//$routesArray = explode("/", $_SERVER['REQUEST_URI']);
//$routesArray = array_filter($routesArray);


//echo "holaaa";

// $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// $uri = explode( '/', $uri );


//La idea es capturar lo que venga en la url

echo '<pre>'; print_r($_SERVER['REQUEST_URI']); echo '</pre>';

return;



// if (count($uri) == 0) {
//     $json = array(

//         'status' => 404,
//         'result' =>'Not found'
//     );
    
//     echo json_encode($json, http_response_code($json["status"]));
    
//     return;
// }
// if (count($uri) == 1 && isset($_SERVER['REQUEST_METHOD'])) {
//     echo '<pre>'; print_r($_SERVER['REQUEST_METHOD']); echo '</pre>';
// }

$json = array(

    'status' => 200,
    'result' => 'success'
);

echo json_encode($json);
return;


