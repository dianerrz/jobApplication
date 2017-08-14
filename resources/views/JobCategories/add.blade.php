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
                            <label for="name" class="col-md-4 control-label">Job Category Name</label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" name="jobCatName" placeholder="e.g. Customer Service"  autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Job Category Description</label>

                            <div class="col-md-7">
                                <textarea id="jobCatDesc" placeholder="e.g. Customer Service is an integral part of our success as a business, whether it’s our helpful dnata and ABC travel, check in or meet and greet agents, we all work together to provide the best customer experience we are known for." type="text" class="form-control" name="jobCatDesc" style="resize:none; height: 180px;"  autofocus>
                                </textarea>
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