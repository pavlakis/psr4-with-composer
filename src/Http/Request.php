<?php

namespace MyApp\Http;

class Request
{
    private $query;

    private $request;

    public function __construct(array $query = array(), array $request = array())
    {
        $this->query = $query;
        $this->request = $request;
    }

    public static function init()
    {
        return new self(
            $_GET,
            $_POST
        );
    }

    public function get($param, $default = null)
    {
        // order being called: GET, POST
        return $this->getQuery($param, $this->getPost($param, $default));
    }

    public function getPost($param, $default = null)
    {
        if (!isset($this->request[$param])) {
            return $default;
        }

        return $this->request[$param];
    }

    public function getQuery($param, $default = null)
    {
        if (!isset($this->query[$param])) {
            return $default;
        }

        return $this->query[$param];
    }
}
 
