<?php

namespace App\Controllers;

class CategoryController extends BaseController
{
    public function index(): string
    {
        return view('category/index');
    }

    public function create():string
    {
        return view("category/create");
    }
}
