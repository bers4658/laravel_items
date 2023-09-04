@extends ('layouts.default')
@section('content')
    <h1>Создать новый пост</h1>
    <form action="{{ route('item.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">Содержание</label>
            <textarea type="text" name="content" id="content" class="form-control" rows="4"> </textarea>
        </div>
    <button type="submit" class="btn btn-primary"> Создать </button>
    <a href="{{ route('item.index') }}">Назад</a>
    </form>
@endsection
