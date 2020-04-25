<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
        ]);
        
        Group::create($request->all());

        return redirect(route('home'));
    } 

    public function show(Group $group) 
    {
        $groups = \App\Group::all();
        return view('group.show', [
            'group' => $group,
            'groups' => $groups
        ]);
    }
}
