<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id) {
       return $id;
    }
    
    public function home(){
        return 'hello';
    }

public function about(){
return "hello this is about";
}

}
