@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-primary">
                <div class="panel-heading">General API calls</div>

                <div class="panel-body">
                    <p>The API calls have to be made with 2 HTTP Headers:</p>
                    <ul>
                        <li>Accept: application/json</li>
                        <li>Authorization: Bearer <a href="{{ url('/home') }}">{token}</a></li>
                    </ul>
                </div>
            </div>

            <hr>

            <div class="panel panel-default">
                <div class="panel-heading">Get all users</div>

                <div class="panel-body">
                    <p><strong>method</strong>: GET</p>
                    <p><strong>URL</strong>: https://okki.sleeplessmind.com.mo/api/v1/user</p>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Get specific user</div>

                <div class="panel-body">
                    <p><strong>method</strong>: GET</p>
                    <p><strong>URL</strong>: https://okki.sleeplessmind.com.mo/api/v1/user/{id}</p>
                    (e.g.: GET https://okki.sleeplessmind.com.mo/api/v1/user/22)
                <div class="panel-body">
            </div>

        </div>
    </div>
</div>
@endsection
