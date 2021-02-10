<?php

/*
    * Class Controller main
    * Load models and views
*/
class Controller
{

    # Load model
    public function model($model)
    {
        #Load
        require '../app/models/' . $model . '.php';

        # Instantiate model
        return new $model;
    } # End method model

    # Load view
    public function view($view, $data = [], $validation = [])
    {
        $routerView = '../app/views/modules/' . $view . '.php';
        # Check if the method exists
        if (file_exists($routerView)) {

            #Load
            require $routerView;
        } else {

            # Error 404
            die('La vista no existe : 404 -> ' . $view);
        }
    } # End method view

    /**
     * layout
     *
     * @param  String $layout
     * @param  String $view
     * @param  mixed  $data
     * @param  String $validation
     * @return void
     */
    public function layout( String $layout, String $view = "home", $data = [], String $validation = '')
    {
        $routerLayout = '../app/views/layouts/' . $layout . '.php';
        # Check if the method exists
        if (file_exists($routerLayout)) {
            #Load
            require $routerLayout;
        } else {
            # Error 404
            die('La vista no existe : 404 -> ' . $view);
        }
    } # End method view

} # End class Controller
