<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::where("state", "LIKE", "Pendiente")->get();
        return view("home.IndexView", ["vacancies" => $vacancies]);
    }

    public function getVacanciesByCharge(Request $request)
    {



        $charge = '%' . $request->charge . '%';

        $vacancies = Vacancy::where("charge", "LIKE", $charge)->get();
        return view("home.IndexView", ["vacancies" => $vacancies]);
        //dd($request);


    }
}
