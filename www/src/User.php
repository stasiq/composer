<?php

namespace Src;

class User
{
    public $name;

    public $phone;

    public function __construct($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
    }
}