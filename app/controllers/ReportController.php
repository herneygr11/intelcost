<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

include_once ROUTE_APP . '/use_cases/GetRealEstate.php';
include_once ROUTE_APP . '/use_cases/FiltersRealEstate.php';
include_once ROUTE_APP . '/use_cases/GetCities.php';
include_once ROUTE_APP . '/use_cases/getTypes.php';

class ReportController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $cities = GetCities::get_cities();
        $types = getTypes::get_types();

        $this->layout('home', 'report/index.php', [
            "cities"    => $cities,
            "types"     => $types,
        ]);
    } # End method index

    /**
     * export
     *
     * @return void
     */
    public function export()
    {
        if ( !isset($_POST) ) {
            $this->index();
        }

        if ( $_POST['city'] || $_POST['type'] ) {
            $goods = FiltersRealEstate::filter( $_POST['city'], $_POST['type'] );
        }else{
            $goods = GetRealEstate::get_real_estate();
        }


        $this->view('report/export', [
            'goods'  => $goods
        ]);
    } # End method export

} # End class ReportController
