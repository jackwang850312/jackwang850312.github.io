<?php

$content=file_get_contents("http://opendata.epa.gov.tw/ws/Data/REWXQA/?$orderby=SiteName&$skip=0&$top=1000&format=json");

echo $content;

?>