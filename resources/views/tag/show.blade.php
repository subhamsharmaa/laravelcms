@extends('layouts.app')

@section('content')
@include('components.bloglist', ['sectionTitle' => $tag, 'posts' => $posts])
@endsection