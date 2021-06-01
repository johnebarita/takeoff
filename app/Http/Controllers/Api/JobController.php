<?php


namespace App\Http\Controllers\Api;


use App\TakeOff\Api\JobApiInterface;

class JobController
{
    public JobApiInterface $bus;

    public function __construct(JobApiInterface $bus)
    {
        $this->bus = $bus;
    }

    public function show()
    {
        return $this->bus->getData(
            'http://shed.test/api/jobs',
            [
            ]);
    }

    public function find()
    {
        return 'teasd';
    }
}
