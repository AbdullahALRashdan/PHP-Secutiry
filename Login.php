<?php

function preventInj($data){
    $error = 0;
    if(strpos($data,"--")!==false)
        $error = 1;
    if(strpos($data,"/*")!==false)
        $error = 1;
    if(strpos($data,"*/")!==false)
        $error = 1;            
    if(strpos($data,"'")!==false)
        $error = 1;
    if(strpos($data,'"')!==false)
        $error = 1;
    if(strpos(strtolower($data),'select')!==false)
        $error = 1;
    if(strpos(strtolower($data),'delete')!==false)
        $error = 1;
    if(strpos(strtolower($data),'update')!==false)
        $error = 1;
    if(strpos(strtolower($data),'union')!==false)
        $error = 1;
    if($error!=1){
        return $data;
    }
}

$username = preventInj($_REQUEST['username']);

?>
