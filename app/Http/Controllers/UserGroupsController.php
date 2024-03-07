<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class UserGroupsController extends Controller
{

     public function index(){

         $this->data['groups'] = Group::all();

        return view('groups/groups', $this->data);
    }
}