<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function show1()
    {
        $user = Auth::user();

        return view('createprofile.step1', compact('user'));
    }

    public function store1(Request $request)
    {
        $validate = $request->validate([
            'about' => 'required',
            'twitter' => 'required',
            'discord' => 'required',

        ]);
        $pathUserPicture = $request->file('profil_picture')->storeAs('public/profil_picture', "user_" . Auth::user()->id . ".jpg");
        $user = Auth::user();
        $user->about = $validate['about'];
        $user->twitter = $validate['twitter'];
        $user->discord = $validate['discord'];
        $user->profil_picture = $pathUserPicture;
        $user->save();


        return redirect()->route('createprofile.step2');
    }

    public function show2()
    {
        $category = Category::all()->load('skills');
        return view('createprofile.step2', ['categories' => $category, 'user' => Auth::user()]);
    }

    public function store2(Request $request)
    {
        $validate = $request->validate([
            'category_id' => 'required',
        ]);

        $user = Auth::user();
        $user->category_id = $validate['category_id'];
        $user->save();

        return redirect()->route('createprofile.step3');
    }

    public function show3()
    {
        return view('createprofile.step3');
    }

    public function store3(Request $request)
    {
        $validatedProject = $request->validate([
            'project-name' => 'required',
            'project-description' => 'required',
            'project-url' => 'required',
        ]);


        $project = new Project();
        $project->name = $validatedProject['project-name'];
        $project->description = $validatedProject['project-description'];
        $project->url = $validatedProject['project-url'];
        $project->user_id = Auth::user()->id;
        $project->save();

        $pathProjectPicture = $request->file('project-picture')->storeAs('public/project_picture', "user_" . Auth::user()->id . "_project_" . $project->id . ".jpg");
        $project->picture = $pathProjectPicture;
        $project->push();

        return redirect()->route('profile.show')->with('success', 'Profile created successfully');
    }

}
