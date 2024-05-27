<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $postdata = file_get_contents("php://input");
    $cd2 = data("h:i:sa");
    file_put_contents('posted-data-'.$cd2.'.log',$postdata);
} else {
    echo 'CobsNET Windows Telemetry Service.';
}


?>