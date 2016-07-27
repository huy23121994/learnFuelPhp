<?php

class Myrules
{
    public static function _validation_unique($value, $options, $id = 0)
    {
        list($table, $field) = explode('.', $options);

        $val = Validation::active();
        $id = $val->input('id');
		$check = DB::select('id', $field)->where($field, '=', $value)->from($table)->execute();

        $result = $check->current();
		if($check->count() > 0){
			if($result['id'] === $id){
				return TRUE;
			}else{
				return FALSE;
			}
		}else
			return true;
    }
}

?>