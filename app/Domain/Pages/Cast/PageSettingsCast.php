<?php

namespace DDD\Domain\Pages\Cast;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use DDD\Domain\Pages\Data\PageSettingsData;

class PageSettingsCast implements CastsAttributes
{

    /**
     * Cast the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return array
     */
    public function get($model, $key, $value, $attributes)
    {
        $value = is_array($value) ? $value : json_decode($value, true); // To array

        return PageSettingsData::from($value);
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  array  $value
     * @param  array  $attributes
     * @return array
     */
    public function set($model, $key, $value, $attributes)
    {
        // $value = !is_array($value) ? $value : json_encode($value); // To string
        // return $value;

        $data = PageSettingsData::from($value)->toArray(); // DTO to array
        return json_encode($data); // To string
    }
}