<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApplicationListRequest;
use App\Models\ApplicationList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApplicationListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $applicants = ApplicationList::all();
        return view('applicant-list')->with('applicants', $applicants);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */

    public function store(Request $request)
    {

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $imgUrl = Storage::url($imagePath);
        } else {
            $imgUrl = null;
        }

        // Create a new application list entry
        $application = ApplicationList::create([
            'firstname' => $request->input('firstname'),
            'imgUrl' => $imgUrl,
            'phone_number' => $request->input('phone_number'),
            'availability' => $request->input('availability'),
            'status' => $request->input('status'),
            'role_to_apply' => $request->input('role_to_apply'),
            'marks' => $request->input('marks'),
        ]);

        // Return a response
        return response()->json([
            'message' => 'Application created successfully',
            'data' => $application
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApplicationList  $applicationList
     * @return \Illuminate\Http\Response
     */
    public function show(ApplicationList $applicationList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApplicationList  $applicationList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApplicationList $applicationList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApplicationList  $applicationList
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApplicationList $applicationList)
    {
        //
    }

    public function getApplicants(Request $request)
    {
        $sort_by = $request->query('sort_by');
        $applicants = ApplicationList::query();

        switch ($sort_by) {
            case 'best_results':
                $applicants->orderBy('marks', 'desc');
                break;
            case 'surname':
                $applicants->orderBy('firstname');
                break;
            case 'role':
                $applicants->orderBy('role_to_apply');
                break;

            default:
                $applicants->orderBy('created_at', 'desc');
                break;
        }

        $applicants = $applicants->get();

        return view('applicant-list', compact('applicants'));
    }
}
