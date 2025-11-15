@extends('layouts.app')

@section('content')
@include('components.bloglist', ['sectionTitle' => $category->name, 'posts' => $posts])
@endsection