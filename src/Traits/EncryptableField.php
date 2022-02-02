<?php

namespace UzzairPhpStudio\EncryptableField\Traits;

use Exception;
use Illuminate\Contracts\Encryption\EncryptException;
use Illuminate\Support\Facades\Crypt;

trait EncryptableField
{

    public function isEncryptableFields($key)
    {
        if(isset($this->encryptableFields)){
            return in_array($key, $this->encryptableFields);
        }

        return false;
        
    }

    public function encrypt($value)
    {
        try {
            
            return Crypt::encrypt($value);
        } catch (EncryptException $e) {
            return $e->getMessage();
        }
    }

    public function decrypt($value)
    {
        try {
            
            return Crypt::decrypt($value);

        } catch (EncryptException $e) {
            return $e->getMessage();
        }
    }

    public function getEncryptableFieldAttribute()
    {
        return $this->encryptableFields;
    }

    public function getAttribute($key)
    {
        $value = parent::getAttribute($key);

        if ($this->isEncryptableFields($key) && (!is_null($value) && $value != '')) {
            try {
                $value = $this->decrypt($value);
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }

        return $value;

    }

    public function setAttribute($key,$value)
    {

        if ($this->isEncryptableFields($key) && (!is_null($value) && $value != '')) {
            try {

                $value = $this->encrypt($value);

            } catch (Exception $e) {
                return $e->getMessage();
            }
        }

        return parent::setAttribute($key, $value);
        
    }

    public function attributesToArray()
    {
        $attributes = parent::attributesToArray();

        if ($attributes) {
          foreach ($attributes as $key => $value)
          {
            if ($this->isEncryptableFields($key) && (!is_null($value)) && $value != '')
            {
              $attributes[$key] = $value;
              try {
                $attributes[$key] = $this->decrypt($value);
              } catch (Exception $e) {
                  return $e->getMessage();
              }
            }
          }
        }
        return $attributes;
    }
}
