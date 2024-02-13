<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

use Illuminate\Support\Carbon;

class MainController extends Controller
{
    public function index()
    {
        
        $today = Carbon::today();
        $tomorrow = Carbon::tomorrow();

        $trains = Train::whereDate('orario_di_partenza', $today)->get();
        $trains = Train::whereDate('orario_di_arrivo', $tomorrow)->get();

        return view('pages.index', compact('trains'));
    }
}