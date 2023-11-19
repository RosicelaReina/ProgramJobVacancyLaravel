<?php

namespace App\Http\Controllers;






use App\Models\Professional;
use Illuminate\Http\Request;

class ProfessionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professionals = Professional::get();
        //dd($professionals);
        return view('admin.professional.AdminProfessionalView', ['professionals' => $professionals]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.professional.CreateProfessional', ['professional' => null]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',

        ]);

        Professional::create(
            [
                // 'id'=> $request->id,
                'date' => $request->date,

            ]
        );

        // dd($request);
        return redirect()->route('professional.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Professional $professional)
    {
        return view('admin.professional.ShowProfessional', ['professional' => $professional]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professional $professional)
    {
        return view('admin.professional.EditProfessional', ['professional' => $professional]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Professional $professional)
    {
        $request->validate([
            'date' => 'required',

        ]);

        //dd($request->requeriments);
        $professional->update(
            [
                'date' => $request->date,

            ]
        );
        return redirect()->route('professional.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professional $professional)
    {
        $professional->delete();
        return redirect()->route('professional.index');
    }
}
