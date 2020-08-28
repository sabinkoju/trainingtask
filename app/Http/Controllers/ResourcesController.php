<?php

namespace App\Http\Controllers;

use App\Resources;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resources = Resources::orderBy('id', 'desc')->get();
        return view('Backend/Resources/viewResource', compact('resources'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend/Resources/addResource');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'file' => 'required|max:2048',
        ]);

        $resources = new Resources;
        if ($request->file()) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $resources->file = '/storage/' . $filePath;
        }
        $resources->title = $request->title;
        $resources->save();

        return redirect()->route('resources.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resources  $resources
     * @return \Illuminate\Http\Response
     */
    public function show(Resources $resources)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resources  $resources
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resources = Resources::findOrFail($id);
        return view('Backend/Resources/editResource', compact('resources'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resources  $resources
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'file' => 'required|max:2048',
        ]);

        $resources = Resources::find($id);

        if ($request->file()) {
            if ($resources->file != null) {
                unlink(public_path('' . $resources->file));
            }
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $resources->file = '/storage/' . $filePath;
        } else {
            $resources->file = $resources->file;
        }
        $resources->title = $request->title;
        $update = $resources->save();
        if ($update) {
            return redirect()->route('resources.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resources  $resources
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resources = Resources::findOrFail($id);
        $file_path =  Storage::delete('/uploads/' . $resources->file);

        unlink(public_path('' . $resources->file));

        $resources->delete();

        return redirect()->route('resources.index');
    }
}
