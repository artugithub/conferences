@extends('layouts.app')

@section('content')
    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="w-50">
            <h1 class="display-2 text-white">Admin Login</h1>
            <form method="POST" action="{{ route('login.submit') }}" class="mt-5">
                @csrf

                <div class="form-group">
                    <label for="email" class="text-white">Email</label>
                    <input id="email" type="email" class="form-control" name="email" required autofocus>
                </div>

                <div class="form-group">
                    <label for="password" class="text-white">Password</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
