<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\provinces;
use App\Models\people;

class PeopleController extends Controller
{
    function add() {
        $provinces = provinces::all();
        return view("add_edit",compact('provinces'));
    }
    function list() {
        $peoples = people::paginate(1);
        return view("list",compact('peoples'));
    }
    function edit(people $people) {
        $provinces = provinces::all();
        return view("add_edit",compact('people','provinces'));
    }
    function delete($id) {
        people::destroy($id);
        return redirect('list');
    }
    function store(Request $req) {
        // echo "<pre>";
        // dd($req->avatar->getClientOriginalName());
        if($req){
            if($req->id){
                $people = people::find($req->id);
            }else{
                $people = new people();
            }
            $people->name = $req->input('name');
            $people->province_id = $req->input('province');
            $people->avatar=$req->avatar->storeAs('img', $req->avatar->getClientOriginalName());
            $req->avatar->move('img',$req->avatar->getClientOriginalName());
            // $people->avatar = 'img/'.$req->avatar->getClientOriginalName();
            $people->birthday = $req->input('birthday');
            $people->gender = $req->input('gender');
            // echo "<pre>";
            // dd($people);
            $people->save();
        }
        
        return redirect('list');
    }
}