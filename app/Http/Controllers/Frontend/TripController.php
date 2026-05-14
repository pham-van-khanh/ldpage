<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller; use App\Models\Event; use App\Models\Trip;
class TripController extends Controller { public function show(string $slug,string $tripSlug){$event=Event::whereSlug($slug)->firstOrFail(); $trip=Trip::with(['images','memories','schedules'])->where('event_id',$event->id)->whereSlug($tripSlug)->firstOrFail(); return view('frontend.themes.romantic-travel-scrapbook.trip',compact('event','trip'));}}
