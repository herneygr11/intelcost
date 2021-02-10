<?php

    # load configurations
    require 'config/configurations.php';

    # Load Connection
    require 'providers/Connection.php';

    # AutoLoad
    spl_autoload_register(function($nameClass){
        require 'library/' . $nameClass . '.php';
    });
