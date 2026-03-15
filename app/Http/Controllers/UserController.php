<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function subscription() {
        return "subscription";

    }

    public function connect() {
        return "connect";

    }

    public function profils() {
        return "profils";
    }
    public function profil($id) {
        return "profil id: " . $id;

    }
    public function personalProfil() {
        return "personalProfil";
    }
    //
}
