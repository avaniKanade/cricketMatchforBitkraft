@extends('layouts.front')
@section('content')
    <div class="row" style="text-align:center";>
        <div class="col-md-8 col-md-offset-2" style="text-align:center";>
            <h1>Matches</h1>
            <table class="table" >
                    <tr>
                        <th>Start</th>
                        <th>Teams</th>
                    </tr>
                    @forelse($matches as $match)
                        <tr>
                            <td>{{ $match->start_time }}</td>
                            <td>{{ $match->team1 }} - {{ $match->team2 }}</td> 
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">No games.</td>
                        </tr>
                    @endforelse
                </table>
<hr>
<br>

<table class="table" style="text-align:center";>
                    <tr>
                        <th>Start</th>
                        <th>Teams</th>
                    </tr>
                    @forelse($matches as $match)
                        <tr>
                            <td>{{ $match->start_time }}</td>

                            <td>{{ $match->team_1_id->name }} - {{ $match->team_1_id->name}}</td>
                        </tr>
                        
                    @empty
                        <tr>
                            <td colspan="2">No games.</td>
                        </tr>
                    @endforelse
                </table>
        </div>
    </div>
@endsection