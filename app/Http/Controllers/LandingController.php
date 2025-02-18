<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('landing.index');
    }

    /**
     * Show the form for creating a new resource.
     */
     /**
     * Display a listing of the resource.
     */
    /**
     * Display a listing of the resource.
     */

    public function testimonials()
    {
        //
         echo "hai bro";
    }

    /**
     * Show the form for creating a new resource.
     */
     /**
     * Display a listing of the resource.
     */
    public function wishlist()
    {
        //
         return view('landing.wishlist');
    }

    /**
     * Show the form for creating a new resource.
     */
     /**
     * Display a listing of the resource.
     */
    public function details($slug)
    {
        //

        return view('landing.details', compact('slug'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
