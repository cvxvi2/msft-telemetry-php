<?php
$os=$_GET["os"];
$osver=$_GET["osver"];
$appver=$_GET["appver"];
$cd2 = date("hisa");
$data = 'OS: '.$os.' OS Version: '.$osver.' App Version: '.$appver; 
file_put_contents('posted-data-'.$cd2.'.log',$data);
echo '{"refreshInterval":"745","queryUrl":"/settings/v2.0/compat/appraiser","settings":{"ALTERNATEDATALINK":"http://adl.windows.com/appraiseradl/2023_12_14_03_01_AMD64.cab","ALTERNATEDATAVERSION":"2580","TEL_RECOMMENDEDDATAVERSIONFORINDICATORS_20H1":"2513","TEL_RECOMMENDEDDATAVERSIONFORINDICATORS_21H1":"2574","TEL_RECOMMENDEDDATAVERSIONFORINDICATORS_21H2":"2574","TEL_RECOMMENDEDDATAVERSIONFORINDICATORS_CO21H2":"2574","TEL_RECOMMENDEDDATAVERSIONFORINDICATORS_NI22H2":"2574","TEL_RECOMMENDEDDATAVERSIONFORINDICATORS_NI23H2":"2579","NOPERFBACKOFF":"FALSE","TARGETDATE":"131172372000000000","WUFREQUENCY":"2","MINDATAVERSION":"1005","MINEXPIREDCHECKS":"15","SAMPLING":"100","UEXMAXAGE":"45","UPLOADDAYS":"17","UPLOADSAMPLING":"0"}}';


?>