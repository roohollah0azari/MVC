<?php

namespace App\Controllers;

class SeriesController
{
    public function index()
    {
        return "Index Page";
    }

    public function serie($slug)
    {
     return "Series Page";    
    }

    public function episode($slug , $id)
    {
        return "Episode Page";
    }
}