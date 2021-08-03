<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyResultRequest;
use App\Http\Requests\StoreResultRequest;
use App\Http\Requests\UpdateResultRequest;
use App\Match;
use App\Result;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ResultController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('result_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $results = Result::with(['winnerteam', 'second_team'])->get();

        return view('admin.results.index', compact('results'));
    }

    public function create()
    {
        abort_if(Gate::denies('result_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $winnerteams = Match::pluck('start_game', 'id')->prepend(trans('global.pleaseSelect'), '');

        $second_teams = Match::pluck('start_game', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.results.create', compact('winnerteams', 'second_teams'));
    }

    public function store(StoreResultRequest $request)
    {
        $result = Result::create($request->all());

        return redirect()->route('admin.results.index');
    }

    public function edit(Result $result)
    {
        abort_if(Gate::denies('result_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $winnerteams = Match::pluck('start_game', 'id')->prepend(trans('global.pleaseSelect'), '');

        $second_teams = Match::pluck('start_game', 'id')->prepend(trans('global.pleaseSelect'), '');

        $result->load('winnerteam', 'second_team');

        return view('admin.results.edit', compact('winnerteams', 'second_teams', 'result'));
    }

    public function update(UpdateResultRequest $request, Result $result)
    {
        $result->update($request->all());

        return redirect()->route('admin.results.index');
    }

    public function show(Result $result)
    {
        abort_if(Gate::denies('result_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $result->load('winnerteam', 'second_team');

        return view('admin.results.show', compact('result'));
    }

    public function destroy(Result $result)
    {
        abort_if(Gate::denies('result_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $result->delete();

        return back();
    }

    public function massDestroy(MassDestroyResultRequest $request)
    {
        Result::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
