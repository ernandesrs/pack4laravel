# PACK4LARAVEL
Este é um estudo de criação de pacotes para Laravel e disponibilização de instalação via COMPOSER
<i>(Study of creating packages for Laravel and providing installation via COMPOSER)</i>

# Instalação
> composer require ernandesrs/pack4laravel

# Configuração
No arquivo /config/app.php do projeto Laravel, no item 'providers' adicione o seguinte:
```php
    ErnandesRS\Pack4Laravel\Pack4LaravelServiceProvider::class
```

Vai ficar assim:
```php
<?php

use Illuminate\Support\Facades\Facade;

return [
    // other fields...

    'providers' => [
        // ... others providers
        App\Providers\RouteServiceProvider::class,

        ErnandesRS\Pack4Laravel\Pack4LaravelServiceProvider::class
    ],
    
    // other fields...
];
```

# Uso
Acesse: <b>http://127.0.0.1:8000/jujubas</b>