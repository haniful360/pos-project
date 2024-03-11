<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session as FacadesSession;

class UserGroupsController extends Controller
{

     public function index(){

        $groups = Group::all();

        return view('groups/groups', compact('groups'));
    }

    public function create(){

        return view('groups/create');
    }

    public function store(Request $request){

        $formData= $request->all();

        if(Group::create($formData)){

         	session()->flash('message', 'Group created successfully');
         
        }
        return redirect()->to('/groups');
    }


    public function destroy($id)
    {
    	if( Group::find($id)->delete() ) {

    		session()->flash('message', 'Group Deleted Successfully');
    	}

    	return redirect()->to('groups');
    }

}
