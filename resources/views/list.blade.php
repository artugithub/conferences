@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand text-white" style="margin-left: 100px;" href="#">Conference Application</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                @if(Auth::check())
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('logout') }}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                            <input type="hidden" name="_method" value="GET">
                        </form>
                    </li>
                @endif
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            @foreach ($conferences as $conference)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $conference->title }}</h5>
                            <p class="card-text">{{ $conference->description }}</p>
                            <a href="{{ route('conferences.show', $conference->id) }}" class="btn btn-primary">View</a>
                            @if(Auth::check())
                                <a href="{{ route('conferences.edit', $conference->id) }}"
                                   class="btn btn-secondary">Edit</a>
                                <form action="{{ route('conferences.destroy', $conference->id) }}" method="POST"
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this conference?')">Delete
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        @if(Auth::check())
            <div class="row mt-5">
                <div class="col-md-12 text-right">
                    <a href="{{ route('conferences.create') }}" class="btn btn-primary">Create</a>
                </div>
            </div>
        @endif
    </div>
@endsection

@section('styles')
    <style>
        .nav-link {
            color: white;
        }

        .navbar-nav.ml-auto .nav-link {
            margin-right: 20px;
        }
    </style>
@endsection
