@extends('layouts.main')

@push('header-styles')
    <link href="{{ asset('css/leads-page.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div id="leadPageWrapper">
        <figure>
            <img class="presentation-image" src="/images/obtest-kingfisher.jpg" alt="">
        </figure>
        <div class="bottom-section-wrapper">
            <div class="container">
                <div class="card">
                    <h1 class="card__heading">A headline</h1>
                    <p class="card__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <form action="/" method="post" class="lead-form">
                    @csrf
                    <div class="form-group lead-form--two-column">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" name="firstName" id="firstName">
                    </div>
                    <div class="form-group lead-form--two-column">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" name="lastName" id="lastName">
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">Phone-Number</label>
                        <input type="text" class="form-control" name="phoneNumber" id="phoneNumber">
                    </div>
                    <button type="submit" class="lead-form__btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('footer-scripts')
    <script src="{{ asset('js/leads-page.js') }}"></script>
@endpush
