@extends('adminlte::page')

@section('title', 'Employes | '.$employe->fullname)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card my-5">
                <div class="card-header bg-white text-center p-3">
                    <h3 class="text-dark">
                        Demande de vacances
                    </h3>
                </div>
                <div class="card-body">
                    <p class="lead">
                        <b>{{$employe->fullname}}</b> travaille actuellement avec moi dans les domaines suivants :
                    </p>
                    <p class="lead">
                        <b>{{$employe->depart}}</b> département.
                    </p>
                    <p class="lead">
                        Il demande des vacances à partir de <b>...............</b>
                    </p>
                    <p class="lead">
                        Et se termine le <b>...............</b>
                    </p>

                    <p class="m-5">
                        ...............
                        ...............
                    </p>
                    <a href="#" id="printPageButton" class="btn btn-sm btn-primary mb-3" onclick="document.getElementById('printPageButton').style.display = 'none';window.print();" class="btn btn-md btn-primary mr-2 mb-2">
                        <i class="fas fa-print"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


