@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Project - {{{ $project->title }}}</div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped"> 
                            <tr> {{{ $project->description }}} </tr>
                            <tr> {{{ $project->status }}} </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
