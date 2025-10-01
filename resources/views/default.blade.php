@extends('layout')

@section('content')
    <main class="flex flex-col w-full">        
        {{-- Block-based content --}}
        @include('partials.blocks-renderer', ['blocks' => $blocks ?? null])
    </main>
@endsection