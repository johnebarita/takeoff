<?php


namespace App\TakeOff\Api;


use Illuminate\Support\Facades\Http;

class JobApiRepository implements JobApiInterface
{

    public function getData($url, array $params = array())
    {
        return Http::get($url);
    }
}
