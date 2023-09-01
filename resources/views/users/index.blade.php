@php $locale = session()->get('locale'); @endphp

@extends('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'userlist'
])
@section('contents')
<section class="content-header">
    {{-- <h1>Users</h1> --}}
</section>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ __('users.Users list') }}
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('users.index') }}" method="GET" class="form-inline">
                        <div class="input-group">
                            <input type="text" name="name" class="form-control" placeholder="{{ __('users.Search by name') }}">
                            <div class="input-group-btn">
                                <button class="btn btn-primary" type="submit">{{ __('users.Search') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 text-right">
                    <a class="btn btn-primary" href="{{ route('users.create') }}">{{ __('users.New User') }}</a>
                </div>
            </div>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>{{ __('users.#') }}</th>
                        <th>{{ __('users.Name') }}</th>
                        <th>{{ __('users.Email') }}</th>
                        <th>{{ __('users.Roles') }}</th>
                        <th>{{ __('users.Image') }}</th>
                        <th width="280px">{{ __('users.Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if(!empty($user->getRoleNames()))
                                    @foreach($user->getRoleNames() as $val)
                                        <label class="badge badge-dark">{{ $val }}</label>
                                    @endforeach
                                @endif
                            </td>
                            <td>
                                <img width="50" src="{{ asset('images/' . $user->image) }}" />
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{ route('users.show',$user->id) }}">{{ __('users.Show') }}</a>
                                @can('user-edit')
                                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">{{ __('users.Edit') }}</a>
                                @endcan
                                @can('user-delete')
                                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="btn btn-danger del-roles" data-toggle="tooltip" title='Delete'>{{ __('users.Edit') }}</button>
                                    {!! Form::close() !!}
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-right">
                {{ $data->render() }}
            </div>
        </div>
    </div>
</div>
@endsection
