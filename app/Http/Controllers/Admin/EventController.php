<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; use App\Http\Requests\Admin\StoreEventRequest; use App\Models\Event; use App\Models\Template;
class EventController extends Controller {
public function index(){return view('admin.events.index',['events'=>Event::with('template')->latest()->paginate(10)]);} public function create(){return view('admin.events.create',['templates'=>Template::all()]);}
public function store(StoreEventRequest $r){$event=Event::create($r->validated()+['user_id'=>1]); return redirect()->route('admin.events.edit',$event);} public function edit(Event $event){return view('admin.events.edit',['event'=>$event,'templates'=>Template::all()]);}
public function update(StoreEventRequest $r, Event $event){$event->update($r->validated()); return back();}
public function destroy(Event $event){$event->delete(); return redirect()->route('admin.events.index');}}
