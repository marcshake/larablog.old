@foreach ($entries as $item)
    <div class="row">
        <div class="twelve columns">
            <h2>{{ $item->title }}</h2>
            {!! $item->contents !!}
        </div>
    </div>
@endforeach
