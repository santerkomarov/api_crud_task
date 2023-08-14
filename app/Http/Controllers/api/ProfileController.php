<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return auth()->user()->load('profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'phone' => ['required', 'string', 'max:255'],
            'avatar' => ['required', 'string', 'max:255'],
            ]);

        $profile = Profile::where('user_id', auth()->user()->id)->first();

        if ( $profile ) {
            return response()->json(['You already have the profile']);
        }

        $profile = Profile::create([
            'user_id' => auth()->user()->id,
            'phone' => $validated['phone'],
            'avatar' => $validated['avatar'],
        ]);
        return response()->json([
            'profile' => $profile,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $profile = Profile::where('user_id', auth()->user()->id)->first();

        if ( !$profile ) {
            return response()->json(['Profile does not exist']);
        }

        $validated = $request->validate([
            'phone' => ['required', 'string', 'max:255'],
            'avatar' => ['required', 'string', 'max:255'],
            ]);

        $profile->update([

            'phone' => $validated['phone'],
            'avatar' => $validated['avatar'],
        ]);

        return response()->json([
            'profile' => $profile,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete()
    {

        $profile = Profile::where('user_id', auth()->user()->id)->first();

        if ( !$profile ) {
            return response()->json(['Profile does not exist']);
        }
        
        $profile->delete();
        
        return response()->json([
            'Profile  of ' . auth()->user()->name . ' was deleted',
        ]);
    }
}
