@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        {{ $conference->name }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Description</h5>
                        <p class="card-text">{{ $conference->description }}</p>
                        <h5 class="card-title">Date</h5>
                        <p class="card-text">{{ $conference->date }}</p>
                        <h5 class="card-title">Participant Number</h5>
                        <p class="card-text">{{ $conference->participant_number }}</p>
                        <h5 class="card-title">Country</h5>
                        <p class="card-text">{{ $conference->country }}</p>
                        <h5 class="card-title">Address</h5>
                        <p class="card-text">{{ $conference->address }}</p>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('list') }}" class="btn btn-primary">Back to Conference List</a>
                </div>
            </div>
        </div>
    </div>
@endsection

