<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExemplarController extends Controller
{
    public function exemplar($id) {
        return "exemplar id: " . $id;
    }

    public function copies() {
        return "copies";
    }

    public function exemplaire($id) {
        return "exemplaire id: " . $id;
    }

    public function add() {
        return "add";
    }

    public function update($id) {
        return "update id: " . $id;
    }

    public function delete($id) {
        return "delete id: " . $id;
    }
}
