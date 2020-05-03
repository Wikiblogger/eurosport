<?php

namespace App\Http\Controllers;

use App\persons;
use Faker\Provider\Person;
use Illuminate\Http\Request;

class admincontroller extends Controller
{


    public function index(){
        $persons = persons::paginate(5);
        return view('welcome', compact('persons'));
    }


    public function create(){
        return view('create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'uname'=>'required',
            'email'=>'required',
            'pwd'=>'required'
        ]);
        $person = new persons();
        $person->name = $request->uname;
        $person->email = $request->email;
        $person->password = $request->pwd;
        $person->save();

        return redirect(route('home'))->with('successMsg', 'Person Successfully Added');
    }

    public function edit($id){
        $person = persons::find($id);
        return view('edit', compact('person'));
    }

    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'uname'=>'required',
            'email'=>'required',
            'pwd'=>'required'
        ]);
        $person =  persons::find($id);
        $person->first_name	 = $req->uname;
        $person->email = $req->email;
        $person->password = $req->pwd;
        $person->save();

        return redirect(route('home'))->with('successMsg', 'Person Successfully Added');
    }

    public function delete($id){
        persons::find($id)->delete();
        return redirect(route('home'))->with('successMsg', 'User delete successfully');
    }


}
