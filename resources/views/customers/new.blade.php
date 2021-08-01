@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card rounded-3 border-0 bg-transparent">
                <div class="card-header bg-transparent">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Dashboard') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Customers') }}</li>
                            <li class="breadcrumb-item active" aria-current="page"> {{ __('New Customer') }}</li>
                        </ol>
                    </nav>
                </div>

                <div class="card-body" style="background-color: #75b3e717;">
                    <div class="card rounded shadow-sm" style= "background-color: #b0d1ecf5;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5 style="font-weight: bold;">{{ __('Personal Details') }}</h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="First name"
                                                        aria-label="First name">
                                                </div>
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="Middle name (optional)"
                                                        aria-label="Last name">
                                                </div>
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="Last name"
                                                        aria-label="Last name">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col cust-col-form">
                                                    <div class="input-group">
                                                        <div class="input-group-text">{{ __('Date of Birth') }}</div>
                                                        <input type="date" class="form-control" id="dob" placeholder="Date of Birth">
                                                    </div>
                                                </div>
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="Gender"
                                                        aria-label="Gender">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="Nationality"
                                                        aria-label="Nationality">
                                                </div>
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="Current Place of Residence"
                                                        aria-label="Current Place of Residence">
                                                </div>
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="Country"
                                                        aria-label="Country"> {{-- TO DO change to select country --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5 style="font-weight: bold;">{{ __('Work Details ') }}<span style="font-style: italic;">{{ __('(Fill N/A if none)') }}</span></h5>
                                                </div>
                                            </div>
                                            {{-- <div class="row">
                                                <div class="col cust-col-form">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                          {{ __('Employed') }}
                                                        </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                          {{ __('Not Employed') }}
                                                        </label>
                                                      </div>
                                                </div>
                                                <div class="col cust-col-form">
                                                    
                                                </div>
                                            </div> --}}
                                            <div class="row">
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="Occupation"
                                                        aria-label="Occupation">
                                                </div>
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="Title/Position Held"
                                                        aria-label="Title/Position Held">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col cust-col-form">
                                                        <input type="text" class="form-control" placeholder="Name of company"
                                                            aria-label="Name of company">
                                                </div>
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="Industry"
                                                        aria-label="Industry">
                                                </div>
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="No. of years worked"
                                                        aria-label="No. of years worked">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="Salary"
                                                        aria-label="Salary">
                                                </div>
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="Payment Frequency"
                                                        aria-label="Payment Frequency">
                                                </div>
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="Employment terms"
                                                        aria-label="Employment terms"> {{-- TO DO change to select --}}
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="Any other details"
                                                        aria-label="Any other details"> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5 style="font-weight: bold;">{{ __('Business Details ') }}<span style="font-style: italic;">{{ __('(Fill N/A if none)') }}</span></h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="Occupation"
                                                        aria-label="Occupation">
                                                </div>
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="Title/Position Held"
                                                        aria-label="Title/Position Held">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col cust-col-form">
                                                        <input type="text" class="form-control" placeholder="Name of company"
                                                            aria-label="Name of company">
                                                </div>
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="Industry"
                                                        aria-label="Industry">
                                                </div>
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="No. of years worked"
                                                        aria-label="No. of years worked">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="Salary"
                                                        aria-label="Salary">
                                                </div>
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="Payment Frequency"
                                                        aria-label="Payment Frequency">
                                                </div>
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="Estimated Annual Revenue"
                                                        aria-label="Estimated Annual Revenue"> {{-- TO DO change to select --}}
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="Any other details"
                                                        aria-label="Any other details"> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5 style="font-weight: bold;">{{ __('Household Expenditure ') }}<span style="font-style: italic;">{{ __('(Fill N/A if none)') }}</span></h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="Approximate Annual Revenue"
                                                        aria-label="Approximate Annual Revenue">
                                                </div>
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="Total Current Loans"
                                                        aria-label="Total Current Loans">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5 style="font-weight: bold;">{{ __('Estimated Credit Limit ') }}</h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="Lower Limit"
                                                        aria-label="Lower Limit">
                                                </div>
                                                <div class="col cust-col-form">
                                                    <input type="text" class="form-control" placeholder="Upper Limit"
                                                        aria-label="Upper Limit">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5 style="font-weight: bold;">{{ __('Attach Documents') }}</h5>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col cust-col-form">
                                                    <div class="input-group">
                                                        <div class="input-group-text">{{ __('Passport Photo') }}</div>
                                                        <input class="form-control" type="file" id="passport">
                                                        {{-- <input type="date" class="form-control" id="dob" placeholder="Date of Birth"> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col cust-col-form">
                                                    <div class="input-group">
                                                        <div class="input-group-text">{{ __('Front ID') }}</div>
                                                        <input class="form-control" type="file" id="frontID">
                                                    </div>
                                                </div>
                                                <div class="col cust-col-form">
                                                    <div class="input-group">
                                                        <div class="input-group-text">{{ __('Back ID') }}</div>
                                                        <input class="form-control" type="file" id="backID">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="row mb-4">
                                        <div class="col-md-6">
                                            <img src="{{ asset('images/avatar.png') }}" height="200" width="200" class="rounded float-start" alt="Customer Picture">
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 offset-md-6 d-flex justify-content-end">
                                    <button class="btn btn-warning mr-2" style="font-size: 16px; font-weight: bold;">Cancel</button>
                                    <button class="btn btn-primary" style="font-size: 16px; font-weight: bold;">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection