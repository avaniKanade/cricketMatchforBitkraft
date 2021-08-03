<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMatchRequest;
use App\Http\Requests\StoreMatchRequest;
use App\Http\Requests\UpdateMatchRequest;
use App\Match;
use App\Team;
use App\Venue;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MatchesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('match_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $matches = Match::with(['city', 'team_1', 'team_2'])->get();

        return view('admin.matches.index', compact('matches'));
    }

    public function create()
    {
        abort_if(Gate::denies('match_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cities = Venue::pluck('city', 'id')->prepend(trans('global.pleaseSelect'), '');

        $team_1s = Team::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $team_2s = Team::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.matches.create', compact('cities', 'team_1s', 'team_2s'));
    }

    public function store(StoreMatchRequest $request)
    {
        $match = Match::create($request->all());

        return redirect()->route('admin.matches.index');
    }

    public function edit(Match $match)
    {
        abort_if(Gate::denies('match_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cities = Venue::pluck('city', 'id')->prepend(trans('global.pleaseSelect'), '');

        $team_1s = Team::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $team_2s = Team::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $match->load('city', 'team_1', 'team_2');

        return view('admin.matches.edit', compact('cities', 'team_1s', 'team_2s', 'match'));
    }

    public function update(UpdateMatchRequest $request, Match $match)
    {
        $match->update($request->all());

        return redirect()->route('admin.matches.index');
    }

    public function show(Match $match)
    {
        abort_if(Gate::denies('match_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $match->load('city', 'team_1', 'team_2');

        return view('admin.matches.show', compact('match'));
    }

    public function destroy(Match $match)
    {
        abort_if(Gate::denies('match_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $match->delete();

        return back();
    }

    public function massDestroy(MassDestroyMatchRequest $request)
    {
        Match::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
