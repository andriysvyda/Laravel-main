<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Models\Competitor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class CompetitorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $competitors = Competitor::all();
        $competitions = Competition::all();
        return view('competitor.index', ['competitors' => $competitors, 'competitions' => $competitions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('competitor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): View
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'sex' => 'required|max:255',
            'age' => 'required|integer|min:0',
            'country' => 'required|max:255',
        ]);

        if ($validated) {
            $competitor = Competitor::create(
                $request->all(['name', 'sex', 'age', 'country', 'competition_id'])
            );
        }

        return view(
            'competitor.store',
            ['competitor' => $competitor]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $competitor = Competitor::find($id);
        if (!isset($competitor))
        {
            return abort(404);
        }
        return view('competitor.show', ['competitor' => $competitor]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $competitor = Competitor::find($id);
        if (!isset($competitor))
        {
            return abort(404);
        }
        return view(
            'competitor.edit',
            ['competitor' => $competitor]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): View
    {
        $competitor = Competitor::find($id);
        if (!isset($competitor))
        {
            return abort(404);
        }
        $competitor = Competitor::find($id);
        $validated = $request->validate([
            'name' => 'required|max:255',
            'sex' => 'required|max:50',
            'age' => 'required|integer|min:0',
            'country' => 'required|max:255',
        ]);
        if ($validated) {
            $competitor->name = $request->input('name');
            $competitor->sex = $request->input('sex');
            $competitor->age = $request->input('age');
            $competitor->country = $request->input('country');
            $competitor->competition_id = $request->input('competition_id');
            $competitor->save();
        }

        return view('competitor.update', ['competitor' => $competitor]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): View
    {
        $competitor = Competitor::find($id);
        if (!isset($competitor))
        {
            return abort(404);
        }
        $competitor->delete();
        return view(
            'competitor.destroy',
            ['competitor' => $competitor]
        );
    }
}
