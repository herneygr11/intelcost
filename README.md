<p align="center">

  <h3 align="center">Intel-Cost</h3>

</p>

<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary>Tabla de contenido</summary>
  <ol>
    <li>
      <a href="#sobre-el-proyecto">Sobre el proyecto</a>
      <ul>
        <li><a href="#tecnologías">Tecnologías</a></li>
        <li><a href="#configuraciones">Configuraciónes</a></li>
        <li><a href="#servidor-local">Servidor local</a></li>
      </ul>
    </li>
  </ol>
</details>

<!-- ABOUT THE PROJECT -->
## Sobre el Proyecto
Intel-Cost : Bienes

### Tecnologías

* [HTML5](https://developer.mozilla.org/es/docs/Web/HTML)
* [CSS3](https://developer.mozilla.org/es/docs/Web/CSS)
* [JavaScript](https://developer.mozilla.org/es/docs/Web/JavaScript)
* [PHP](https://www.php.net/docs.php)

### Configuraciones

1. Cambiar el nombre de la carpeta raíz en public/.htaccess,
Recomendación dejar por defecto de este repositorio
```htaccess
    RewriteBase /CARPETA_RAÍZ/public/
```

2. Definir la ROUTE_URL en el app/config/configurations.php

```php
    define('ROUTE_URL', 'http://localhost/intelcost/');
```

3. Ejecutar el script de la base de datos el script esta app/database/script.sql

4. Cambiar variables de entorno en app/config/configurations.php

```php

    # Database access settings
    define('DB_DRIVER', '__DRIVER__');
    define('DB_HOST', '__HOST__');
    define('DB_NAME', '__NAME__');
    define('DB_CHARSET', '__CHARSET__');
    define('DB_USER', '__USER__');
    define('DB_PASSWORD', '__PASSWORD__');

    # -----------------------------------

    # Database access settings - Example
    define('DB_DRIVER', 'mysql');
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'intelcost_goods');
    define('DB_CHARSET', 'utf8');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
```

### Servidor local

* Xampp linux x64-8.0.2-0