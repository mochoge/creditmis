@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card rounded-3 bg-light border-0 bg-transparent">
                <div class="card-header bg-transparent">{{ __('Dashboard') }}</div>

                <div class="card-body" style="background-color: #75b3e75c;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in!') }} --}}

                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card rounded-3 bg-light shadow">
                                        <div class="card-body d-flex justify-content-between" style="background-color: #75b3e75c;">
                                            <div class="d-flex flex-column">
                                                <p class="font-bold">{{ __("Active Loan Applications") }}</p>
                                                <p class="stats" style="font-size: 18px; font-weight: bold">{{ __('Stat 1') }}</p>
                                            </div>
                                            <div>
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle heading" viewBox="0 0 16 16">
                                                        <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                                                        <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                                                      </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card rounded-3 bg-light shadow">
                                        <div class="card-body d-flex justify-content-between" style="background-color: #75b3e75c;">
                                            <div class="d-flex flex-column">
                                                <p class="font-bold">{{ __("Pending Loan Applications") }}</p>
                                                <p class="stats" style="font-size: 18px; font-weight: bold">{{ __('Stat 1') }}</p>
                                            </div>
                                            <div>
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hourglass-bottom" viewBox="0 0 16 16">
                                                        <path d="M2 1.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1-.5-.5zm2.5.5v1a3.5 3.5 0 0 0 1.989 3.158c.533.256 1.011.791 1.011 1.491v.702s.18.149.5.149.5-.15.5-.15v-.7c0-.701.478-1.236 1.011-1.492A3.5 3.5 0 0 0 11.5 3V2h-7z"/>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card rounded-3 bg-light shadow">
                                        <div class="card-body d-flex justify-content-between" style="background-color: #75b3e75c;">
                                            <div class="d-flex flex-column">
                                                <p class="font-bold">{{ __("Overdue Loan Applications") }}</p>
                                                <p class="stats" style="font-size: 18px; font-weight: bold">{{ __('Stat 1') }}</p>
                                            </div>
                                            <div>
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-minus-fill" viewBox="0 0 16 16">
                                                        <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6 8.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1 0-1z"/>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card rounded-3 bg-light shadow">
                                        <div class="card-body d-flex justify-content-between" style="background-color: #75b3e75c;">
                                            <div class="d-flex flex-column">
                                                <p class="font-bold">{{ __("Customers") }}</p>
                                                <p class="stats" style="font-size: 18px; font-weight: bold">{{ __('Stat 1') }}</p>
                                            </div>
                                            <div>
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card rounded-3 bg-light shadow">
                                <div class="card-header bg-success text-white">
                                    <span class="text-uppercase font-bold">{{ __("Active Loan Applications") }}</span>
                                </div>
                                <div class="card-body" style="background-color: #75b3e75c;">
                                    <table class="table text-center table-sm table-hover table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase">{{ __('Test') }}</th>
                                                <th class="text-uppercase">{{ __('Test') }}</th>
                                                <th class="text-uppercase">{{ __('Test') }}</th>
                                                <th class="text-uppercase">{{ __('Test') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ __('Test1') }}</td>
                                                <td>{{ __('Test1') }}</td>
                                                <td>{{ __('Test1') }}</td>
                                                <td>{{ __('Test1') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('Test2') }}</td>
                                                <td>{{ __('Test2') }}</td>
                                                <td>{{ __('Test2') }}</td>
                                                <td>{{ __('Test2') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('Test3') }}</td>
                                                <td>{{ __('Test3') }}</td>
                                                <td>{{ __('Test3') }}</td>
                                                <td>{{ __('Test3') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('Test4') }}</td>
                                                <td>{{ __('Test4') }}</td>
                                                <td>{{ __('Test4') }}</td>
                                                <td>{{ __('Test4') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card shadow">
                                <div class="card-header bg-primary text-white">
                                    <span class="text-uppercase font-bold">{{ __("Pending Loan Applications") }}</span>
                                </div>
                                <div class="card-body" style="background-color: #75b3e75c;">
                                    <table class="table text-center table-sm table-hover table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase">{{ __('Test') }}</th>
                                                <th class="text-uppercase">{{ __('Test') }}</th>
                                                <th class="text-uppercase">{{ __('Test') }}</th>
                                                <th class="text-uppercase">{{ __('Test') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ __('Test1') }}</td>
                                                <td>{{ __('Test1') }}</td>
                                                <td>{{ __('Test1') }}</td>
                                                <td>{{ __('Test1') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('Test2') }}</td>
                                                <td>{{ __('Test2') }}</td>
                                                <td>{{ __('Test2') }}</td>
                                                <td>{{ __('Test2') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('Test3') }}</td>
                                                <td>{{ __('Test3') }}</td>
                                                <td>{{ __('Test3') }}</td>
                                                <td>{{ __('Test3') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('Test4') }}</td>
                                                <td>{{ __('Test4') }}</td>
                                                <td>{{ __('Test4') }}</td>
                                                <td>{{ __('Test4') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="card rounded-3 bg-light shadow">
                                <div class="card-header bg-danger text-white">
                                    <span class="text-uppercase font-bold">{{ __("Overdue Loans")}}</span>
                                </div>
                                <div class="card-body" style="background-color: #75b3e75c;">
                                    <table class="table text-center table-sm table-hover table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase">{{ __('Test') }}</th>
                                                <th class="text-uppercase">{{ __('Test') }}</th>
                                                <th class="text-uppercase">{{ __('Test') }}</th>
                                                <th class="text-uppercase">{{ __('Test') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ __('Test1') }}</td>
                                                <td>{{ __('Test1') }}</td>
                                                <td>{{ __('Test1') }}</td>
                                                <td>{{ __('Test1') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('Test2') }}</td>
                                                <td>{{ __('Test2') }}</td>
                                                <td>{{ __('Test2') }}</td>
                                                <td>{{ __('Test2') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('Test3') }}</td>
                                                <td>{{ __('Test3') }}</td>
                                                <td>{{ __('Test3') }}</td>
                                                <td>{{ __('Test3') }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('Test4') }}</td>
                                                <td>{{ __('Test4') }}</td>
                                                <td>{{ __('Test4') }}</td>
                                                <td>{{ __('Test4') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
