<?php

namespace App\Http\Controllers;

use App\Lead;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class LeadController extends Controller
{

    private $validations;

    public function __construct(){

        $this->validations = [
            'name' => 'required',
            'email' => 'required|email',
            'dob' => 'required',
            'phone' => 'required',
            'package' => 'sometimes',
        ];

    }

    public function index()
    {
        $leads = Lead::query()->where('branch_id', 1)->orderByDesc('id')->get();

        return Inertia::render('Leads/Index', [
            'leads' => $leads,
        ]);
    }

    public function view(Lead $lead)
    {

        $lead->load('reminders');

        return Inertia::render('Leads/LeadView', [
            'lead-prop' => $lead,
        ]);
    }

    public function create()
    {
        return Inertia::render('Leads/LeadAdd');
    }

    public function store(Request $request)
    {

        $postData = $this->validate($request, $this->validations);

        $package = "";

        if ($request->has('package')) {
            $package = $request->input('package');
        }

        $dob = Carbon::parse($postData['dob']);
        $age = $dob->age;

        Lead::create([
            'name' => $postData['name'],
            'email' => $postData['email'],
            'dob' => $postData['dob'],
            'phone' => $postData['phone'],
            'branch_id' => 1,
            'age' => $age,
            'user_id' => Auth::user()->id,
            'package' => $package,
        ]);

        return redirect()->route('lead.list');
    }

    public function update(Request $request)
    {
        $rules = $this->validations;
        $rules['id'] = 'required|exists:leads';
        $postData = $this->validate($request, $rules);

        $postData['age'] = Carbon::parse($postData['dob'])->age;

        $lead = Lead::where('id', $postData['id'])->update($postData);

        return redirect()->route('lead.view', ['lead' => $postData['id']]);
    }


}


