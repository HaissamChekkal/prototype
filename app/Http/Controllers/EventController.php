<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $user_id = Auth::user()->id;
//		$events = Event::all();
        $events = DB::table('events')
            ->orderBy('date', 'asc')
            ->get();

        

        return view('event.index')->with(compact('events', 'user_id', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $events = Event::all();
        return view('event.create')->with(compact('events'));
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
            'name' => 'required',
            'nbPerson' => 'required',
            'nbTable' => 'required',
            'type' => 'required'
        ]);

        $user_id = Auth::user()->id;

        $event = new Event;

        $event->name    = $request->name;
		$event->nbPerson    = $request->nbPerson;
        $event->nbTable  = $request->nbTable;
//        $event->capaciteTable  = $request->capaciteTable;
		$event->type  = $request->type;
		$event->culture  = $request->culture;
		$event->user_id  = $user_id;
        $event->date  = $request->date;

        $event->save();


		return view('event.show')->with(compact('event'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
 
        return view('event.show')->with(compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = Event::find($id);
 
        return $events;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
