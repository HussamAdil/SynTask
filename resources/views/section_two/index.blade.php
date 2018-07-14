@extends('layouts.app_two')

@section('content')

        <div class="col-md-9">
    <div class="row">
        <div class="col-md-12 mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
            </nav>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="card bg-primary mt-3">
                <div class="card-body">
                    <h2 class="">Questions</h2>
                    <hr>
                    <div class="list-group">
                        <a href="{{ route('read', 15) }}" class="list-group-item list-group-item-action ">
                            Cras justo odio
                        </a>
                        <a href="{{ route('read', 15) }}" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                        <a href="{{ route('read', 15) }}" class="list-group-item list-group-item-action">Morbi leo risus</a>
                        <a href="{{ route('read', 15) }}" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                        <a href="{{ route('read', 15) }}" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                    </div>
                </div>
            </div>
        </div>
        {{--<hr class="col-md-12">--}}
        <div class="col-sm-12 col-md-6">
            <div class="card bg-primary mt-3">
                <div class="card-body">
                    <h2 class="">Acadimic Topics</h2>
                    <hr>
                    <div class="list-group">
                        <a href="{{ route('read', 15) }}" class="list-group-item list-group-item-action">
                            Cras justo odio
                        </a>
                        <a href="{{ route('read', 15) }}" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                        <a href="{{ route('read', 15) }}" class="list-group-item list-group-item-action">Morbi leo risus</a>
                        <a href="{{ route('read', 15) }}" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                        <a href="{{ route('read', 15) }}" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection