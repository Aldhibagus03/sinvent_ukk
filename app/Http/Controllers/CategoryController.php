<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class CategoryController extends Controller
{
    public function index(){
        $categorys = Kategori::all();
        // echo $categorys[0]->deskripsi;
        // return $categorys[0]->deskripsi;
        return view('kategori.demo', ['categorys' => $categorys]);
    }
}
