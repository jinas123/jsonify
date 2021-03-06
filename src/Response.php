<?php

namespace Jinas\Jsonify;

class Response
{
    /**
     * json.
     *
     * @param mixed $data
     *
     * @return void
     */
    public static function json($data)
    {
        return json_encode($data, \JSON_PRETTY_PRINT);
    }
}
