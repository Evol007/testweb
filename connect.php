<?php
    class db{
        private  $db;
        function __constructor($user, $pass, $dbname, $debug){
            $this->db = new mysqli("localhost",$user,$pass,$dbname);
            $this->db->set_charset("UTF-8"); 
            if($this->db->connect_errno){
                echo "fail connected";
                exit();
            }else{
                if($debug){
                    echo "connect success....";
                }
            }
            function debug($mode){
                if($mode){
                    echo "debug on: Connect success...";
                }
            }
        }
    }
    $mydb = new db("root","","636021421112",true);
?>