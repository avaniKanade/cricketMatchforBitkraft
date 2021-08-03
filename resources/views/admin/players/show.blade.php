@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.player.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.players.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.player.fields.id') }}
                        </th>
                        <td>
                            {{ $player->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.player.fields.name') }}
                        </th>
                        <td>
                            {{ $player->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.player.fields.surname') }}
                        </th>
                        <td>
                            {{ $player->surname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.player.fields.country') }}
                        </th>
                        <td>
                            {{ $player->country->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.player.fields.team') }}
                        </th>
                        <td>
                            {{ $player->team->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.players.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection