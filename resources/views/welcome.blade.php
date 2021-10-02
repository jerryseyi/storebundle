@extends('shopify-app::layouts.default')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/promo.css') }}">
@endsection

@section('content')
    <!-- You are: (shop domain name) -->
{{--    <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p>--}}
    <section class="main">
        <div class="promo-group">
            <div class="promo-text">
                <h3>Promo Bar</h3>
                <p>Capture leads, communicate discount coupons, make store-wide announcement or specific page announcement with the help of dynamic bars.</p>
            </div>
            <div class="promo-header">
                <div class="breadcrumb-group">
                    <p>Applications / <span>Promo Bar</span></p>
                </div>
                <div class="promo-icon active">
                    <div class="imgBx active"><img src="" alt=""></div>
                </div>
            </div>
        </div>
        <div class="promo-details">
            <div class="promo-frame">
                <h3>My Promo Bars</h3>
                <button><span class="imgBx"><img src="svg/Vectorplus.svg" alt=""></span> <span class="text">Create Bar</span></button>
            </div>

            <table>
                <thead>
                <tr>
                    <th><span>Name <i class="imgBx"><img src="svg/Groupdirection.svg" alt=""></i></span></th>
                    <th><span>Type <i class="imgBx"><img src="svg/Vectortype.svg" alt=""></i></span></th>
                    <th><span>Status <i class="imgBx"><img src="" alt=""></i></span></th>
                    <th><span>Date <i class="imgBx"><img src="svg/Groupdirection.svg" alt=""></i></span></th>
                    <th><span>Action <i class="imgBx"><img src="" alt=""></i></span></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Email Capture Bar</td>
                    <td>Email Capture</td>
                    <td><button class="active">Active</button></td>
                    <td>2021-01-04 02:46 PM</td>
                    <td><span class="imgBx"><img src="svg/Groupmore.svg" alt=""></span></td>
                </tr>
                <tr>
                    <td>Text Bar</td>
                    <td>Informational</td>
                    <td><button class="disabled">Disabled</button></td>
                    <td>2021-02-07 01:23 PM</td>
                    <td><span class="imgBx"><img src="svg/Groupmore.svg" alt=""></span></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="settings">
            <h3>Settings</h3>
            <div class="settings-base">
                <div class="checkbox">
                    <input type="checkbox" id="check">
                    <label for="check">Enable Close Button</label>
                </div>
                <p>
                    Enable this button if you want your customer to be able to close the Bar while navigating your store.
                </p>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'Welcome' });
    </script>
@endsection
