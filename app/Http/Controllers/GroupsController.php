<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

//Controls Group functions
class GroupsController extends Controller
{
    public function store(Request $request)
    {
        //check if the group name is not null
        //group name can be 50 character max
        $request->validate([
            'name' => 'required|max:50',
        ]);
        
        Group::create($request->all());

        return redirect(route('home'));
    } 

    public function show(Group $group) 
    {
        //shows group info on clicking group name
        $groups = \App\Group::all();
        return view('group.show', [
            'group' => $group,
            'groups' => $groups
        ]);
    }
}
