@extends ('layouts.default')
@section('content')
    <h1>Редактирование поста</h1>
    <form action="{{ route('item.update', $item) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $item->title }}">
        </div>
        <div class="form-group">
            <label for="content">Содержание</label>
            <textarea name="content" id="content" class="form-control" rows="4">{{ $item->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Обновить</button>
    </form>
    <a href="{{ route('item.show', $item) }}">Назад</a>

@endsection
