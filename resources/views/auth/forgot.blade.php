@extends('layouts.auth')

@section('title', 'Forgot Password')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="card card-primary">
        <div class="card-header">
            <h4>Lupa Password</h4>
        </div>

        <div class="card-body">
            <p class="text-muted text-center">Kami akan mengirim link untuk mereset password anda</p>
            @if (session'status')
                <div class="mb-4 font-medium text-sm text-blue-900 text-center">
                    {{ session'status' }}
                </div>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email"
                        type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        name="email"
                        tabindex="1"
                        required
                        autofocus>
                        @error ('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                </div>
                <div class="form-group">
                    <button type="submit"
                        class="btn btn-primary btn-lg btn-block"
                        tabindex="4">
                        Forgot Password
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
