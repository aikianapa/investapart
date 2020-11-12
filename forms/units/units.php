<?php
wbRouterAdd("/units/(:any)","/controller:form/form:units/mode:show/item:$1/tpl:unit.php");

function unitsAfterItemRead($Item) {
    $compl = wbItemRead("complex",$Item["complex"]);
    $Item["district"] = $compl["district"];
    $Item["metro"] = $compl["metro"];
    return $Item;
}

function unitsAfterItemSave($Item) {
    $data = (object)[];
    $data->price_min = null;
    $data->price_max = null;
    $data->square_min = null;
    $data->square_max = null;
    $item = wbArrayToObj($Item);
    $complex = $item->complex;
    $building = $item->building;
    $list = wbItemList("units",'complex = "'.$complex.'"');
    $c_data = $data;
    $b_data = $data;
    foreach($list as $unit) {
        if ($unit["active"] == "on") {
            if ($c_data->price_min == null OR $unit["price"] < $c_data->price_min ) $c_data->price_min = $unit["price"];
            if ($c_data->price_max == null OR $unit["price"] > $c_data->price_max) $c_data->price_max = $unit["price"];
            if ($c_data->square_min == null OR $unit["square"] < $c_data->square_min ) $c_data->square_min = $unit["square"];
            if ($c_data->square_max == null OR $unit["square"] > $c_data->square_max) $c_data->square_max = $unit["square"];
            if ($unit["building"] == $building) {
                if ($b_data->price_min == null OR $unit["price"] < $b_data->price_min ) $b_data->price_min = $unit["price"];
                if ($b_data->price_max == null OR $unit["price"] > $b_data->price_max) $b_data->price_max = $unit["price"];
                if ($b_data->square_min == null OR $unit["square"] < $b_data->square_min ) $b_data->square_min = $unit["square"];
                if ($b_data->square_max == null OR $unit["square"] > $b_data->square_max) $b_data->square_max = $unit["square"];
            }
        }
    }
    $compl = wbItemRead("complex",$complex);
    $compl = array_merge($compl,wbObjToArray($c_data));
    if (@isset($compl["buildings"]["data"][$building]["data"])) {
        $compl["buildings"]["data"][$building]["data"] = array_merge($compl["buildings"]["data"][$building]["data"],wbObjToArray($b_data));
    } else {
        $compl["buildings"]["data"][$building]["data"] = wbObjToArray($b_data);
    }

    wbItemSave("complex",$compl);
}

function unitsBeforeItemShow(&$Item) {
    $Item["image"] = wbGetItemImg($Item);
    return $Item;
}

?>
