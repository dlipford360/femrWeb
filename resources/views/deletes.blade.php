@extends('layouts.appFemr')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h1>Deleted Surveys</h1></center></div>

                    <div class="panel-body">
                        <div class="table-responsive">

                            {!! Form::open([ 'method' => 'POST', 'action' => 'ApprovalsController@viewDeletes' ]) !!}
                            <table class="table table-striped">

                                <thead>
                                <tr>
                                    <th>Team Name</th>
                                    <th>Locale</th>
                                    <th>Months of Travel</th>
                                    <th>Contact Info</th>
                                    <th>Date Deleted</th>
                                </tr>
                                </thead>

                                @foreach($surveys as $survey)

                                    <tr>

                                        <td><a href="#teamname">{{$survey->teamname}}</a></td>
                                        <td> @foreach($survey->places as $place)
                                                <li>{{$place->place}}</li>
                                            @endforeach</td>
                                        <td>{{$survey->monthsoftravel}}</td>
                                        <td>{{$survey->contactinfo}}</td>
                                        <td>{{$survey->deleted_at}}</td>

                                    </tr>


                                @endforeach

                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection