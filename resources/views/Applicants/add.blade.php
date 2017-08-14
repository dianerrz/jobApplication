@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="form-group">
                        <label class="pull-left">
                            Add Job Category
                        </label>
                    </div>
                </div>
                <div class="panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @if(count($errors))
                    <div class="alert alert-warning">
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </div>
                @endif
                    <form class="form-horizontal" method="POST" action="/storeJC">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Email</label>

                            <div class="col-md-7">
                                <input type="email" class="form-control" name="jobCatName"autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Password</label>

                            <div class="col-md-7">
                                <input id="jobCatCode" type="password" class="form-control" name="jobCatCode" autofocus>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Re-type Password</label>

                            <div class="col-md-7">
                                <input id="jobCatCode" type="password" class="form-control" name="jobCatCode"autofocus>
                                
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4" >
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Add Job Category
                                </button>
                                <a href="\jobCategories" class="btn btn-warning btn-lg">
                                    Cancel
                                </a>
                            </div>
                                
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection