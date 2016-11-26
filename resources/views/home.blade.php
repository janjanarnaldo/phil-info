@extends('main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-body">
                    @foreach($post as $key => $postitem)
                    <div class="ui three column very relaxed grid">
                      <div class="ui container">
                          <div class="column">
                            <h1>{{ $postitem->subject }}</h1>
                            <p>{{  $postitem->body}}</p>
                          </div>
                      </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
