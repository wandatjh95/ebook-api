<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller 
{
    public function me()
    {
        return
        [
            "NIS" => "3103118138",
            "Name" => "Wanda Tri Jhuliana",
            "Gender" => "Perempuan",
            "Phone" => "083843023051",
            "Kelas" => "XII RPL 4"
        ];
    }
}