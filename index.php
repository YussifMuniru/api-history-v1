<?php 

  require 'vendor/autoload.php';
  
//   Flight::path(__DIR__ . '/vendor/flightphp/core/flight/database/');

//   // Set the path to the templates directory
//   Flight::set('flight.views.path', __DIR__ . '/vendor/flightphp/core/flight/template');

  
//    Flight::register('db', 'PDO', ["mysql:host=localhost;dbname=lottery", 
//     "enzerhub", "enzerhub"
// ], function($db){
   
//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   });

function hello($lt_id, $module) {
   print_r(str_split("03"));
}

Class Model{

    private $module;
    private $lottery_id;
    
   public function __construct($lt_id, $module){
      $this->module     = $module;
      $this->lottery_id = $lt_id;
   }
   
  public function myModel(){
    echo "Loading ".$this->module." ".$this->lottery_id;
  }
}




Flight::route('GET /@lottery/@lt_id/@module/','hello');

  // Flight::route('/@lottery/@lt_id/@module/', function ($lottery,$lt_id,$module) { // these are simple routes
  
    
  //   echo "Loading";
  
  //   //  Flight::render('history_'.$lottery,['lt_id' => $lt_id ,'module' => $module]);

  // });

  

  Flight::start();