<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

/**
 * Description of PageController
 *
 * @author ixus3r
 */
class PageController {
    // Add methods to add, edit, delete and show pages
    // create method to create new pages
    // submit the form to this method
    
    // Show a page by slug
    public function show($slug = 'home')
    {
        echo "<pre>";
        print_r($slug);
        echo "</pre>";
       
    }
    public function hide(){
        return __METHOD__;
    }
}
