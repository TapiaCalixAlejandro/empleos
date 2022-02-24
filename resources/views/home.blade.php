@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container">
    <h4 class="text-center text-success">Administrador de vacantes</h4>
    <div class="card shadow">
        <table class="table">
            <thead class="table-light table-sm">
                <tr>
                    <th class="fw-normal">VACANTE</th>
                    <th class="fw-normal">ESTADO</th>
                    <th class="fw-normal">CANDIDATOS</th>
                    <th class="fw-normal">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vacant as $item)
                <tr>
                    <td class="align-middle">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{$item->name}}</h5>
                        </div>
                        <small class="text-secondary">Categoría: {{$item->category->name}}</small>
                    </td>
                    <td class="align-middle">
                        @if($item->status === 1)
                            <span class="badge bg-success">Activo</span>
                        @else
                            <span class="badge bg-danger">Desactivado</span>
                        @endif
                    </td>
                    <td></td>
                    <td class="align-middle">
                        <a href="" class="btn btn-link text-secondary text-decoration-none">Editar</a>
                        <a href="" class="btn btn-link text-secondary text-decoration-none">Mostrar</a>
                        <a href="" class="btn btn-link text-danger text-decoration-none">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
