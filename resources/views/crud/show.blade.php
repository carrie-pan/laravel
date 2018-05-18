@extends('layouts.CRUD')
@section('title', '查看')
@section('content')
<a class="btn btn-default" href="{{ route('crud.index') }}">返回</a>
<a class="btn btn-primary" href="{{ route('crud.edit', $post->id) }}">編輯</a>
<a class="btn btn-danger">刪除</a>
<h1>{{ $post->title }}</h1>
<div>{{ $post->content }}</div>
@endsection