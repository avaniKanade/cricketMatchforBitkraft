@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.match.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.matches.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.match.fields.id') }}
                        </th>
                        <td>
                            {{ $match->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.match.fields.start_game') }}
                        </th>
                        <td>
                            {{ $match->start_game }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.match.fields.result_1') }}
                        </th>
                        <td>
                            {{ $match->result_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.match.fields.result_2') }}
                        </th>
                        <td>
                            {{ $match->result_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.match.fields.city') }}
                        </th>
                        <td>
                            {{ $match->city->city ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.match.fields.team_1') }}
                        </th>
                        <td>
                            {{ $match->team_1->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.match.fields.team_2') }}
                        </th>
                        <td>
                            {{ $match->team_2->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.matches.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection