<?php
class Data{

    protected static function sanitize($parameters = array()): array {
        /* the data should be stripped and cleaned to eliminate any possibilities of SQL injections
        or invalid characters before the data gets posted. */

        foreach($parameters as $key => $value) {
            //echo "\r\nPOST parameter '$key' has '$value'";
            $parameters[$key] = filter_var($value,FILTER_SANITIZE_STRING);
            //echo "\r\nPOST parameter '$key' has '$parameters[$key]' after sanitizing.";
        }
        return $parameters;
    }

    public static function pack($parameters){

        $safe_params = self::sanitize($parameters);
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($safe_params)
            )
        );
        return $options;
    }

}
