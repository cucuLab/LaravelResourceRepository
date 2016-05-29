<?php
namespace  Modules\LaravelResourceRepository\Repositories\Utils;

class ArrayToDot
{
    public static function merge($rules, $nestedRules, $key)
    {
        foreach ($nestedRules as $ikey => $value) {
            $rules[$key.'.'.$ikey] = $value;
        }
        return $rules;
    }
}
