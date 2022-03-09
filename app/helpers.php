<?php

if(! function_exists('validate')) {
    function validate(array $attributes, array $rules): array // что функция вернёт
    {
        return validator($attributes, $rules)->validate();
    }
}