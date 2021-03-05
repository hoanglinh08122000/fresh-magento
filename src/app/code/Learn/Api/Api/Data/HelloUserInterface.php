<?php

namespace Learn\Api\Api\Data;

interface HelloUserInterface{
    const ID = "id";
    const FIRSTNAME = "firstname";
    const LASTNAME = "lastname";

    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $value
     * @return void
     */
    public function setId(int $value);

    /**
     * @return string
     */
    public function getFirstname();

    /**
     * @param string $value
     * @return void
     */
    public function setFirstname(string $value);

    /**
     * @return string
     */
    public function getLastname();

    /**
     * @param string $value
     * @return void
     */
    public function setLastname(string $value);
}
