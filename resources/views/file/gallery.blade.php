<div class="container">
    <h3>Bildergalerie</h3>
    <div class="row">
        @foreach($files as $file)
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$file->name}}</h3>
                    </div>
                    <div class="panel-body card-body">
                        <img class="img-fluid" src="{{$file->url}}" alt="Card image cap">
                        <p class="card-text">Password: <strong>{{decrypt($file->password)}}</strong></p>
                        <a href="/file/{{$file->short_url}}" class="btn btn-primary">teilen</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
