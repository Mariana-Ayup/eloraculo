@extends('layouts.app')

@section('template_title')
    Problema
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Problema') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('problemas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Titulo</th>
										<th>Descripcion</th>
										<th>Codigo</th>
										<th>Tipo</th>
										<th>Solucion Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($problemas as $problema)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $problema->titulo }}</td>
											<td>{{ $problema->descripcion }}</td>
											<td>{{ $problema->codigo }}</td>
											<td>{{ $problema->tipo }}</td>
											<td>{{ $problema->solucion_id }}</td>

                                            <td>
                                                <form action="{{ route('problemas.destroy',$problema->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('problemas.show',$problema->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('problemas.edit',$problema->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $problemas->links() !!}
            </div>
        </div>
    </div>
@endsection
