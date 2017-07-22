@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Job Category</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/storeJC">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Job Category Name</label>

                            <div class="col-md-6">
                                <input id="jobCatName" type="text" class="form-control" name="jobCatName" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Job Category Code</label>

                            <div class="col-md-6">
                                <input id="jobCatCode" type="text" class="form-control" name="jobCatCode" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Job Category Description</label>

                            <div class="col-md-6">
                                <input id="jobCatDesc" type="text" class="form-control" name="jobCatDesc" required autofocus>
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Add Job Category
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
