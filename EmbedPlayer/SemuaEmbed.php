<?php
class anasbexEmbed {
    var $key;
    var $type;
    var $url; 
    var $img;
    var $json;
    function get_data($url) {
    $ch = curl_init();
    $timeout = 50;
    curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT,
    "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:69.0) Gecko/20100101 Firefox/69.0");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
  
  
  
}

?>
