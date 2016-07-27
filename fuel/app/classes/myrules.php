<?php

class Myrules
{
    public static function _validation_unique($val, $options)
    {
        list($table, $field) = explode('.', $options);

        $result = DB::select(DB::expr("LOWER (\"$field\")"))
        ->where($field, '=', Str::lower($val))
        ->from($table)->execute();

        return ! ($result->count() > 0);
    }
}

?>