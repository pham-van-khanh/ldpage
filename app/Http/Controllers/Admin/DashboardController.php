<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; use App\Models\Event; use App\Models\Trip; use App\Models\TripImage;
class DashboardController extends Controller { public function index(){return view('admin.dashboard',['eventCount'=>Event::count(),'tripCount'=>Trip::count(),'imageCount'=>TripImage::count(),'viewCount'=>Event::sum('views_count')]);}}
