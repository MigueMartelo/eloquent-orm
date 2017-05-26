<?php

namespace EloquentORM\Http\Controllers;

use EloquentORM\User;

use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function eloquentAll(){
    	$users = User::all();
    	$title = "Todos los usuarios (ALL)";
    	return view('query.methods', compact('title', 'users'));
    }

    public function eloquentGet($gender){
        $users = User::where('gender', $gender)->get();
        $title = "Lista de usuarios (GET)";
        return view('query.methods', compact('title', 'users'));
    }

    public function eloquentGetCustom(){
        $users = User::where('gender', 'f')->get(['id', 'name', 'biography']);
        $title = "Lista de usuarios (GET Custom - con Array)";
        return view('query.methods', compact('title', 'users'));
    }

    public function eloquentDelete($id){
        $user = User::find($id);
        $user->delete();
        return view('pages.delete');
    }

    public function eloquentPluck(){
        $title = "Lista de usuarios para Select (PLUCK)";
        $users = User::OrderBy('name', 'ASC')->pluck('name', 'id');

        return view('query.pluck', compact('title', 'users'));
    }

    public function eloquentFirstLast(){
        $title = "Primer y último registro (FIRST - LAST)";
        $first = User::first();
        $all = User::all();
        $last = $all->last();

        return view('query.first-last', compact('title', 'first', 'last'));
    }

}
