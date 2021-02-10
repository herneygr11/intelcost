<?php

/*
    * Map the url
    * 1 - Controller
    * 2 - Method
    * 3 - parameter
*/

class Core
{
    private $currentController = "HomeController";
    private $currentMethod = 'index';
    private $currentParameter = array();

    public function __construct()
    {
        $url = $this->getUrl();

        $controller = ucwords($url[0]);
        # Controllers routes
        $controllerRouter = '../app/controllers/' . $controller . 'Controller.php';

        # Check if the controller exists
        if (file_exists($controllerRouter)) {
            # If controller exists, it is saved as default controller
            $this->currentController = $controller . 'Controller';
            #  Unset ControllerActual
            unset($url[0]);
        }

        # Require the Controller
        require '../app/controllers/' . $this->currentController . '.php';
        $this->currentController = new $this->currentController;

        # ----------- END CONTROLLER -----------


        # Check if the method exists
        if (isset($url[1])) {

            $method = $url[1];

            if (method_exists($this->currentController, $method)) {
                # If method exists, it is saved as default controller
                $this->currentMethod = $method;
                #  Unset ControllerActual
                unset($url[1]);
            }
        }

        # ----------- END METHOD -----------

        # Check if the method exists
        if (isset($url[2])) {
            # Get parameters
            $this->currentParameter  = $url ? array_values($url) : [];
        }


        # Call Callback with parameters
        call_user_func_array([$this->currentController, $this->currentMethod], $this->currentParameter);
    } # End method contruct

    # Map out url
    public function getUrl()
    {
        if (isset($_GET['url'])) {

            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    } # End method getUrl

} # End class Core
