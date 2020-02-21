<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Storefront;

class StorefrontController extends Controller
{
    public function create(Request $request)
    {
        $storefront = Storefront::updateOrCreate(
            ['name' => $request->input('name')]
        );
        // $storefront = new Storefront;
        // $storefront->name = $request->input('name');
        // $storefront->api_token = Str::random(80),
        // $storefront->save();
        // $token = $storefront->createToken($storefront->name)->accessToken;
        // $storefront->api_token = $token;
        // $storefront->save();
        return response()->json($storefront->id);
    }

    public function test(Request $request)
    {
        return Storefront::all();
    }
}
