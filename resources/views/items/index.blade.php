@extends ('layouts.default')
@section('content')
    <h1>Список постов</h1>
    <ul>
        @foreach($items as $item)
            <a href="{{ route('item.show', $item) }}">
                <li>
                    {{ $item->id }}. {{ $item->title }} {{ $item->content }}
                </li>
            </a>
        @endforeach
    </ul>
    <a href="{{ route('item.create') }}" class="btn btn-primary">Создать</a>
@endsection
