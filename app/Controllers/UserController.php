<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function home()
    {
        return view('beranda');
    }

    public function infoKegiatan()
    {
        return view('infoKegiatan');
    }

    public function dataSiswa()
    {
        return view('dataSiswa');
    }
}
