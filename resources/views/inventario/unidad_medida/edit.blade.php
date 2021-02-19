@extends('layouts.app')

@section('content')

@section('style')
<!-- iCheck -->
<link rel="stylesheet" href="{{asset('css/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('css/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('css/OverlayScrollbars.min.css')}}">
@endsection
-
<!-- navbar -->
@include('shared.navbar')

<!-- asidebar -->
@include('shared.asidebar')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">EDITAR UNIDAD DE MEDIDA</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item active">Usuarios</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form class="row g-3" action="/unidadmedida/{{$unidad->id}}" method="post">
                         @csrf
                         @method('PUT')
                            <div class="col-md-4">
                                <label class="form-label">Codigo</label>
                                <input type="text" class="form-control" id="codigo" name="codigo" value="{{$unidad->id}}" readonly>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$unidad->nombre}}" required>
                            </div>
                            <div class="col-12">
                                <p></p>
                                <a href="/unidadmedida" class="btn btn-secondary">Cancelar</a>
                                <button class="btn btn-primary" type="submit" tabindex="4">Guardar</button>
                            </div>
                            </form>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>

<!-- footer -->
@include('shared.footer')

@endsection