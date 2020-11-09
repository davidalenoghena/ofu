@extends ('admin.layouts.master')

@section ('content')

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
           
        </div>

        <div class="content mt-3">
            <br>
            <br>
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                        </div>
                        <h4 class="mb-0">
                            <span class="count">{{$letter->count()}} </span>
                        </h4>
                        <p class="text-light">Number of Subscribers</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        
                        <h4 class="mb-0">
                            <span class="count">{{ $blog->count() }} </span>
                        </h4>
                        <p class="text-light">Number of Blog Posts</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        
                        <h4 class="mb-0">
                            <span class="count">{{$opportunity->count() }} </span>
                        </h4>
                        <p class="text-light">Number of Scholarships</p>

                    </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart3"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
            <div class="card text-white bg-flat-color-4">
                <div class="card-body pb-0">
                    
                    <h4 class="mb-0">
                                    <span class="count">{{ $intern->count() }} </span>
                                </h4>
                    <p class="text-light">Number of Internships</p>

                    <div class="chart-wrapper px-3" style="height:70px;" height="70" />
                    <canvas id="widgetChart4"></canvas>
                </div>

            </div>
        </div>
    </div>
            <!--/.col-->

            
            <!--/.col-->

            
                <!--/social-box-->
            </div>
            <!--/.col-->
            @endsection


       