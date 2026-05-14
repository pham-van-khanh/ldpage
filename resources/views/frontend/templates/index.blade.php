@extends('layouts.frontend')
@section('content')<main class="max-w-6xl mx-auto p-6"><h1 class="text-3xl">Templates</h1><div class="grid md:grid-cols-3 gap-4 mt-6">@foreach($templates as $t)<article class="paper p-4"><h2>{{$t->name}}</h2><p>{{$t->description}}</p></article>@endforeach</div></main>@endsection
