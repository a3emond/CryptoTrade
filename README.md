# **CRYPTO TRADE PROJECT**

## Running the Project

- Build and Start Containers

``` bash
docker-compose up --build -d
```

## Access the project:
- http://localhost/ → Serves PHP app.
- http://localhost:8080/ → phpMyAdmin (DB management)

## Install new dependencies via composer:

### Verify Composer installation:

``` bash
docker exec -it crypto_php composer --version
```

### Add a New Dependency
To install a new PHP package, use:

``` bash
docker exec -it crypto_php composer require vendor/package-name
```

- For example, to install `PHPMailer`:

``` bash
docker exec -it crypto_php composer require phpmailer/phpmailer
```

### Reinstall Dependencies:
``` bash
docker exec -it crypto_php composer install
```

## Dump Autoload After Changes
- Whenever you add new files inside the src/ folder, regenerate Composer’s autoload files:

``` bash
docker exec -it crypto_php composer dump-autoload
```

## How to Use PSR-4 Autoloading in Your Code
Inside index.php or any other PHP script, autoload everything automatically by including Composer's autoloader:

📂 src/index.php

``` php
<?php

require_once __DIR__ . '/../vendor/autoload.php'; //  Load classes automatically

use CryptoTrade\Controllers\UserController;

$controller = new UserController();
echo $controller->index();
```
**No need to manually require files anymore!**