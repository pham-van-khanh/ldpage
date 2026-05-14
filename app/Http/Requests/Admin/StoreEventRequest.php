<?php
namespace App\Http\Requests\Admin;
use Illuminate\Foundation\Http\FormRequest;
class StoreEventRequest extends FormRequest { public function authorize(): bool{return true;} public function rules(): array { return ['template_id'=>'required|exists:templates,id','title'=>'required|max:255','slug'=>'required|max:255','event_type'=>'required','status'=>'required','main_title'=>'required|max:255','short_description'=>'nullable|max:500','cover_image'=>'nullable','music_url'=>'nullable|url','intro_note'=>'nullable','main_quote'=>'nullable','footer_text'=>'nullable']; }}
