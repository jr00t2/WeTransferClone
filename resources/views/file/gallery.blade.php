<div class="container">
    <h3>Bildergalerie</h3>
    <div class="row">
        <div class="alert alert-success copied-text">
            Text kopiert
        </div>
        @foreach($files as $file)
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$file->name}}</h3>
                    </div>
                    <div class="panel-body card-body">
                        <img class="img-fluid" src="{{$file->url}}" alt="Card image cap">
                        <p class="card-text">Password: <strong>{{decrypt($file->password)}}</strong></p>
                        <input class="text-to-copy" value="{{url('/file', $file->short_url)}}" />
                        <a onclick="copyToClipboard($(this))" href="#" class="btn btn-primary"><i class="glyphicon glyphicon-copy"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
