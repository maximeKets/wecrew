<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Psy\VersionUpdater\Downloader\Factory;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory| View
     */
    public function index(Request $request)
    {
        return view('home.home',
            ['user' => $request->user()]); // TODO: check if needed to get user for connection
    }

    public function showUser($username)
    {
        $user = User::where('username', $username)->firstOrFail();

        return view('user.show', ['user' => $user]);
    }

    public function listUsers()
    {
        $filter = 0;
        $categories = Category::all();
        $users = User::limit(32)
            ->where('category_id', '!=', null)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('user.list', ['users' => $users, 'categories' => $categories, 'filter' => $filter]);
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
        $users = User::with('skills', 'projects');
        if ($category) {
            $users->where('category_id', $category);
        }
        $users = $users->offset($offset)
            ->where('category_id', '!=', null)
            ->orderBy('created_at', 'desc')
            ->limit(32)
            ->get();

        return response()->json($users);
    }

    public function listUsersByCategory($category)
    {
        $filter = $category;
        $categories = Category::all();
        $users = User::where('category_id', $category)
            ->orderBy('created_at', 'desc')
            ->limit(32)
            ->get();

        return view('user.list', ['users' => $users, 'categories' => $categories, 'filter' => $filter]);
    }

}
