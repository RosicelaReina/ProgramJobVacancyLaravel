<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;



use App\Models\Postulate;
use Illuminate\Http\Request;

class PostulateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postulate = Postulate::get();
        return view('admin.Postulate.AdminPostulateView', ['postulates' => $postulate]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.postulate.CreatePostulate', ['postulate' => null]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'charge' => 'required',
            'city' => 'required',
            'company' => 'required',
            'salary' => 'required',
            'typeContract' => 'required',
            'title' => 'required',
            'requeriments' => 'required',
            'state' => 'required',

        ]);

        Vacancy::create(
            [
                // 'id'=> $request->id,
                'charge' => $request->charge,
                'city' => $request->city,
                'company' => $request->company,
                'salary' => $request->salary,
                'typeContract' => $request->typeContract,
                'title' => $request->title,
                'requeriments' => $request->requeriments,
                'state' => $request->state,
            ]
        );

        // dd($request);
        return redirect()->route('postulate.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Postulate $postulate)
    {
        return view('admin.postulate.ShowPostulate', ['postulate' => $postulate]);
    }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vacancy $vacancy)
    {
        $request->validate([
            'charge' => 'required',
            'city' => 'required',
            'company' => 'required',
            'salary' => 'required',
            'typeContract' => 'required',
            'title' => 'required',
            'requeriments' => 'required',
            'state' => 'required',

        ]);

        //dd($request->requeriments);
        $vacancy->update(
            [
                'charge' => $request->charge,
                'city' => $request->city,
                'company' => $request->company,
                'salary' => $request->salary,
                'typeContract' => $request->typeContract,
                'title' => $request->title,
                'requeriments' => $request->requeriments,
                'state' => $request->state,

            ]
        );
        return redirect()->route('postulate.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Postulate $postulate)
    {
        $postulate->delete();
        return redirect()->route('postulate.index');
    }
}
