<?php
/**
 * Created by PhpStorm.
 * User: albertovieira
 * Date: 4/22/15
 * Time: 10:05 AM
 *
 * CRMALL SISTEMA DE INFORMACAO DE MARKETING LTDA - EPP
 * (c) Copyright 2013
 */

/**
 * Description of EventTypeEnum
 *
 * @author Alberto Vieira <albertovieiradelima at gmail.com>
 */

namespace App\Enum;

class EventTypeEnum {

    const EVENT    = 1;
    const COURSE  = 2;

    public static function description($value){
        $array = self::toArray();
        return $array[$value];
    }

    public static function valueFromName($value){
        return array_search($value, self::toArray());
    }

    public static function toArray(){

        $reflect = new \ReflectionClass(get_class($this));
        $constants = array();
        foreach($reflect->getConstants() as $key => $value){
            $constants[$value] = str_replace('_', ' ', $key);
        }
        // return array_flip($constants);
        return $constants;
    }

}

?>
