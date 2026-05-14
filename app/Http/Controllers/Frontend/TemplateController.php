<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller; use App\Models\Template;
class TemplateController extends Controller {
public function index(){return view('frontend.templates.index',['templates'=>Template::orderByDesc('slug')->get()]);}
public function show(string $slug){$template=Template::whereSlug($slug)->firstOrFail(); return view('frontend.templates.show',compact('template'));}
}
