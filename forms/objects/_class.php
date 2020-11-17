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


function beforeItemSave(&$Item)
{
    $Item["levels_min"] = 0;
    $Item["levels_max"] = 0;
    $Item["quart"] = 0;
    $Item["year"] = 0;
    $cdata = wbArrayToObj(wbItemRead("admin", "complex_data"));
    if (!$cdata) {
        $cdata = (object)["id" => "complex_data", "ready_year_min" => 0, "ready_year_max" => 0];
    } // Будем сохранять общие данные по всем комплексам
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

            if (!isset($cdata->ready_year_min)) {
                $cdata->ready_year_min == 0;
            }

            if (!isset($cdata->ready_year_max)) {
                $cdata->ready_year_miax == 0;
            }


            if ($cdata->ready_year_min == 0 or $data->year < $cdata->ready_year_min) {
                $cdata->ready_year_min = $data->year;
            }
            if ($cdata->ready_year_max == 0 or $data->year > $cdata->ready_year_max) {
                $cdata->ready_year_max = $data->year;
            }
        }
    }
    wbItemSave("admin", wbObjToArray($cdata));

    return $Item;
}



}
?>
