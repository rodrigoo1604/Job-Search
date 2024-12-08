<?php

namespace App\Http\Controllers\Api;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = Application::all();
        return response()->json($applications, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    /*public function create()
    {
        //
    }*/

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $application = Application::create([
            'companyName' => $request->companyName,
            'details' => $request->details,
            'finalised' => $request->finalised
        ]);
        $application->save();
        return response()->json($application, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $application = Application::find($id);
        return response()->json($application, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    /*public function edit(string $id)
    {
        //
    }*/

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $application = Application::find($id);

        $application -> update([
            'companyName' => $request->companyName,
            'details' => $request->details,
            'finalised' => $request->finalised
        ]);
        $application->save();
        return response()->json($application, 200);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $application = Application::find($id);
        $application->delete();
    }
}