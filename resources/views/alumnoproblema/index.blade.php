@extends('layouts.app')

@section('template_title')
    Problemas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Problemas a resolver') }}
                            </span>

                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">

                        
                            @foreach ($problemas as $problema)
                                <div class="col-4">

                               
                                <div class="card">
                                    <div class="card-header">
                                        {{ $problema->titulo }}
                                    </div>
                                    <div class="card-body">
                                        {{ $problema->descripcion }}
                                    </div>
                                    <div class="float-right">
                                        <a href="#" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                            Resolver
                                        </a>
                                    </div>
                                </div>
                                </div>
                            @endforeach     
                            </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
