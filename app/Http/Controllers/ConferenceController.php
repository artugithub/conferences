<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'participant_number' => 'required|integer|min:1',
            'country' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        $conference = new Conference();
        $conference->name = $request->input('name');
        $conference->description = $request->input('description');
        $conference->date = $request->input('date');
        $conference->participant_number = $request->input('participant_number');
        $conference->country = $request->input('country');
        $conference->address = $request->input('address');
        $conference->save();

        return redirect()->route('conferences.show', $conference);
    }

    /**
     * Display the specified resource.
     */
    public function show(Conference $conference)
    {
        return view('show', compact('conference'));
    }

    public function list()
    {
        $conferences = Conference::all();

        return view('list', compact('conferences'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Conference $conference)
    {
        return view('edit', compact('conference'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Conference $conference)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'participant_number' => 'required|integer|min:1',
            'country' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        $conference->name = $request->input('name');
        $conference->description = $request->input('description');
        $conference->date = $request->input('date');
        $conference->participant_number = $request->input('participant_number');
        $conference->country = $request->input('country');
        $conference->address = $request->input('address');
        $conference->save();

        return redirect()->route('conferences.show', $conference);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Conference $conference)
    {
        $conference->delete();

        return redirect()->route('list');
    }
}
