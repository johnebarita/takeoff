<?php


namespace App\TakeOff\Api;


interface JobApiInterface
{
    public function getData($url, array $params = array());
}
