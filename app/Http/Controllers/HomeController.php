<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Link;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use File;
use function Termwind\render;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('home');
    }

    public function showUser($username)
    {
        $user = User::where('username', $username)->firstOrFail();
        return view('user.show', ['user' => $user]);
    }

    public function listUsers()
    {
        $categories = Category::all();
        $users = User::limit(15)->get();
        return view('user.list', ['users' => $users, 'categories' => $categories]);
    }

    public function loadMoreUsers(Request $request)
    {
        $offset = $request->get('offset', 0);
        $previousUrl = $request->headers->get('referer');
        $category = null;
        if (strpos($previousUrl, '/profiles/') !== false) {
            $parts = explode('/', $previousUrl);
            $lastPart = end($parts);
            if (is_numeric($lastPart)) {
                $category = $lastPart;
            }
        }
        $users = User::with("skills");
        if ($category) {
            $users->where('category_id', $category);
        }
        $users = $users->offset($offset)
            ->limit(15)
            ->get();

        return response()->json($users);
    }

    public function listUsersByCategory($category)
    {
        $categories = Category::all();
        $users = User::where('category_id', $category)->limit(15)->get();
        return view('user.list', ['users' => $users, 'categories' => $categories]);
    }


}
