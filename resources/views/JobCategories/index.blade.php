@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="pull-right">{{ $JobCategories->links() }} </div>
            <h2>{{$count}} Available Job Category 
                <div class="pull-right">
                    <a href="{{ url('/addJobCategories') }}" title="Add Job Category">+</a>
                </div>
            </h2>
            @foreach ($JobCategories as $JobCategory)  
            <?php $JobCategories->render(); ?>

            <div class="panel panel-default">
             
                <div class="panel-heading">
                    <div class="form-group">
                        <label class="pull-left">
                            {{$JobCategory->jobCatName}}
                            <i>({{$JobCategory->jobCatCode}})</i>
                        </label>
                        <label class="pull-right">
                            {{$JobCategory->created_at->format('F d, Y')}}
                        </label>
                    </div>
                </div>

                <div class="panel-body">
                <label>Description:</label><br/>
                    {{$JobCategory->jobCatDesc}}
                            
            
                </div>
                <div class="panel-footer">
                <div class="row">
                    <div class="col-md-12">
                    <a href="editJobCategories\{{ $JobCategory->id }}" class="btn btn-primary pull-right">Edit Job Category</a>
                    </div>
                </div>
                </div>
            
            </div>
            @endforeach
            <div class="pull-right">{{ $JobCategories->links() }} 
            </div>
        </div>
    </div>
</div>
@endsection
