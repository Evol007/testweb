<?php
   include_once "connect.php";
   include_once "util.php";
   $debug_mode = true;
   if($_SERVER['REQUEST_METHOD']=='GET'){
    debug_text("for GET Method", $debug_mode);
    show_data($debug_mode);
   }else if($_SERVER['REQUEST_METHOD']=='POST'){
    debug_text("for POST Method" ,$debug_mode);
   }else{
       debug_text("Error Unknow this Request", $debug_mode);
       http_response_code(405);
   }
   function show_data($debug_mode){
       $mydb = new db ("root","","6306021421112", $debug_mode);
       echo json_encode($mydb->query("select * from user"));
       $mydb->close();
   }
?>