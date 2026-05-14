@extends('layouts.admin')
@section('content')<a href="{{route('admin.events.create')}}">+ Tạo event</a>@foreach($events as $event)<div class="bg-white p-3 my-2 rounded">{{$event->title}}</div>@endforeach@endsection
