<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateTeamRequest;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::paginate(config('pagination.count'));
        return view('admin.teams.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teams.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request)
    {
        $data = $request->validated();
        $image = $request->image;
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('teams', $imageName, 'public');
        $data['image'] = $imageName;
        Team::create($data);
        return redirect()->route('admin.teams.index')->with('success', __('keywords.create_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        return view('admin.teams.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view('admin.teams.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            Storage::delete("public/teams/$team->image");
            $image = $request->image;
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('teams', $imageName, 'public');
            $data['image'] = $imageName;
        }
        $team->update($data);
        return redirect()->route('admin.teams.index')->with('success', __('keywords.update_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        $team->delete();
        Storage::delete("public/teams/$team->image");
        return redirect()->route('admin.teams.index')->with('success', __('keywords.delete_successfully'));
    }
}