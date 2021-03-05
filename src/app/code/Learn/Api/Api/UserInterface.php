<?php

namespace Learn\Api\Api;

use Learn\Api\Api\Data\HelloUserInterface;

interface UserInterface {

    /**
     * Hello Api
     *
     * @param string $name
     * @return string
     */
    public function userInterface(string $name);

    /**
     * @return HelloUserInterface
     */
    public function getUser();
}
