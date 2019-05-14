@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <h1>Latest Jobs</h1>
       <table class="table">
        <thead>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </thead>
        <tbody>

            @foreach($jobs as $job)

            <tr>
                <td><img src="{{asset('avatar/avatar.png')}}"
                    width="80">
                </td>
                <td>Position: {{$job->position}}
                    <br>
                    <i class="far fa-clock" aria-hidden="true"></i> {{$job->type}}
                </td>
                <td><i class="fa fa-map-marker-alt" aria-hidden="true"></i> {{$job->address}}</td>
                <td><i class="far fa-calendar-alt"></i> Posted: {{$job->created_at->diffForHumans()}}</td>
                <td><button class="btn btn-success btn-sm">Apply</button></td>
            </tr>

            @endforeach
        </tbody>
       </table> 
    </div>
</div>
@endsection

<style>
    .fa {
        color: #4183d7;
    }
    .far {
        color: #4183d7;
    }
</style>