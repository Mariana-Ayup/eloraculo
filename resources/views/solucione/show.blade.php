@extends('layouts.app')

@section('template_title')
    {{ $solucione->name ?? 'Show Solucione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Solucione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('soluciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $solucione->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Codig:</strong>
                            {{ $solucione->codig }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
