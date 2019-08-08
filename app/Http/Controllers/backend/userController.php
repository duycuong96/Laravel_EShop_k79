<?php namespace App\Http\Controllers\backend;
use App\Http\Requests\{AddUserRequest,EditUserRequest};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class userController extends Controller {
    function getUser() {
        return view('backend.user.listuser');
    }

    function getAddUser() {
        return view('backend.user.adduser');
    }

    function postAddUser(AddUserRequest $r) {

    }

    function geteditUser() {
        return view('backend.user.edituser');
    }

    function postEditUser(EditUserRequest $r) {

    }
}
