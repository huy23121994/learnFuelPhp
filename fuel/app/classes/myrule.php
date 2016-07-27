<?php

class MyRules
{
    // note this is a static method
    public static function _validation_unique($val, $options)
    {
        list($table, $field) = explode('.', $options);

        $result = DB::select(DB::expr("LOWER (\"$field\")"))
        ->where($field, '=', Str::lower($val))
        ->from($table)->execute();

        return ! ($result->count() > 0);
    }

}
// and call it like:
$val = Validation::forge();

// Note the difference between static and non-static validation rules:

// Add it staticly, will only be able to use static methods
$val->add_callable('MyRules');

// Adds it non-static, will be able to use both static and non-static methods
$val->add_callable(new MyRules());

$val->add('tag_name', 'Your username', array(), array('trim', 'strip_tags', 'required'))
    ->add_rule('unique', 'tags.slug');
?>