<?php

    namespace App\Http\Controllers;

    use App\Models\Doctors;
    use Illuminate\View\View;

    class DoctorsDashboardController extends Controller
    {
        public function index(): View
        {
            $doctors = (new Doctors)->where('is_active', '=', true)->get();

            return view("doctors.index", ['doctors' => $doctors]);
        }
    }
