<?php

// Utils
include_once ROUTE_APP . '/use_cases/GetRealEstate.php';
include_once ROUTE_APP . '/use_cases/FiltersRealEstate.php';

class GoodController extends Controller
{
    private $modelGood;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct() {
        $this->modelGood = $this->model('Good');
    } # End method construct

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $goods = $this->modelGood->all();

        $this->layout('home', 'good/index.php', [
            "goods"      => $goods,
        ]);
    } # End method index

    /**
     * save
     *
     * @return void
     */
    public function create()
    {
        if (!isset($_POST)) {
            $this->index();
        }

        $data = FiltersRealEstate::get_by_id( $_POST['id'], GetRealEstate::get_real_estate() );

        $good = [
            "id_real_estate"    => $data["Id"],
            "address"           => $data["Direccion"],
            "city"              => $data["Ciudad"],
            "phone"             => $data["Telefono"],
            "code"              => $data["Codigo_Postal"],
            "type"              => $data["Tipo"],
            "price"             => $data["Precio"],
        ];

        $this->modelGood->save( $good );

        $this->index();
    } # End method create

    /**
     * destroy
     *
     * @return void
     */
    public function destroy()
    {
        $this->modelGood->delete( $_POST['id'] );

        $this->index();
    } # End method destroy

} # End class GoodController
