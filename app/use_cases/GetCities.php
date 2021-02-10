<?php

class GetCities extends Controller
{
    /**
     * get_cities
     *
     * @param  mixed $data
     * @param  mixed $key
     * @return void
     */
    public static function get_cities()
    {
        $data = GetRealEstate::get_real_estate();

        return FiltersRealEstate::unique_multidim_array( $data, 'Ciudad' );
    } # End method get_cities

} # End class GetCities
