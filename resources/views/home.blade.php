@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="container">
                        <h3>Bild teilen</h3>
                        <input type="password" name="password" class="password"/>
                        <input type="button" value="Upload" onclick="upload()"/>
                    </div>
                    @include('file.gallery', compact('files'))
                </div>
            </div>
        </div>
    </div>
@endsection
