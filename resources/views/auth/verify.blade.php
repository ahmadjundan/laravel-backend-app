@extends('layouts.auth')

@section('title', 'Verify Email')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-social/bootstrap-social.css') }}">
@endpush

@section('main')
    <div class="card card-primary">
        <div class="card-header">
            <h4>Periksa Email anda</h4>
        </div>
        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-blue-900 text-center">
                Link Verifikasi email Terbaru telah dikirim ke email Anda!
            </div>
        @endif

        <div class="card-body">
            <form method="POST" action="{{ route('verification.send') }}" class="needs-validation" novalidate="">
                @csrf
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Kirim Ulang Verifikasi Email
                    </button>
                </div>
            </form>


        </div>
    </div>
    <div class="text-muted mt-5 text-center">
        Belum punya akun? <a href="{{ route('register') }}">Daftar Sekarang</a>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush