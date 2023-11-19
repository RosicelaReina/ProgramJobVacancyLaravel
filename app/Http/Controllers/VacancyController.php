<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;



use Illuminate\Http\Request;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacancies = Vacancy::get();
        return view('admin.vacancy.AdminVacancyView', ['vacancies' => $vacancies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.vacancy.CreateVacancy', ['vacancy' => null]);
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
            'visibility' => 'required',
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
                'visibility' => $request->visibility
            ]
        );

        // dd($request);
        return redirect()->route('vacancy.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vacancy $vacancy)
    {
        return view('admin.vacancy.ShowVacancy', ['vacancy' => $vacancy]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacancy $vacancy)
    {
        return view('admin.vacancy.EditVacancy', ['vacancy' => $vacancy]);
    }

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
            'visibility' => 'required',
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
                'visibility' => $request->visibility
            ]
        );
        return redirect()->route('vacancy.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacancy $vacancy)
    {
        $vacancy->delete();
        return redirect()->route('vacancy.index');
    }
}
