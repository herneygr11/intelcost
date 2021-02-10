<?php

class GetRealEstate extends Controller
{
    /**
     * get_real_estate
     *
     * @return void
     */
    public static function get_real_estate()
    {
        if ( !file_exists( ROUTE_APP .  "/data/real-estate.json" ) ){
            return "";
        }

        $data =  file_get_contents( ROUTE_APP .  "/data/real-estate.json" );

        return json_decode($data, true );
    } # End method get_real_estate

} # End class GetRealEstate
