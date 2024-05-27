<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $postdata = file_get_contents("php://input");
    $cd2 = date("hisa");
    
    file_put_contents('posted-data-'.$cd2.'.log',$postdata);
} else {
    echo 'CobsNET Nullable Telemtry Service.';
}


?>