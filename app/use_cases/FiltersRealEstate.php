<?php

class FiltersRealEstate extends Controller
{
    /**
     * unique_multidim_array
     *
     * @param  mixed $array
     * @param  mixed $key
     * @return void
     */
    public static function unique_multidim_array($array, $key)
    {
        $temp_array = array();
        $i = 0;
        $key_array = array();

        foreach ($array as $val) {
            if (!in_array($val[$key], $key_array)) {
                $key_array[$i] = $val[$key];
                $temp_array[$i] = $val;
            }
            $i++;
        }
        return $temp_array;
    } # End method unique_multidim_array

    /**
     * filter_by_value
     *
     * @param  mixed $array
     * @param  mixed $index
     * @param  mixed $value
     * @return void
     */
    public static function filter_by_value($array, $index, $value)
    {
        if (is_array($array) && count($array) > 0) {
            foreach (array_keys($array) as $key) {
                $temp[$key] = $array[$key][$index];

                if ($temp[$key] == $value) {
                    $newarray[$key] = $array[$key];
                }
            }
        }
        return $newarray;
    } # End method filter_by_value

    /**
     * get_by_id
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return void
     */
    public static function get_by_id( $id, $data )
    {
        $keyArray = array_search($id, array_column($data, 'Id'));

        if ( !is_null($keyArray) ){
            return $data[$keyArray];
        }
    } # End method get_by_id

    /**
     * filter
     *
     * @param  mixed $city
     * @param  mixed $type
     * @return void
     */
    public static function filter( $city = '', $type = '')
    {
        $filterByCity = [];
        $filterByType = [];

        $realEstate = GetRealEstate::get_real_estate();

        if ( $city ) {
            $filterByCity = FiltersRealEstate::filter_by_value( $realEstate,'Ciudad', $city );
        }

        if ( $type ) {
            $filterByType = FiltersRealEstate::filter_by_value( $realEstate,'Tipo', $type );
        }

        return FiltersRealEstate::unique_multidim_array( array_merge($filterByCity, $filterByType), 'Id' );
    } # End method filter

} # End class FiltersRealEstate
