@extends('layouts.admin')
@section('content')<div class="grid grid-cols-2 md:grid-cols-4 gap-4">@foreach(['Sự kiện'=>$eventCount,'Chuyến đi'=>$tripCount,'Ảnh'=>$imageCount,'Lượt xem'=>$viewCount] as $k=>$v)<div class="bg-white p-4 rounded-xl"><p>{{$k}}</p><p class="text-2xl font-bold">{{$v}}</p></div>@endforeach</div>@endsection
