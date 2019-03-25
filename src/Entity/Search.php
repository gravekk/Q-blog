<?php
/**
 * Created by PhpStorm.
 * User: maciekgrabowski
 * Date: 2019-03-25
 * Time: 13:16
 */

namespace App\Entity;


class Search
{
protected $ask;

public function setAsk($ask){
    return $this->ask = $ask;
}

public function getAsk(){
    return $this->ask;
}
}