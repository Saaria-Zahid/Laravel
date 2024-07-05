<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\freelancerData;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB; // Import the DB facade




class FreelanceController extends Controller
{

public function form(){


return view('freelance.form');
}

//Add Form Details
public function details_form(Request $request){

    $user = Auth::user();
    $userid = $user->id;


      $data = new freelancerData;

    $data->name = $request->name;
    $data->user_id = $userid;
    $data->description = $request->description;

    $image = $request->image;
    if($image){
        $imageName = time().'.'. $image->getClientOriginalExtension();
        $request->image->move('profile_image',$imageName);
        $data->image = $imageName;
    }

    $skillsInput = $request->input('skills');
    $skillsArray = array_filter($skillsInput);
    $data->skills = json_encode($skillsArray);
// languages
    //  $languagesInput = $request->input('language');
    //  $proficienciesInput = $request->input('proficiency');
    //  $languagesArray = array_combine($languagesInput, $proficienciesInput);
    //  $data->languages = json_encode($languagesArray);

     $language = $request->input('language');
     $proficiency = $request->input('proficiency');


     $languageArray = [];
     foreach ($language as $key => $languages) {
         $languageArray[] = [
             'language' => $languages,
             'proficiency' => $proficiency[$key],

         ];
     }

     $data->languages = json_encode($languageArray);

// languages

// Education
$edu_institute = $request->input('edu_institute');
$edu_deg = $request->input('edu_deg');
$edu_year = $request->input('edu_year');
$edu_major = $request->input('edu_major');
$edu_country = $request->input('edu_country');

$educationArray = [];
foreach ($edu_institute as $key => $institute) {
    $educationArray[] = [
        'institute' => $institute,
        'degree' => $edu_deg[$key],
        'year' => $edu_year[$key],
        'major' => $edu_major[$key],
        'country' => $edu_country[$key]
    ];
}

$data->education = json_encode($educationArray);
// Education

// Certificate

$certificate = $request->input('certificate');
$cer_from = $request->input('cer_from');
$cer_year = $request->input('cer_year');

$certificateArray = [];
foreach ($certificate as $key => $cert) {
    $certificateArray[] = [
        'certificate' => $cert,
        'from' => $cer_from[$key],
        'year' => $cer_year[$key]
    ];
}

$data->certificate = json_encode($certificateArray);
// Certificate

    $data->save();

return redirect('profile');

}

//Profile View
public function profile(){
    $user = Auth::user();
    $data = [];


    // Check if the authenticated user's ID matches the user_id in the freelancerData model
    $freelancerData = FreelancerData::where('user_id', $user->id)->first();
    if ($freelancerData) {
        $data = FreelancerData::all();
        $freelanceData = FreelancerData::find($user->id); // Replace 1 with the ID of the freelance data you want to show
        $skills = json_decode($freelanceData->skills, true);
        $languages = json_decode($freelanceData->languages, true);
        $education = json_decode($freelancerData->education, true);
        $certificate = json_decode($freelancerData->certificate, true);

    }
    return view("freelance.profile", compact('freelancerData','data', 'skills','languages','education','certificate'));
}

// Edit Form Details
public function edit_profile($id){
    $data = freelancerData::find($id);
    return view("freelance.edit_profile", compact('data'));
}

//update Form Details
public function update_profile(Request $request, $id){

    $user = Auth::user();
    $userid = $user->id;

    $data = freelancerData::find($id);

    if(!$data){
        return redirect()->back()->with('error', 'Data not found');
    }

    $data->name = $request->name;
    $data->user_id = $userid;
    $data->description = $request->description;

    $image = $request->image;
    if($image){
        $imageName = time().'.'. $image->getClientOriginalExtension();
        $request->image->move('profile_image',$imageName);
        $data->image = $imageName;
    }

    $skillsInput = $request->input('skills');
    $skillsArray = array_filter($skillsInput);
    $data->skills = json_encode($skillsArray);

    // languages
    $language = $request->input('language');
    $proficiency = $request->input('proficiency');

    $languageArray = [];
    foreach ($language as $key => $languages) {
        $languageArray[] = [
            'language' => $languages,
            'proficiency' => $proficiency[$key],

        ];
    }

    $data->languages = json_encode($languageArray);

    // Education
    $edu_institute = $request->input('edu_institute');
    $edu_deg = $request->input('edu_deg');
    $edu_year = $request->input('edu_year');
    $edu_major = $request->input('edu_major');
    $edu_country = $request->input('edu_country');

    $educationArray = [];
    foreach ($edu_institute as $key => $institute) {
        $educationArray[] = [
            'institute' => $institute,
            'degree' => $edu_deg[$key],
            'year' => $edu_year[$key],
            'major' => $edu_major[$key],
            'country' => $edu_country[$key]
        ];
    }

    $data->education = json_encode($educationArray);

    // Certificate

    $certificate = $request->input('certificate');
    $cer_from = $request->input('cer_from');
    $cer_year = $request->input('cer_year');

    $certificateArray = [];
    foreach ($certificate as $key => $cert) {
        $certificateArray[] = [
            'certificate' => $cert,
            'from' => $cer_from[$key],
            'year' => $cer_year[$key]
        ];
    }

    $data->certificate = json_encode($certificateArray);

    $data->save();

    return redirect('profile');
}


//add gigs


}
