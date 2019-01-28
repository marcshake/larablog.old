{{-- This is a comment. This comment tells you, that home.blade actually extends our main template --}}
@extends('larablog')

{{-- This is the section that will be 'yield'ed in that parent template. So whatever you see here, will be included in that layout --}}
@section('contents')

    @foreach ($entries as $item)
        <div class="row">
            <div class="twelve columns">
                <h2>{{ $item->title }}</h2>
                {!! $item->contents !!}
            </div>
        </div>
    @endforeach
    <div class="row">
        {{ $entries->links() }}
    </div>


@endsection
