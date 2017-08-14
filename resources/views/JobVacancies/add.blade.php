@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="form-group">
                        <label class="pull-left">
                            Add Job Vacancy
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
                            <label for="name" class="col-md-2 control-label">Job Category</label>
                            <div class="col-md-4">
                                <select class="form-control" data-live-search="true">
                                  <option disabled="" selected="">Choose Job Category</option>
                                  @foreach($categories as $categoria)
                                      <option data-tokens="{{$categoria->jobCatName}}" value="{{$categoria->id}}">{{$categoria->jobCatName}}</option>
                                  @endforeach
                                </select> 
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Job Name</label>

                            <div class="col-md-4">
                                <input type="text" class="form-control" name="jobVacName" placeholder="e.g. Customer Service"  autofocus>
                            </div>
                            <label for="name" class="col-md-2 control-label">Job Closing Date</label>
                            <div class="col-md-4">
                                <input type="date" class="form-control" name="jobVacCD"  autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Job Description</label>

                            <div class="col-md-4">
                                <textarea id="jobVacDesc" placeholder="e.g. Customer Service is an integral part of our success as a business, whether it’s our helpful dnata and ABC travel, check in or meet and greet agents, we all work together to provide the best customer experience we are known for." type="text" class="form-control" name="jobVacDesc" style="resize:none; height: 150px;"  autofocus>
                                </textarea>
                            </div>

                            <label for="name" class="col-md-2 control-label">Job Qualification</label>

                            <div class="col-md-4">
                                <textarea id="jobVacQual" placeholder="e.g. Customer Service is an integral part of our success as a business, whether it’s our helpful dnata and ABC travel, check in or meet and greet agents, we all work together to provide the best customer experience we are known for." type="text" class="form-control" name="jobVacQual" style="resize:none; height: 150px;"  autofocus>
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Job Required Skills</label>

                            <div class="col-md-4">
                                <textarea id="jobVacSkills" placeholder="e.g. Customer Service is an integral part of our success as a business, whether it’s our helpful dnata and ABC travel, check in or meet and greet agents, we all work together to provide the best customer experience we are known for." type="text" class="form-control" name="jobVacSkills" style="resize:none; height: 150px;"  autofocus>
                                </textarea>
                            </div>
                            <label for="name" class="col-md-2 control-label">Job Salary & Benefits</label>

                            <div class="col-md-4">
                                <textarea id="jobVacSalBen" placeholder="e.g. Customer Service is an integral part of our success as a business, whether it’s our helpful dnata and ABC travel, check in or meet and greet agents, we all work together to provide the best customer experience we are known for." type="text" class="form-control" name="jobVacSalBen" style="resize:none; height: 150px;"  autofocus>
                                </textarea>
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <center>
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Add Job Vacancy
                                </button>
                                <a href="\jobCategories" class="btn btn-warning btn-lg">
                                    Cancel
                                </a>
                           </center>
                                
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection