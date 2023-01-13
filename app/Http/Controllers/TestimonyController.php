<?php

namespace App\Http\Controllers;

use App\Http\Requests\Testimony\CreateTestimonyRequest;
use App\Http\Requests\Testimony\UpdateTestimonyRequest;
use App\Models\Testimony;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonies = Testimony::all();
        return view('admin.testimony.index',compact('testimonies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimony.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTestimonyRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'passport' => 'required',
            'description' => 'required'
        ]);
        $imagePath = $request->file('passport')->store('testimonies');

        $data = $request->all();
        $data['passport'] = $imagePath;

        Testimony::create($data);

        //flash message
        session()->flash('success', 'Great!  Testimony  added  successfully');

        return to_route('testimonies.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimony $testimony)
    {
        return view('admin.testimony.create', compact("testimony"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestimonyRequest $request, Testimony $testimony)
    {
        if ($request->hasFile('passport')) {

            $imagePath = $request->file('passport')->store('testimonies');

            $data = $request->all();
            $data['passport'] = $imagePath;
            Storage::delete($testimony->passport);

        } else{

            $data = $request->all();
        }

        $testimony->update($data);

        //flash message
        session()->flash('success', 'Great!  Testimony  Updated  successfully');

        return to_route('testimonies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimony $testimony)
    {

        $testimony->delete();
        Storage::delete($testimony->passport);

        session()->flash('success', 'Testimony Deleted successfully');

        return redirect()->back();
    }
}
