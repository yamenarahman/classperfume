@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>
                        <i class="fa fa-picture-o"></i> Slider pics
                    </h4>
                </div>
                <div class="panel-body">

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>
                        <i class="fa fa-gear"></i> Info
                    </h4>
                </div>
                <div class="panel-body">
                    <form action="{{ url('/configurations') }}" class="form-horizontal" method="POST">
                        {{ csrf_field() }} {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="tel" class="col-md-3 control-label">Telephone</label>
                            <div class="col-md-6">
                                <input type="text" name="tel" id="tel" class="form-control" @if($tel) value="{{ $tel }}" @else placeholder="+2 0111 333 5555" @endif>
                            </div>
                        </div>
                        <hr>
                        <h3>Social links</h3>
                        <div class="form-group">
                            <label for="links" class="col-md-1 control-label">
                                <i class="fa fa-facebook"></i>
                            </label>
                            <div class="col-md-10">
                                <input type="text" name="facebook_link" @if($facebook_link) value="{{ $facebook_link }}" @else placeholder="facebook.com/classperfumes" @endif class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="links" class="col-md-1 control-label">
                                <i class="fa fa-twitter"></i>
                            </label>
                            <div class="col-md-10">
                                <input type="text" name="twitter_link" @if($twitter_link) value="{{ $twitter_link }}" @else placeholder="twitter.com/classperfumes" @endif class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="links" class="col-md-1 control-label">
                                <i class="fa fa-youtube"></i>
                            </label>
                            <div class="col-md-10">
                                <input type="text" name="youtube_link" @if($youtube_link) value="{{ $youtube_link }}" @else placeholder="youtube.com/classperfumes" @endif class="form-control">
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-3 col-md-offset-9">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                        <input type="hidden" name="type" value="info">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>
                        <i class="fa fa-tags"></i> Brands
                    </h4>
                </div>
                <div class="panel-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection