@extends('layouts.app')

@section('content')

    <div class="mobile-session">
        <div class="container">
            <div class="col-sm-4">

                <h1 style="text-transform:uppercase;margin-top: 50px">Compatible design</h1>
                <span class="mobile-circle"></span>
                <span class="mobile-circle"></span>
                <span class="mobile-circle"></span>
                <h3>
                    Our Web application mobile friendly design and portable
                </h3>
            </div>
            <div class="col-sm-3 text-center">
                <img src="images/mobile.png" width="450px" height="350" >
            </div>
        </div>
    </div>
    <div class="stat text-center">
        <div class="container">
            <h3>Numbers And Fact </h3>
            <div class="col-sm-4 sub-stat">
                <div class="icon-stata">
                    <i class="fa fa-download "></i>
                </div>
                <p>1 million download </p>
            </div>

            <div class="col-sm-4 sub-stat">
                <div class="icon-stata">
                    <i class="fa fa-bolt "></i>
                </div>
                <p> 300,000 Daily Active Users </p>
            </div>
            <div class="col-sm-4 sub-stat">
                <div class="icon-stata">
                    <i class="fa fa-check "></i>
                </div>
                <p>900,00 Installed</p>
            </div>
        </div>
    </div>
    <div class="header-landing">
        <div class="container">
            <div class="text col-sm-4 col-sm-offset-1">
                <h1>Learn More</h1>
                <h3>Smart | Easy </h3>
                <p style="    border-bottom: 1px solid #271bc1;
    padding: 10px;
    border-radius: 20px;
">
                    Project is a place to gain and share knowledge. It's a platform to ask questions and connect with people who contribute unique insights and quality answers.,<br>
                    <a href="{{ route('ch2.index') }}">Start Learn Now !</a>

                </p>
            </div>
            <div class="col-sm-6 ">
                <img width="550px" height="450px"  src="images/team.png">
            </div>
        </div>
    </div>
    <div class="connect">
        <div class="container">
            <div class="col-sm-5 col-sm-offset-1">
                <a href="{{ route('ch3.index') }}" class="pull-right btn btn-warning" style="color: #423a3a;
    background-color: #f9c004;
    border-color: #eab300;
}">Smart Board </a>
            </div>
            <div class="col-sm-6 ">
                <a href="{{ route('ch2.index') }}" class="text-center btn btn-success" style="color: #423a3a;
    background-color: #271bc1;
    border-color: #271bc1;
    color:#fff;
}">Discussion Platform </a>
            </div>
        </div>
    </div>


@endsection
