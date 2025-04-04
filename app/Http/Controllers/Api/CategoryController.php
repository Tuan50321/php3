<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $Category;
    public function __construct()
    {
        $this->Category = new Category();
    }
    
    public function index()
    {
        return $this->Category->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->Category->create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->Category->find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Category = $this->Category->find($id);
        return $Category->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
