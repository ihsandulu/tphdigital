<?php

namespace App\Controllers\master;


use App\Controllers\BaseController;

class mdivisi extends BaseController
{

    protected $sesi_user;
    public function __construct()
    {
        $sesi_user = new \App\Models\global_m();
        $sesi_user->ceksesi();
    }


    public function index()
    {
        $data = new \App\Models\master\mdivisi_m();
        $data = $data->data();
        return view('master/mdivisi_v', $data);
    }
}
