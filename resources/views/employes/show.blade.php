@extends('adminlte::page')

@section('title', 'Employes | Show')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="card my-5">
                <div class="card-header bg-white text-center p-3">
                    <h3 class="text-dark text-bold">
                        {{$employe->fullname}}
                    </h3>
                </div>
                <div class="card-body">
                    <div class="form-group row mb-0">
                        <div class="col-md-12">
                            <a href="{{route('work.vacation',$employe->registration_number)}}"
                                class="btn btn-outline-dark">
                                Vacation request
                            </a>
                            <a href="{{route('work.certificate',$employe->registration_number)}}"
                                class="btn btn-outline-danger">
                                Work certificate
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group mb-3">
                        <label class="form-label fw-bold" for="registration_number">Registration Number</label>
                        <input disabled type="text" name="registration_number" value="{{$employe->registration_number}}"  placeholder="Registration Number" class="form-control rounded-0">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label fw-bold" for="depart">Departement</label>
                        <input disabled type="text" class="form-control rounded-0" value="{{$employe->depart}}"  name="depart" placeholder="Departement">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label fw-bold" for="hire_date">Hiring Date</label>
                        <input disabled type="date" class="form-control rounded-0" value="{{$employe->hire_date}}"  placeholder="Hiring Date" name="hire_date">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label fw-bold" for="phone">Phone</label>
                        <input disabled type="text" class="form-control rounded-0" value="{{$employe->phone}}"  placeholder="Phone" name="phone">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label fw-bold" for="address">Address</label>
                        <input disabled type="text" class="form-control rounded-0" value="{{$employe->address}}"  placeholder="Address" name="address">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label fw-bold" for="city">City</label>
                        <input disabled type="text" class="form-control rounded-0" value="{{$employe->city}}"  placeholder="City" name="city">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
