<?php
function domain_availability($domains){
    $ns=  @dns_get_record(preg_replace("(^https?://)", "", $domains),DNS_NS);
    if(count($ns)) {
        $rs  = "Not Available ";
    }
    else{
        $rs     = " Available ";
    }
    return '<strong>'.$domains.': </strong>'.$rs;
}

$domains = $_GET['d'];
echo domain_availability($domains);
 