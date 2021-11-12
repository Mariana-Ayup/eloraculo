@extends('layouts.app')

@section('content')
<div class="container">
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

                    {{ __('BIENVENIDOS A EL ORACULO!') }}


                    <input type="textarea" name="myTextarea" id="myTextarea">
                    <!-- Create a simple CodeMirror instance -->
                    <link rel="stylesheet" href="css/codemirror.css">
                    <script src="js/codemirror.js"></script>
                    <script>
                        var editor = CodeMirror.fromTextArea(myTextarea, {

                        lineNumbers: true,
                        theme: 'dracula',
                        matchBrackets: true,
                        mode: "application/x-httpd-php",
                        indentUnit: 4,
                        indentWithTabs: true,
                        tabSize: 4,
                        lineWrapping: true,
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
