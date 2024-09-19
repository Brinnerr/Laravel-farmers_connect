<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("home");
    }
    
    
    public function about()
    {
        return view("pages.about");
    }public function contact()
    {
        return view("pages.contact");
    }
    public function products()
    {
        return view("pages.product");
    }
    public function service()
    {
        return view("pages.services");
    }
    

    
}
