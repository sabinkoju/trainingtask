<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::orderBy('id', 'desc')->get();
        return view('Backend/Event/viewEvent', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend/Event/addEvent');
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
            'author' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $event = new Event;
        $event->title = $request->title;
        $event->author = $request->author;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->save();

        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('Backend/Event/editEvent', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $event = Event::find($id);
        $event->title = $request->title;
        $event->author = $request->author;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $update = $event->save();

        if ($update) {
            return redirect()->route('events.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events = Event::findOrFail($id);
        $events->delete();

        return redirect()->route('events.index');
    }
}
