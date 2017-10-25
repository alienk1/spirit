@extends('master')

@section('title', 'Page Title')

@section('styles')
    @parent

@endsection

@section('scripts')
    @parent

@endsection

@section('content')

@include('blocks.header')

<div class="spacial-features">
    <section class="container">
        <div class="row">
            <div class="col-12">
                <div class="header">
                    <h2>Complete control over your company</h2>
                    <p>
                        Spacial has both a web app and an android app to make your website easy and always available.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="feature">
                    <h3>
                        Have conversations with your friends
                    </h3>
                    <p>
                        Spacial is the perfect solution for web developers and designers. You can get an awesome website for your best projects and clients, and also get great support.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature">
                    <h3>
                        Keep your information private & secure
                    </h3>
                    <p>
                        Spacial is designed to make showing off your best projects extremely fast and simple. There are many ways to configure. Just go to the source, make changes.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="feature">
                    <h3>
                        Explore new possibilities every day

                        <span class="badge-new">New</span>
                    </h3>
                    <p>
                        Spacial has both a web app and an android app to make your website easy and always available. It offers you all the designs in collaboration with smart people.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature">
                    <h3>
                        Enjoy a whole new set of options
                    </h3>
                    <p>
                        Spacial is designed to make showing off your best projects extremely fast and simple. There are many ways to configure, just go to the source and configure.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>

@include('blocks.footer')

@endsection