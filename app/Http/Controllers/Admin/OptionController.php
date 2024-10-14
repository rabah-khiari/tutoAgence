<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OptionFormRequest;
use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.options.index',[
            'options'=> Option::paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Option =new Option();
        
        return view('admin.options.form',[
            'option'=> $Option
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OptionFormRequest $request)
    {
        $Option= Option::create($request->validated());
        return to_route('admin.option.index')->with('success','l\'Option a bien été créé');
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
    public function edit(Option $Option)
    {
        return view('admin.options.form',[
            'option'=>$Option
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OptionFormRequest $request, Option $Option)
    {
        $Option->update($request->validated());
        return to_route('admin.option.index')->with('success','l\'Option a bien été Modifier');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Option $Option)
    {
        $Option->delete();
        return to_route('admin.option.index')->with('success','l\'Option a bien été Suprimer');
    }
}
