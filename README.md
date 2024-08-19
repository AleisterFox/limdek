# 

* git diff --name-only HEAD HEAD~1

# How to deploy

* Copy all folders except public in a custom folder e.g(limdek)
* Inside the folder create a public folder and copy build/* files
* Copy public/* content in the root directory
* Copy the following for the index.php

```php
<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));


// Register the Composer autoloader...
require __DIR__.'/limdek/vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/limdek/bootstrap/app.php')
    ->handleRequest(Request::capture());

```

And add the following contento for .httaccess

```php
<IfModule mod_rewrite.c>
    RewriteEngine On

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)/$ /$1 [L,R=301]

    # Handle Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]

    # Ensure Authorization Header Is Passed To The Backend...
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
</IfModule>
```


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=limdeckc_dev
DB_USERNAME=limdeckc_root
DB_PASSWORD=jPhjAav)586g