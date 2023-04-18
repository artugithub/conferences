@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-3">Edit Conference</h1>

        <form action="{{ route('conferences.update', $conference->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $conference->name }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control" id="description" required>{{ $conference->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" name="date" class="form-control" id="date" value="{{ $conference->date }}" required>
            </div>

            <div class="form-group">
                <label for="participant_number">Number of Participants:</label>
                <input type="number" name="participant_number" class="form-control" id="participant_number" value="{{ $conference->participant_number }}" min="1" required>
            </div>

            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" name="country" class="form-control" id="country" value="{{ $conference->country }}" required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" name="address" class="form-control" id="address" value="{{ $conference->address }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
