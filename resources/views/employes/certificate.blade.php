@extends('adminlte::page')

@section('title', 'Employes | '.$employe->fullname)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-5">
                <div class="card-header bg-white text-center p-3">
                    <h3 class="text-dark">
                        Certificat de travail
                    </h3>
                </div>
                <div class="card-body">
                    <p class="lead">
                        Il s'agit de certifier que <b>{{$employe->fullname}}</b> est actuellement employé avec moi dans les activités suivantes :
                    </p>
                    <p class="lead">
                        <b>{{$employe->depart}}</b> departement.
                    </p>
                    <p class="lead">
                        Leur emploi a débuté le <b>{{$employe->hire_date}}</b>
                    </p>
                    <p class="lead">
                        Cette certification est délivrée à la demande de <b>{{$employe->fullname}}</b> à quelque fin juridique qu'elle puisse servir.
                    </p>
                    <p class="lead">
                        Publié le <b>{{\Carbon\Carbon::today()->toDateString()}}</b> à <b>{{\Carbon\Carbon::now()->toTimeString()}}</b>
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


