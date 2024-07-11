@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $event->name }}</h1>
        <p><strong>Location:</strong> {{ $event->location }}</p>
        <p><strong>Description:</strong> {{ $event->description }}</p>
        <p><strong>Date:</strong> {{ $event->date }}</p>
        <p><strong>Start Time:</strong> {{ $event->start_time }}</p>
        <p><strong>End Time:</strong> {{ $event->end_time }}</p>
        <p><strong>Category:</strong> {{ $event->category }}</p>
        <p><strong>Organizer:</strong> {{ $event->organizer }}</p>
        @if ($event->image)
            <p><strong>Image:</strong></p>
            <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->name }}">
        @endif
    </div>
@endsection
