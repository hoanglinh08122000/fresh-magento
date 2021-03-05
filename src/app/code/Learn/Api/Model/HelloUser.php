<?php

namespace Learn\Api\Model;

class  HelloUser implements \Learn\Api\Api\HelloInterface
{
    protected $userFactory;

    public function __construct(
        \Learn\Api\Model\Data\UserFactory $userFactory
    ){
        $this->userFactory = $userFactory;
    }

    public function getUser(){
        $user = $this->userFactory->create();
        $user->setId(99);
        $user->setFirstname("Hoang");
        $user->setLastname("Linh");

        return $user;
    }

    /**
     * @param String $name
     * @return String
     */
    public function hello(string $name)
    {
        return "Hello ". $name;
    }
}
