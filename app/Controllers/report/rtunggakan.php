<?php

namespace App\Controllers\report;


use App\Controllers\baseController;

class rtunggakan extends baseController
{

    protected $sesi_user;
    public function __construct()
    {
        $sesi_user = new \App\Models\global_m();
        $sesi_user->ceksesi();
    }


    public function index()
    {
        $data = new \App\Models\report\rtunggakan_m();
        $data = $data->data();
        return view('report/rtunggakan_v', $data);
    }
}
