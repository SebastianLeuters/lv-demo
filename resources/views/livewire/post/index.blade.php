@php use Livewire\Form; @endphp
@extends('layouts.auth')

@section('title', 'Item index view')

@section('body')
    <livewire:post.postlist :$posts/>
    <livewire:post.create/>
@endsection
