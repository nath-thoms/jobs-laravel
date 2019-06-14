@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$job->position}}</div>

                <div class="card-body">
                    <h3>Description</h3>
                    <p>{{$job->description}}</p>
                    <h3>Duties</h3>
                    <p>{{$job->roles}}</p>

                    

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Short Info</div>

                <div class="card-body">
                    <p>Company:</p>
                    <p>Address: {{$job->address}}</p>
                    <p>Type: {{$job->type}}</p>
                    <p>Position: {{$job->position}}</p>
                    <p>Posted: {{$job->created_at->diffForHumans()}}</p>

                    

                </div>
            </div>
        </div>


    </div>
</div>
@endsection