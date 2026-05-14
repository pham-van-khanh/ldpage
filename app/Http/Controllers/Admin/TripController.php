<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; use App\Models\Event; use App\Models\Trip; use Illuminate\Http\Request;
class TripController extends Controller {
public function create(Event $event){return view('admin.trips.create',compact('event'));}
public function store(Request $r, Event $event){$data=$r->validate(['title'=>'required','slug'=>'required','location'=>'nullable','cover_image'=>'nullable','start_date'=>'nullable|date','end_date'=>'nullable|date','opening_note'=>'nullable','diary_text'=>'nullable','ending_quote'=>'nullable']); $event->trips()->create($data); return redirect()->route('admin.events.edit',$event);}
public function edit(Trip $trip){return view('admin.trips.edit',compact('trip'));}
public function update(Request $r, Trip $trip){$trip->update($r->validate(['title'=>'required','slug'=>'required'])); return back();}
public function destroy(Trip $trip){$event=$trip->event; $trip->delete(); return redirect()->route('admin.events.edit',$event);} }
