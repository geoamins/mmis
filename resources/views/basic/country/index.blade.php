@extends('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'roleslist'
])
@section('contents')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h6 class="card-title">{{ __('Basic.Country List') }}</h6>

            <div class="card-tools">
                <div class="title_right">
                    <form action="{{ route('country.index') }}" method="GET">
                        <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                            <div class="input-group">

                                    <input type="text" name="search" class="form-control" placeholder="{{ __('Basic.Please Enter your Country name here!') }}">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary"  type="submit">{{ __('Basic.go!') }}</button>
                                    </span>

                            </div>
                        </div>
                    </form>
                </div>

                @can('role-create')
                    <span class="float-right" style="float: right;">
                        <a class="btn btn-primary" href="{{ route('country.create') }}">{{ __('Basic.Add Country') }}</a>
                    </span>
                @endcan
            </div>
        </div>
        <div class="card-body">
            {{ $data->render() }}
            <table id="myTable" class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>{{ __('Users.#') }}</th>
                        <th>{{ __('Basic.Country Name') }}</th>
                        <th width="280px">{{ __('Users.Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $basic)
                        <tr>
                            <td>{{ $basic->CountryID }}</td>
                            <td>{{ $basic->CountryName }}</td>
                            <td>
                                {{--  <a class="btn btn-success" href="{{ route('roles.show',$role->id) }}">Show</a>  --}}
                                @can('country-edit')
                                    <a class="btn btn-primary" href="{{ route('country.edit', $basic->CountryID) }}">{{ __('Users.Edit') }}</a>
                                @endcan
                                @can('country-delete')

                                    <button type="submit" data-id="delete-country" class="btn btn-danger del-popup" data-toggle="tooltip" title='Delete'>{{ __('Users.Edit') }}</button>
                                    {!! Form::open(['id' => 'delete-country', 'method' => 'DELETE','route' => ['country.destroy', $basic->CountryID],'style'=>'display:inline']) !!}

                                    <input name="_method" type="hidden" value="DELETE">
                                    {!! Form::close() !!}

                                    {{--  <form action="{{ url('/basic', $data->CountryID) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger del-roles" data-toggle="tooltip" title='Delete'>Delete</button>
                                    </form>  --}}
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->render() }}
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
@endsection
