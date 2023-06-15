@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title', 'Employes List')

@section('content_header')
@endsection

@section('content')
<div class="row">
    <div class="col-md-10 mx-auto">
        {{--  --}}
        <div class="card my-3">
            <div class="card-header">
                <h3 class="text-center text-uppercase">
                    Employes
                </h3>
            </div>
            <div class="card-body">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fullname</th>
                            <th>Departement</th>
                            <th>Hired</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employes as $key => $employe)
                            <tr>
                                <td>{{$key+=1}}</td>
                                <td>{{$employe->fullname}}</td>
                                <td>{{$employe->depart}}</td>
                                <td>{{$employe->hire_date}}</td>
                                <td class="d-flex justify-content-center align-items-center">
                                    <a href="{{route("employes.show",$employe->registration_number)}}"
                                        class="btn btn-sm btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{route("employes.edit",$employe->registration_number)}}"
                                        class="btn btn-sm btn-warning mx-2">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form id="{{$employe->registration_number}}" action="{{route("employes.destroy",$employe->registration_number)}}" method="post">
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                    <button onclick="deleteAd({{$employe->registration_number}})"
                                        type="submit" class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'csv', 'pdf', 'print', 'colvis'
                ]
            });
        });
    </script>
    
    @if(session()->has("success"))
    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: "{{session()->get('success')}}",
            showConfirmButton: false,
            timer: 3500
        });
    </script>
    @endif
@stop