<div>
    @extends('layouts.app')

    @section('content')
        <h1>Create a New Post</h1>

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}">
                @error('title')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="body">Body</label>
                <textarea name="body" id="body">{{ old('body') }}</textarea>
                @error('body')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <button type="submit">Create Post</button>
        </form>
    @endsection

</div>
