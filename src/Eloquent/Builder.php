<?php

namespace UzzairPhpStudio\EncryptableField\Eloquent;

use Closure;
use Illuminate\Database\Eloquent\Builder as OriginalEloquentBuilder;
use Illuminate\Support\Facades\Crypt;

class Builder extends OriginalEloquentBuilder{

    public function encrypted($column, $operator = null, $value = null, $boolean = 'and')
    {
        $encryptedValue = Crypt::decryptString($value);

        // if ($column instanceof Closure && is_null($operator)) {
            
        //     $column($query = $this->model->newQueryWithoutRelationships());

        //     $this->query->addNestedWhereQuery($query->getQuery(), $boolean);

        // } else {

        $this->query->where($column, $operator, $encryptedValue);

        // }

        return $this;
    }


}