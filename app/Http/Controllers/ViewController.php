<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

/**
 * Description of ViewController
 *
 * @author ixus3r
 */
class ViewController extends Controller {

    public function view($page = null, ...$params) {
       
        return view($page,['param' => $params]);
    }

}
