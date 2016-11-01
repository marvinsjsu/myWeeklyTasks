@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Projects</div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <tr>
                                <th>Project Title</th>
                            </tr>
                            @foreach ($projects as $project)
                                <tr>
                                    <td>{{{ $project->title }}}</td>
                                    <td>{{{ $project->description }}}</td>
                                    <td>{{{ $project->status }}}</td>
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
