<?php

class Utils
{
    /**
     * Every model needs a database connection, passed to the model
     * @param object $db A PDO database connection
     */
    function __construct() {
        
    }

    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controller (see application/controller/songs.php for more)
     */
    public function baseUrl()
    {
        return $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    }
}
