<?php

namespace App\Http\Controllers;

use App\Attendee;
use App\Http\Requests\SubmissionRequest;
use App\Submission;
use Illuminate\Http\Request;

class SubmissionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['index']]);
    }

    public function index()
    {
    }

    public function store_company(SubmissionRequest $request)
    {
        $data               = $request->except(['persons']);
        $data['ddv']        = $data['ddv'] == "true" ? 1 : 0;
        $data['self_payer'] = 0;
        $submission         = Submission::create($data);

        foreach ($request->persons as $person) {
            $person = [
                'name'     => $person['ime'],
                'email'    => $person['email'],
                'phone'    => $person['telefon'],
                'function' => $person['funkcija'],
            ];
            $submission->attendees()->create($person);
        }

        return "success";
    }

    public function store_person(SubmissionRequest $request)
    {
        Submission::create(array_merge($request->all(), ['self_payer' => 1]));

        return "success";
    }
}
