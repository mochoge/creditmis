@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card rounded-3 bg-light border-0 bg-transparent">
                <div class="card-header bg-transparent">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Dashboard') }}</a></li>
                          <li class="breadcrumb-item active" aria-current="page">{{ __('Loans') }}</li>
                          <li class="breadcrumb-item active" aria-current="page"> {{ __('Overdue Loans') }}</li>
                        </ol>
                    </nav>
                </div>

                <div class="card-body" style="background-color: #75b3e717;">
                    <div class="row mb-4">
                        <div class="col-md-12">
                            Overdue Loans
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
