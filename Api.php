<?php
class Api
{
    protected string $url;

    public function __construct(string $url){
        $this->url = $url;
    }

    public function post($parameters = array())
    {

        // create a unique hexadecimal ID for the user that's based on their email address.
        $unique_id = bin2hex($parameters['email']);
        $parameters['unique_id'] = $unique_id;

        $options = Data::pack($parameters);

        $context  = stream_context_create($options);
        $result = file_get_contents($this->url,false, $context);
        if ($result === FALSE) {
            echo 'an error occurred!';
             }

        var_dump($result);
    }
}
