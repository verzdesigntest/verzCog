@extends('backEnd.layout')
@section('content')
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3><i class="material-icons">&#xe3c9;</i>create company</h3>
                <small>
                    <a href="{{ route('company') }}">Company Management</a> /
                    <a href="#">Edit Company</a>
                </small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link" href="{{route("users")}}">
                            <i class="material-icons md-18">×</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="box-body">
                {{Form::open(['route'=>['companyStore'],'method'=>'POST', 'files' => true])}}


                <div class="form-group row">
                    <label for="name"
                           class="col-sm-3 form-control-label">Company Name
                    </label>
                    <div class="col-sm-9">
                        {!! Form::text('name','', array('placeholder' => '','class' => 'form-control','id'=>'name','required'=>'')) !!}
                    </div>
                </div>

                  <div class="form-group row">
                    <label for="name"
                           class="col-sm-3 form-control-label"> Domain Name
                    </label>
                    <div class="col-sm-9">

                        {!! Form::text('domain','', array('placeholder' => '','class' => 'form-control','id'=>'domain','required'=>'')) !!}
                    </div>
                </div>  

                <div class="form-group row m-t-md">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                &#xe31b;</i> Create</button>
                        <a href="{{route("users")}}"
                           class="btn btn-default m-t"><i class="material-icons">
                                &#xe5cd;</i> {!! trans('backLang.cancel') !!}</a>
                    </div>
                </div>

                {{Form::close()}}
            </div>
        </div>
    </div>
@endsection
