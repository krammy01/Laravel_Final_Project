<div>
    @extends('layouts.app')

    @section('content')
        <h1>Edit Post</h1>

        <form action="{{ route('posts.update', $post) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ $post->title }}">
                @error('title')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="body">Body</label>
                <textarea name="body" id="body">{{ $post->body }}</textarea>
                @error('body')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <button type="submit">Update Post</button>
        </form>
    @endsection

</div>
