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

function afterItemSave($Item) {
        // выполнение функции в фоновом режиме
        $this->app->shadow('/api/call/units/recalc');
}


function beforeItemSave(&$Item)
{
    $Item["levels_min"] = 0;
    $Item["levels_max"] = 0;
    $Item["quart"] = 0;
    $Item["year"] = 0;

    foreach ($Item["buildings"]["data"] as $building) {
        $data = (object)$building["data"];
        if ($building["active"] == "on") {
            if ($Item["levels_min"] == 0 or ($data->levels > "" and $data->levels < $Item["levels_min"])) {
                $Item["levels_min"] = $data->levels;
            }
            if ($Item["levels_max"] == 0 or ($data->levels > "" and $data->levels > $Item["levels_max"])) {
                $Item["levels_max"] = $data->levels;
            }

            if ($Item["year"] == 0 or $data->year.$data->quart > $Item["year"].$Item["quart"]) {
                $Item["year"] = $data->year;
                $Item["quart"] = $data->quart;
            }

        }
    }
    
    return $Item;
}



}
?>
