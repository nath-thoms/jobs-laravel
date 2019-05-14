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

            @for($i=0; $i<10;$i++)

            <tr>
                <td><img src="{{asset('avatar/avatar.png')}}"
                    width="80">
                </td>
                <td>Position: Front-End Developer
                    <br>
                    <i class="far fa-clock" aria-hidden="true"></i> Full-time
                </td>
                <td><i class="fa fa-map-marker-alt" aria-hidden="true"></i> Address: Manchester</td>
                <td><i class="far fa-calendar-alt"></i> Date: 01/06/19</td>
                <td><button class="btn btn-success btn-sm">Apply</button></td>
            </tr>

            @endfor
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