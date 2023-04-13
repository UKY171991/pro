<form method="POST" action="{{url('/store')}}">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}" required>
    </div>
    <div>
        <label for="body">Body</label>
        <textarea name="body" id="body" required>{{ old('body') }}</textarea>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
