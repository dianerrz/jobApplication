@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
        @if (Auth::user()->email !== 'admin@admin.com')
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        You are logged in!
                    </div>
                </div>
            </div>
        @else
        <h1>Welcome, {{Auth::user()->name}}!</h1>
        <hr>
        <div class="col-md-4 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="form-group">
                        <label class="pull-left">
                            Job Categories
                        </label>
                        <label class="pull-right">
                            <a href="{{ url('/addJobCategories') }}" title="Add Job Category">+</a>
                        </label>
                    </div>
                </div>

                <div class="panel-body">
                    <?php $count=0; ?>
                    @foreach ($JobCategories as $JobCategory)
                        <?php $count+=1;  ?>
                        
                    @endforeach
                    @if ($count == '0')
                    {{$count}} Job Category
                    @elseif ($count == '1')
                    <a href="{{ url('/jobCategories') }}" title="View Job Category">{{$count}} Job Category</a>
                    @else
                    <a href="{{ url('/jobCategories') }}" title="View All Job Categories">{{$count}} Job Categories</a>
                    @endif
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="form-group">
                        <label class="pull-left">
                            Job Vacancies
                        </label>
                        <label class="pull-right">
                            <a href="{{ url('/addJobVacancies') }}" title="Add Job Vacancy">+</a>
                        </label>
                    </div>
                </div>

                <div class="panel-body">
                    <?php $count=0; ?>
                    @foreach ($JobVacancies as $JobVacancy)
                        <?php $count+=1;  ?>
                        
                    @endforeach
                    @if ($count == '0')
                    {{$count}} Job Vacancy
                    @elseif ($count == '1')
                    <a href="{{ url('/jobVacancies') }}">{{$count}} Job Vacancy</a>
                    @else 
                    <a href="{{ url('/jobVacancies') }}">{{$count}} Job Vacancies</a>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="form-group">
                        <label class="pull-left">
                            Applicants Information
                        </label>
                        <label class="pull-right">
                            <a href="{{ url('/addApplicants') }}" title="Add Applicant">+</a>
                        </label>
                    </div>
                </div>

                <div class="panel-body">
                    admin
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="form-group">
                        <label class="pull-left">
                            Administrators
                        </label>
                        <label class="pull-right">
                            <a href="{{ url('/addJobCategories') }}" title="Add Administrator">+</a>
                        </label>
                    </div>
                </div>

                <div class="panel-body">
                    admin
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
