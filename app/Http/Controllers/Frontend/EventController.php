<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller; use App\Models\Event;
class EventController extends Controller { public function show(string $slug){$event=Event::with(['trips.images','timelines','wishlists'])->whereSlug($slug)->firstOrFail(); return view('frontend.themes.romantic-travel-scrapbook.event',compact('event'));}}
