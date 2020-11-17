<?php

use Adbar\Dot;

class unitsClass extends cmsFormsClass
{

function afterItemRead(&$Item) {
    $Item['district'] = wbCorrelation('objects', $Item['object'], 'district');
    $Item['metro'] = wbCorrelation('objects', $Item['object'], 'metro');
    return $Item;
}

function beforeItemShow(&$Item)
{
    $Item["image"] = wbGetItemImg($Item);
    return $Item;
}


function afterItemSave($Item)
{
    $data = (object)[];
    $data->price_min = null;
    $data->price_max = null;
    $data->square_min = null;
    $data->square_max = null;
    $item = wbArrayToObj($Item);
    $object = $item->object;
    $building = $item->building;
    if ($building > '') {
        $list = wbItemList("units", 'object = "'.$object.'"');
        $c_data = $data;
        $b_data = $data;
        foreach ($list['list'] as $unit) {
            if ($unit["active"] == "on") {
                if ($c_data->price_min == null or $unit["price"] < $c_data->price_min) {
                    $c_data->price_min = $unit["price"];
                }
                if ($c_data->price_max == null or $unit["price"] > $c_data->price_max) {
                    $c_data->price_max = $unit["price"];
                }
                if ($c_data->square_min == null or $unit["square"] < $c_data->square_min) {
                    $c_data->square_min = $unit["square"];
                }
                if ($c_data->square_max == null or $unit["square"] > $c_data->square_max) {
                    $c_data->square_max = $unit["square"];
                }
                if ($unit["building"] == $building) {
                    if ($b_data->price_min == null or $unit["price"] < $b_data->price_min) {
                        $b_data->price_min = $unit["price"];
                    }
                    if ($b_data->price_max == null or $unit["price"] > $b_data->price_max) {
                        $b_data->price_max = $unit["price"];
                    }
                    if ($b_data->square_min == null or $unit["square"] < $b_data->square_min) {
                        $b_data->square_min = $unit["square"];
                    }
                    if ($b_data->square_max == null or $unit["square"] > $b_data->square_max) {
                        $b_data->square_max = $unit["square"];
                    }
                }
            }
        }
        $compl = wbItemRead("objects", $object);
        $compl = array_merge($compl, wbObjToArray($c_data));
     
        if (@isset($compl["buildings"]["data"][$building]["data"])) {
            $compl["buildings"]["data"][$building]["data"] = array_merge($compl["buildings"]["data"][$building]["data"], wbObjToArray($b_data));
        } else {
            $compl["buildings"]["data"][$building]["data"] = wbObjToArray($b_data);
        }
        wbItemSave("objects", $compl);

    }

}



}

?>