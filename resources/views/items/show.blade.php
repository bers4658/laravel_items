@extends ('layouts.default')
@section('content')
    <h1>Просмотр поста</h1>
    <div>
        <h2>{{ $item -> title }}</h2>
        <p>{{ $item -> content }}</p>
    </div>

    <a href="{{ route('item.edit', $item) }}" class="btn btn-primary">Править</a>
    <form method="POST" action="{{ route('item.destroy', $item) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mt-2">Удалить</button>
    </form>

    <a href="{{ route('item.index') }}">Назад</a>
@endsection
