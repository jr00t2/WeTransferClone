@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Geschützter Inhalt</div>
                    <div class="panel-body">
                        <form action="#" method="post">
                            <input type="hidden" name="short_url" value="{{$file->short_url}}"/>
                            <label for="password">Passwort</label>
                            <input type="password" name="password" class="password"/>
                            <input type="submit" value="Downloaden">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
