@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.result.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.results.update", [$result->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="winnerteam_id">{{ trans('cruds.result.fields.winnerteam') }}</label>
                <select class="form-control select2 {{ $errors->has('winnerteam') ? 'is-invalid' : '' }}" name="winnerteam_id" id="winnerteam_id">
                    @foreach($winnerteams as $id => $entry)
                        <option value="{{ $id }}" {{ (old('winnerteam_id') ? old('winnerteam_id') : $result->winnerteam->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('winnerteam'))
                    <div class="invalid-feedback">
                        {{ $errors->first('winnerteam') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.result.fields.winnerteam_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="second_team_id">{{ trans('cruds.result.fields.second_team') }}</label>
                <select class="form-control select2 {{ $errors->has('second_team') ? 'is-invalid' : '' }}" name="second_team_id" id="second_team_id">
                    @foreach($second_teams as $id => $entry)
                        <option value="{{ $id }}" {{ (old('second_team_id') ? old('second_team_id') : $result->second_team->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('second_team'))
                    <div class="invalid-feedback">
                        {{ $errors->first('second_team') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.result.fields.second_team_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection