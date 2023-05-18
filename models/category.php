<?php

class category {
    public $name;
    public $icon;

    /* puoi unire la definizione di "public" dentro le parentesi di
    function__construct(public $name, public $icon) senza underscore _ */
    function __construct($_name, $_icon) 
    {
        $this->name = $_name;
        $this->icon = $_icon;
    }
}