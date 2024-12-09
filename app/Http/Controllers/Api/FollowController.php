<?php

namespace App\Http\Controllers\Api;

use App\Models\Follow;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $applicationId)
    {
        return response()->json(Application::find($applicationId)->follows, 200);
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
    public function store(Request $request, string $applicationId)
    {
        $follow = Follow::create([
            'application_id' => (int)$applicationId,
            'news' => $request->news,
        ]);
        return response()->json($follow, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $applicationId, string $newsId)
    {
        return response()->json(Application::find($applicationId)->follows[(int)$newsId - 1],200);
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
    public function update(Request $request, string $applicationId, string $newsId)
    {
        $follow = Application::find($applicationId)->follows[(int)$newsId - 1];

        $follow->update([
            'application_id' => $request-> applications_id,
            'news' => $request->news,
        ]);

        return response()->json($follow, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $applicationId, string $newsId)
    {
        Application::find($applicationId)->follows[(int)$newsId - 1]->delete();
    }
}
