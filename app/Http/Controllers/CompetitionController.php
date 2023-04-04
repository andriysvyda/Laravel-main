<?php
//
//namespace App\Http\Controllers;
//
//use App\Models\Competition;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
//
//class CompetitionController extends Controller
//{
//    public function show(int $id) {
//        $competitors = DB::table('competitors')
//            ->leftJoin('competitions', 'competitors.competition_id', '=', 'competitions.id')
//            ->where('competitions.id', '=', $id)
//            ->get();
//        return view('competitions.show', ['competitors' => $competitors]);
//    }
//}


namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompetitionController extends Controller
{
    public function show(int $id)
    {
        $competitors = DB::table('competitors')
            ->leftJoin('competitions', 'competitors.competition_id', '=', 'competition.id')
            ->where('competitions.id', '=', $id)
            ->get();
        return view('competitions.show', ['competitors' => $competitors]);
    }
}
