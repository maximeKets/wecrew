<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function show1()
    {
        $user = Auth::user();

        return view('createprofile.step1', compact('user'));
    }

    public function store1(Request $request)
    {
        $validate = $request->validate([

            'profil_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'about' => 'required|string|max:500',
            'twitter' => 'required|starts_with:@',
            'discord' => 'required|starts_with:@',
        ],
        [
            'profil_picture.required' => 'please select a picture',
            'profil_picture.image' => 'The file must be an image',
            'profil_picture.mimes' => 'The file must be a jpeg, png, jpg, gif, svg',
            'profil_picture.max' => 'The file must be less than 4MB',
            'about.max' => 'The about must be less than 500 characters',
            'about.required' => 'You must write a short description about you',
            'twitter.starts_with' => 'The twitter username must start with @',
            'twitter.required' => 'You must enter your twitter account',
            'discord.starts_with' => 'The discord username must start with @',
            'discord.required' => 'You must enter your discord account',
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
            'skills' => 'required',
        ],
        [
            'category_id.required' => 'You must select a category',
            'skills.required' => 'You must select at least one skill',
        ]);


        $user = Auth::user();
        $user->category_id = $validate['category_id'];
        $user->skills()->sync($validate['skills']);
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
            'project-picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ],
        [
            'project-name.required' => 'please register a name for your project',
            'project-description.required' => 'enter a description for your project',
            'project-picture.image' => 'The file must be an image',
            'project-picture.mimes' => 'The file must be a jpeg, png, jpg, gif, svg',
            'project-picture.max' => 'The file must be less than 4MB',
        ]);

     $validateLinks = $request->validate([
            'twitter' => 'required|starts_with:@',
        ],
        [
            'twitter.starts_with' => 'The twitter link must start with @',
            'twitter.required' => 'You must enter a Twitter link',
        ]);

        $project = new Project();
        $project->name = $validatedProject['project-name'];
        $project->description = $validatedProject['project-description'];
        $project->user_id = Auth::user()->id;
        $project->save();

        $link = new Link();
        $link->name = $validateLinks['twitter'];
        $link->url = "https://twitter.com/" .$validateLinks['twitter'];
        $link->project_id = $project->id;
        $link->save();



        if ($request->hasFile('project-picture')) {
            $pathProjectPicture = $request->file('project-picture')->storeAs('public/project_picture', "user_" . Auth::user()->id . "_project_" . $project->id . ".jpg");
            $project->picture = $pathProjectPicture;
            $project->push();
        }


        return redirect()->route('profile.show')->with('success', 'Welcome in the W3crew community !');
    }

}
