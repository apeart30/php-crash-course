<?php
$key="KNHL";
$original_string=json_encode(array("showpassword"=>"yes","bgcolor"=>"#ffffff"));
$cookie="";
for ($i=0;$i<strlen($original_string);$i++){
$cookie .= $key[$i % strlen($key)] ^ $original_string[$i];
}
echo base64_encode($cookie);
?>
