<?php

namespace Learn\Api\Api;

interface HelloInterface {

    /**
     * Hello Api
     *
     * @param String $name
     * @return String
     */
    public function hello(string $name);
}
