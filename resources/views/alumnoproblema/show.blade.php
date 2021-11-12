@extends('layouts.app')

@section('template_title')
    {{ $problema->name ?? 'Show Problema' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Problema</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('problemas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $problema->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $problema->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $problema->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $problema->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Solucion Id:</strong>
                            {{ $problema->solucion_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
