@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.match.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.matches.update", [$match->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="start_game">{{ trans('cruds.match.fields.start_game') }}</label>
                <input class="form-control datetime {{ $errors->has('start_game') ? 'is-invalid' : '' }}" type="text" name="start_game" id="start_game" value="{{ old('start_game', $match->start_game) }}">
                @if($errors->has('start_game'))
                    <div class="invalid-feedback">
                        {{ $errors->first('start_game') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.match.fields.start_game_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="result_1">{{ trans('cruds.match.fields.result_1') }}</label>
                <input class="form-control {{ $errors->has('result_1') ? 'is-invalid' : '' }}" type="number" name="result_1" id="result_1" value="{{ old('result_1', $match->result_1) }}" step="1">
                @if($errors->has('result_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('result_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.match.fields.result_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="result_2">{{ trans('cruds.match.fields.result_2') }}</label>
                <input class="form-control {{ $errors->has('result_2') ? 'is-invalid' : '' }}" type="text" name="result_2" id="result_2" value="{{ old('result_2', $match->result_2) }}">
                @if($errors->has('result_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('result_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.match.fields.result_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="city_id">{{ trans('cruds.match.fields.city') }}</label>
                <select class="form-control select2 {{ $errors->has('city') ? 'is-invalid' : '' }}" name="city_id" id="city_id">
                    @foreach($cities as $id => $entry)
                        <option value="{{ $id }}" {{ (old('city_id') ? old('city_id') : $match->city->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('city'))
                    <div class="invalid-feedback">
                        {{ $errors->first('city') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.match.fields.city_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="team_1_id">{{ trans('cruds.match.fields.team_1') }}</label>
                <select class="form-control select2 {{ $errors->has('team_1') ? 'is-invalid' : '' }}" name="team_1_id" id="team_1_id">
                    @foreach($team_1s as $id => $entry)
                        <option value="{{ $id }}" {{ (old('team_1_id') ? old('team_1_id') : $match->team_1->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('team_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('team_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.match.fields.team_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="team_2_id">{{ trans('cruds.match.fields.team_2') }}</label>
                <select class="form-control select2 {{ $errors->has('team_2') ? 'is-invalid' : '' }}" name="team_2_id" id="team_2_id">
                    @foreach($team_2s as $id => $entry)
                        <option value="{{ $id }}" {{ (old('team_2_id') ? old('team_2_id') : $match->team_2->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('team_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('team_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.match.fields.team_2_helper') }}</span>
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