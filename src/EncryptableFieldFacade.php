<?php

namespace UzzairPhpStudio\EncryptableField;

use Illuminate\Support\Facades\Facade;

class EncryptableFieldFacade extends Facade{

    protected static function getFacadeAccessor()
    {
        return 'encryptable-field';
    }

}