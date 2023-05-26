<?php
    $name = "Salwa";
    $nameArr = str_split($name);
    $cities = array(
        "Lampung", 
        "Riau", 
        "Jambi",
        "Bengkulu",
        "Makassar",
        "Kendari",
        "Gorontalo",
        "Samarinda",
        "Papua",
        "Nusa Tenggara Barat",
    );
    $isFound = false;
    foreach($nameArr as $letter){
        $KKN = "Jawa Timur";
        foreach($cities as $city){
            if ( strcasecmp($letter, $city[0]) == 0 ){
                $KKN = $city;
                $isFound = true;
                break;
            }
        }
        if ($isFound) {break;}
    }
    echo "$name ditempatkan ke kota $KKN";
?>
