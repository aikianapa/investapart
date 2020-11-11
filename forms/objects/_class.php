<?php

use Adbar\Dot;

class objectsClass extends cmsFormsClass {

function emptyItemRead(&$Item = [])
{
    if (!isset($Item["buildings"])) {
        $bid = wbNewId();
        $Item["buildings"] = [
             "data" => [$bid => ["id"=>$bid]]
            ,"dict" => [[
              "name"=> "prop",
              "label"=> "",
              "type"=> "forms",
              "value"=> "",
              "prop"=> [
                "form"=> "objects",
                "mode"=> "buildings",
                "unwrap"=> "on",
                "class"=> "",
                "style"=> ""
              ]]
            ]
          ];
    }
    return $Item;
}



}
?>
