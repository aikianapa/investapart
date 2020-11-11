<?php
function complexEmptyItemRead(&$Item = []) {
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
                "form"=> "complex",
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

function complexView($item) {
  $app = new wbApp();
  $units = wbItemList("units",'active = "on" AND complex = "'.$item["id"].'"');
  $groups = $app->json($units)->groupBy("type")->get();
  $units = [];
  foreach($groups as $type => $group) {
    $group = $app->json($group);
    $unit = [
      "type" => $type
      ,"price_min" => $group->min("price")
      ,"price_max" => $group->max("price")
      ,"square_min" => $group->min("square")
      ,"square_max" => $group->max("square")
      ,"count" => $group->count()
    ];
    $units[] = $unit;
  }
  $item["unitslist"] = $units;
  return $item;
}

function complexBeforeItemSave(&$Item) {
  $Item["levels_min"] = 0;
  $Item["levels_max"] = 0;
  $Item["quart"] = 0;
  $Item["year"] = 0;
  $cdata = wbArrayToObj(wbItemRead("admin","complex_data"));
  if (!$cdata) $cdata = ["id" => "complex_data", "ready_year_min" => 0, "ready_year_max" => 0]; // Будем сохранять общие данные по всем комплексам
  foreach($Item["buildings"]["data"] as $building) {
    $data = (object)$building["data"];
    if ($building["active"] == "on") {
        if ($Item["levels_min"] == 0 OR ($data->levels > "" AND $data->levels < $Item["levels_min"] )) $Item["levels_min"] = $data->levels;
        if ($Item["levels_max"] == 0 OR ($data->levels > "" AND $data->levels > $Item["levels_max"] )) $Item["levels_max"] = $data->levels;

        if ($Item["year"] == 0 OR $data->year.$data->quart > $Item["year"].$Item["quart"] ) {
            $Item["year"] = $data->year;
            $Item["quart"] = $data->quart;
        }


        if ($cdata->ready_year_min == 0 OR $data->year < $cdata->ready_year_min ) $cdata->ready_year_min = $data->year;
        if ($cdata->ready_year_max == 0 OR $data->year > $cdata->ready_year_max ) $cdata->ready_year_max = $data->year;
    }
  }
  wbItemSave("admin",wbObjToArray($cdata));

  return $Item;
}

function complexBeforeItemShow(&$Item) {
    $Item["image"] = wbGetItemImg($Item);
    $Item["complex"] = $Item["id"]; // нужно для фильтра
    return $Item;
}

?>
