<?php

namespace Learn\Api\Model;

class  Hello implements \Learn\Api\Api\HelloInterface

{
    /**
     * inheritDoc
     * @param String $name
     * @return string
     */
    public function hello(string $name){
        return "hello, " . $name;
    }
}
