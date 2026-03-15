<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BorrowController extends Controller
{
    

    public function borrowing() {
        return "borrowing";

    }

    public function return($id) {
        return "return id: " . $id;

    }

    public function borrow($id) {
        return "borrow id: " . $id;

    }
}
