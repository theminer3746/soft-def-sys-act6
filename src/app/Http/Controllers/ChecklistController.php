<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChecklistController extends Controller
{
    public function index()
    {
        return view('checklist')->with('items', DB::table('checklist')->select(['name'])->get());
    }

    public function create(Request $request)
    {
        DB::table('checklist')->insert(['name' => $request->name]);

        return redirect()->back();
    }

    public function delete()
    {
        DB::table('checklist')->delete();

        return redirect()->back();
    }
}
