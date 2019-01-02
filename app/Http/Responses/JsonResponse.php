<?php

namespace App\Http\Responses;


use Illuminate\Contracts\Support\Arrayable;

/**
 * Class JsonResponse
 *
 * 属性类型不支持关联数组类型，关联数组请使用对象代替
 *
 * @package App\Http\Responses
 */
abstract class JsonResponse implements Arrayable
{
    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        $resp = [];
        foreach (get_object_vars($this) as $key => $val) {
            if ($val instanceof JsonResponse) {
                $resp[$key] = $val->toArray();
            }
            if (is_array($val)) {
                $resp[$key] = [];
                foreach ($val as $k => $v) {
                    if ($v instanceof JsonResponse) {
                        $resp[$key][] = $v->toArray();
                    } else {
                        $resp[$key][] = $v;
                    }
                }
            } else {
                $resp[$key] = $val;
            }
        }

        return $resp;
    }
}