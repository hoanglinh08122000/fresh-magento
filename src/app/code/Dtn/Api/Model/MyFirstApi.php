<?php

namespace Dtn\Api\Model;

class MyFirstApi implements \Dtn\Api\Api\MyFirstApiInterface
{

    public function customGetFunction()
    {
        return "abc";
    }
}
