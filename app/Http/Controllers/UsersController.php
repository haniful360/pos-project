<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index(){

        $this->data['users'] = User::all();

        return view('users/users', $this->data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $groups= Group::all();

        $this->data['groups']= Group::arrayForSelect();
        $this->data['mode'] = 'create';
        $this->data['headline'] = 'Add New User';

        // foreach($groups as $group){

        //     $this->data['groups'][$group->id] = $group->title;
        // }

        return view('users.form',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request)
    {
       $formData = $request->all();


       if( User::create($formData)){

         	session()->flash('message', 'User created successfully');

        }
        return redirect()->to('/users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
        $this->data['user'] = User::findOrFail($id);
         $this->data['groups']= Group::arrayForSelect();
         $this->data['mode'] = 'edit';
         $this->data['headline'] = 'Update Information';

        return view('users.form', $this->data);
    }



    /**
     *
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}