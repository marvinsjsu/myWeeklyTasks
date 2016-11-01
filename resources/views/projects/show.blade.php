@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Project - {{{ $project->title }}}</strong></div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped"> 
                            <tbody>
                                <tr>
                                    <th>Project Details</th>
                                </tr>
                                <tr> 
                                    <td><strong>Description:</strong> {{{ $project->description }}} </td>
                                </tr>
                                <tr> 
                                    <td><strong>Status:</strong> {{{ $project->status }}} </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped"> 
                            <tr><th>Comments</th></tr>
                            @foreach($project->comments as $comment)
                               <tr> 
                                    <td> 
                                        {{{ $comment->content }}} <br/><br/>
                                        - {{{ $comment->user->name }}} 
                                    </td> 
                                </tr>
                            @endforeach
                        </table>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
