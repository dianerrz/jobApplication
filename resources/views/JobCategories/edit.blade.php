@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="form-group">
                        <label class="pull-left">
                            Edit Job Category
                        </label>
                        <label class="pull-right">
                        <?php $int = $JobCategory->id;
                        $prev = $int-1;
                        $next = $int+1;
                        ?>
                        <a href="\editJobCategories\{{$prev}}"><<</a>
                        <a href="\editJobCategories\{{$next}}">>></a>
                        </label>
                    </div>
                </div>
                <div class="panel-body">
                <label>JOB CATEGORY CODE: <i>{{ $JobCategory->jobCatCode }}</i></label>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                    <form class="form-horizontal" method="POST" action="/jobCategories/{{ $JobCategory->id }}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH')}}
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Job Category Name</label>

                            <div class="col-md-7">
                                <input id="jobCatName" type="text" class="form-control" name="jobCatName" value="{{ $JobCategory->jobCatName }}" required autofocus>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Job Category Description</label>

                            <div class="col-md-7">
                                <textarea id="jobCatDesc" type="text" class="form-control" name="jobCatDesc" value=""style="resize:none; height: 180px;" required autofocus>
                                {{ $JobCategory->jobCatDesc }}
                                </textarea>
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4" >
                                <button type="submit" class="btn btn-success btn-lg">
                                    Update Job Category
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