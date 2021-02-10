<?php

class getTypes extends Controller
{
    /**
     * get_types
     *
     * @param  mixed $data
     * @param  mixed $key
     * @return void
     */
    public static function get_types()
    {
        $data = GetRealEstate::get_real_estate();

        return FiltersRealEstate::unique_multidim_array( $data, 'Tipo' );
    } # End method get_types

} # End class getTypes
