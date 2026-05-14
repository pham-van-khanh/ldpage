<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Template;
class HomeController extends Controller { public function index(){ return view('frontend.home',['templates'=>Template::where('is_active',1)->take(3)->get()]); } }
