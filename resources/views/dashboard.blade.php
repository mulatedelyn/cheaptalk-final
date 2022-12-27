@extends('base')

@extends('navbar')

@section('title', 'Dashboard')

@section('content')
    <div class="container mt-3">
        <h1 class="text-center" style="font-weight: 400; color:rgb(235, 226, 226); font-size: 30px;">Dashboard</h1>
        <div class="row " style="position: center; margin-left: 100px;">
            <div class="row mt-5 text-center">
                <div class="row-md-3 mb-2">
                    <div class="container card shadow ">
                        <a href="/recent-post" id="dash-link">
                            <div class="card-body rounded " style="background-color:#23242c;">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-messages text-white mt-3" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-3">
                                        <span class="text-white float-right" id="text">Recent Talk</span><br>
                                        <span class="text-white" id="text2">{{ $allPosts }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row-md-3 mb-2">
                    <div class="container card shadow">
                        <a href="/my-post" id="dash-link">
                            <div class="card-body rounded" style="background-color:#23242c;">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-message text-white mt-3" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-3">
                                        <span class="text-white float-right" id="text">Your Talk</span><br>
                                        <span class="text-white" id="text2">{{ $posts }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @role('admin')
                <div class="row-md-3 mb-2">
                    <div class="container card shadow">
                        <a href="/log" id="dash-link">
                            <div class="card-body rounded" style="background-color:#23242c;">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-list text-white mt-3" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-3">
                                        <span class="text-white float-right" id="text">Total Logs</span><br>
                                        <span class="text-white" id="text2">{{ $logs }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endrole
            </div>
        </div>

    </div>
@endsection

<style>
    .card {
        width: 240px;
    }
    .card:hover {
        transform: scale(1.02);
        transition: transform 0.4s ease;
    }

    #dash-icon {
        font-size: 30px;
        opacity: 0.5;
    }
    #dash-link {
        text-decoration: none;
    }


    .time {
        opacity: 0.8;
    }
    .recent-only {
        border: 1px solid rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        box-shadow: 3px 3px 1px 0px rgba(0, 0, 0, 0.25);
    }
</style>
