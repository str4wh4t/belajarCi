<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Jenssegers\Blade\Blade;

class Dashboard extends CI_Controller
{
    public function index()
    {
        $views = APPPATH . DIRECTORY_SEPARATOR . 'views';
        $cache = APPPATH . DIRECTORY_SEPARATOR . 'cache';

        // PBO = Pemrograman Berbasis
        // OOP = Object Oriented Programming
        // RUBY = 

        $blade = new Blade($views, $cache);

        echo $blade->make('backend.Dashboard.index', [])->render();
    }

    public function table()
    {
        $views = APPPATH . DIRECTORY_SEPARATOR . 'views';
        $cache = APPPATH . DIRECTORY_SEPARATOR . 'cache';

        $blade = new Blade($views, $cache);

        echo $blade->make('backend.Dashboard.table', [])->render();
    }
}
