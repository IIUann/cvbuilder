<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Education;
use App\Models\skill;
use App\Models\Work;
use Illuminate\Http\Request;

class cvbuildController extends Controller
{
    public function showaboutyoupage()
    {
        return view('cvinput.aboutyou');
    }

    public function cv()
    {
        $getCv = About::all();
        $userId = auth()->user()->id;
        $getIdSkills = Skill::where('user_id', $userId)->get();
        $getwork = Work::all();
        $geteducation = Education::all();


        return view('template.cvtemplate', compact('getCv', 'getIdSkills', 'getwork' ,'geteducation'));
    }

    public function showecectionyoupage()
    {
        return view('cvinput.edecation');
    }
    public function showskillpage()
    {
        return view('cvinput.skill');
    }
    public function showworkpage()
    {
        return view('cvinput.work');
    }
    public function showcontactpage()
    {
        return view('cvinput.contact');
    }

    public function createboutyoupage(Request $request)
    {

        $request->validate([
            'firstname'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ]);

        $about = ([
            'firstname' =>  $request->get('firstname'),
            'lastname' =>   $request->get('lastname'),
            'email' =>   $request->get('email'),
            'phone' =>  $request->get('phone'),
            'city' =>  $request->get('city'),
            'major' =>  $request->get('major'),
            'summary' =>  $request->get('summary'),
        ]);
        About::query()->create($about);
        return redirect()->route('edecation');

    }

    public function createedecationpage(Request $request)
    {
        $edu = [
            'university_name' =>  $request->get('university'),
            'university_location' => $request->get('location'),
            'start_date' => $request->get('startdate'),
            'end_date' => $request->get('enddate'),
            'degree' => $request->get('degree'),
            'feild_of_study' => $request->get('field'),
            'user_id' => auth()->user()->id
        ];

        Education::query()->create($edu);
        return redirect()->route('skill');
    }

    public function createskillpage(Request $request)
    {

        $skill = ([
            'Technical' => $request->get('technical'),
            'soft' =>   $request->get('soft'),
            'user_id' => auth()->user()->id


        ]);
        skill::query()->create($skill);
        return redirect()->route('work');

    }
    public function createworkpage(Request $request)
    {
        $work = [
            'position' => $request->get('position'),
            'company_name' => $request->get('company'),
            'start_date' => $request->get('start'),
            'end_date' => $request->get('end'),
            'city' => $request->get('city'),
            'summary' => $request->get('summary'),
        ];

        Work::query()->create($work);
        return redirect()->route('contact');
    }
    public function createcotactpage(Request $request)
    {

        $contact = ([
            'address' => $request->get('address'),
            'linekdan' =>   $request->get('link'),
        ]);
        Contact::query()->create($contact);
        return redirect()->route('theCV');

    }

    public function handleDrop(Request $request)
    {
        // Handle drop action here
        // Update database or perform any other necessary actions
        return response()->json(['message' => 'Drop action handled successfully']);
    }



}
