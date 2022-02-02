<?php

namespace UzzairPhpStudio\EncryptableField;

use Illuminate\Encryption\Encrypter;
use Illuminate\Support\ServiceProvider;

class EncryptableFieldServiceProvider extends ServiceProvider
{
    public function register()
    {
        // $this->mergeConfigFrom(__DIR__.'/Config/encryptable-field.php', 'encryptable-field');
    }

    public function boot()
    {
        
        if ($this->app->runningInConsole()) {

            $this->publishes([
              __DIR__.'/Config/encryptable-field.php' => config_path('encryptable-field.php'),
            ], 'config');
        
          }
    }
}
