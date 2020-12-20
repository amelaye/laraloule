@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $topic->title }}</h1>
        <hr>
        <form action="{{ route('topics.update', $topic) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Sujet (on parle de trucs gais steuplé)</label>
                <input type="text" name="title" id="title" value="{{ $topic->title }}" class="form-control @error('title') is-invalid @enderror">
                @error('title')
                <div class="invalid-feedback">{{ $errors->first('title')  }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Ta prose (fais attention aux fautes, ce sera cool)</label>
                <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="5">{{ $topic->content }}</textarea>
                @error('content')
                <div class="invalid-feedback">{{ $errors->first('content')  }}</div>
                @enderror
            </div>
            <button class="btn btn-primary" type="submit">Je modifie et j'en suis fier.e !</button>
        </form>
    </div>
@endsection
