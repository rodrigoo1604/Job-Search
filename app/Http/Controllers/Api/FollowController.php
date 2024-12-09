<?php

namespace App\Http\Controllers\Api;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        return response()->json(Application::find($id)->follow, 200);
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
    public function store(Request $request, $applicationId)
    {
        //
        $validated = $request->validate([
            'news' => 'required|array'
        ]);

        $application = Application::find($applicationId);

        if(!$application){
            return response()->json([
                'message' => 'The application where follow is requested does not exist'
            ],404);
        }

        $followsData = collect($validated['news'])->map(function ($newsItem) use ($application) {
            return [
                'application_id' => $application->id,
                'news' => $newsItem,
            ];
        });

        $application->follows()->createMany($followsData);

        return response()->json([
            'message' => 'News added successfully',
            'application' => $application->load('follows'),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $applicationId, string $newsId)
    {
        return response()->json(Application::find($applicationId)->follow[(int)$newsId - 1],200);
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
        $follow = Application::find($applicationId)->follow[(int)$newsId - 1];

        $follow->update([
            'applications_id' => $request-> applications_id,
            'news' => $request->news,
        ]);

        return response()->json($follow, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $applicationId, string $newsId)
    {
        Application::find($applicationId)->follow[(int)$newsId-1]->delete();
    }
}
