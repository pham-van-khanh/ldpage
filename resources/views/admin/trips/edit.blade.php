@extends('layouts.admin')
@section('content')<form method="post" action="{{route('admin.events.trips.store',$event)}}">@csrf<input name="title" class="border"><input name="slug" class="border"><button>Lưu chuyến đi</button></form>@endsection
