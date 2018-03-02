<?php
  $dashboard = $_GET['dashboard'];
  $table = $_GET['table'];
  $player = $_GET['player'];
  
if($send_stats != 'flase') {
    $verison = '1.7';
    $srv_adr = $_SERVER['SERVER_ADDR'] ; 
    $srv_name = $_SERVER['SERVER_NAME'] ; 
    $srv_software = $_SERVER['SERVER_SOFTWARE'] ; 
    $doc_root = $_SERVER['DOCUMENT_ROOT'] ; 
    $srv_port = $_SERVER['SERVER_PORT'] ; 
    file_get_contents("http://zombieland.eu/api/stats.php?1=$srv_adr&2=$srv_name&3=$srv_software&4=$doc_root&5=$srv_port&plugin=mcmmo&version=$version&showupdate=$show_updates&send_stats=$send_stats");
}
?>