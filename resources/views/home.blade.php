@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

        <style>
            .tulisan {
                font-size: 14pt;
                background:#1ABC9C;
                color:#fff;
                text-decoration: none;
                padding: 8px;
                font-family: sans-serif;
            }
        </style>
                <a background:#1ABC9C color:#fff class=tulisan href="/Daftar_Game">Beranda_Game </a>
            </div>
        </div>
    </div>
</div>
@endsection
