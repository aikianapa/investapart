<?php

use Adbar\Dot;
use Nahid\JsonQ\Jsonq;

class unitsClass extends cmsFormsClass
{
    public function afterItemRead(&$Item)
    {
        return $Item;
    }

    public function beforeItemFilter(&$Item)
    {
        (isset($Item["object"]) && wbCorrelation('objects', $Item['object'], 'active') == '') ? $Item['active'] = '' : null;
        return $Item;
    }

    public function beforeItemShow(&$Item)
    {
        $Item['district'] = wbCorrelation('objects', $Item['object'], 'district');
        $Item['metro'] = wbCorrelation('objects', $Item['object'], 'metro');
        $Item["image"] = wbGetItemImg($Item);
        if (isset($Item['price'])) {
            $Item['price'] = money_format('%.0n', intval($Item['price']));
        }

        (isset($Item["object"]) && wbCorrelation('objects', $Item['object'], 'active') == '') ? $Item['active'] = '' : null;
        return $Item;
    }


    public function afterItemSave($Item)
    {
        // выполнение функции в фоновом режиме
        $this->app->shadow('/api/call/units/recalc?object='.$Item['object']);
    }

    public function recalc()
    {
        // Пересчёт статистики
        // Вызов через /api/call/units/recalc

        if (isset($_REQUEST['object'])) {
            $object = $_REQUEST['object'];
            $filter = ['filter' => ['object' => $_REQUEST['object']]];
        } else {
            $filter = ['filter' => ['active' => 'on']];
        }

        $units = wbItemList('units', $filter);

        $data = $init = [
            'price_min' => 0,
            'price_max' => 0,
            'square_min' => 0,
            'square_max' =>0
        ];
    
        $json = new jsonq();
        $units = $json->collect($units['list']);
        isset($object) ? $units->where('active', 'on') : null;
        if ($units->count() > 0) {
            $this->recalcSet($units, $data);
        }
        if (isset($object)) {
            if ($item = wbItemRead('objects', $object)) {
                $item = array_merge($item, $data);
                if (isset($item['buildings']) AND $item['buildings']['data']) {
                    $data = $init;
                    foreach((array)$item['buildings']['data'] as $bid => $building) {
                        $units->where('building', $bid);
                        if ($units->count() > 0) {
                            $this->recalcSet($units, $data);
                        }
                        $building['data'] = array_merge($building['data'], $data);
                        $item['buildings']['data'][$bid] = $building;

                    }
                }
                $res = wbItemSave('objects', $item);
            }
        } else {
            // count objects
            $objects = wbItemList('objects', ['filter' => ['active' => 'on']]);
            $data['count_objects'] = $objects['count'];
            // ===
            $data['count_units'] = $units->count();

            $item = wbItemRead("admin", "complex_data");
            $item = array_merge($item, $data);
            wbItemSave("admin", $item);
        }
        die;
    }
        function recalcSet($units, &$data)
        {
            $data['price_min'] = intval($units->min('price'));
            $data['price_max'] = intval($units->max('price'));
            $data['square_min'] = intval($units->min('square'));
            $data['square_max'] = intval($units->max('square'));
        }

}
