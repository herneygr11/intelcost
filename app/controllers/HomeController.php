<?php

// Utils
include_once ROUTE_APP . '/use_cases/GetRealEstate.php';
include_once ROUTE_APP . '/use_cases/FiltersRealEstate.php';
include_once ROUTE_APP . '/use_cases/GetCities.php';
include_once ROUTE_APP . '/use_cases/getTypes.php';

class HomeController extends Controller
{
    private $modelGood;
    protected $realEstate = [];

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->modelGood = $this->model('Good');
        $this->realEstate = GetRealEstate::get_real_estate();
    } # End method construct

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $myGoods = array_values( $this->modelGood->getIds() );

        $cities = GetCities::get_cities();
        $types = getTypes::get_types();

        if ( $_GET['city'] || $_GET['type'] ) {
            $this->realEstate = FiltersRealEstate::filter( $_GET['city'], $_GET['type'] );
        }

        $this->layout('home', 'home.php', [
            "real"      => $this->realEstate,
            "myGoods"   => $myGoods,
            "cities"    => $cities,
            "types"     => $types,
        ]);
    } # End method index

} # End class HomeController
