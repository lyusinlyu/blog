<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{
    User
};

class CategoriesController extends Controller
{
     public function showCategories(Request $request, $user_id)
    {
        $user = User::where('id', $user_id)->first();
        if($user) {
            $categories = $user->categories;
            dd($categories);
        }
    }

    public function showCategory(Request $request, $user_id, $category_id)
    {
        $user = User::where('id', $user_id)->first();
        if($user) {
            $category = $user->categories()->where('id', $category_id)->first();
            dd($category);
        }
    }
}
