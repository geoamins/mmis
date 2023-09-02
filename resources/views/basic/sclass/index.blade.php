@extends('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'roleslist'
])
@section('contents')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h6 class="card-title">{{ __('Basic.Classes List') }}</h6>

            <div class="card-tools">
                <div class="title_right">
                    <form action="{{ route('province.index') }}" method="GET">
                        <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                            <div class="input-group">

                                    <input type="text" name="search" class="form-control" placeholder="{{ __('Basic.Search for') }}">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary"  type="submit">{{ __('Users.Search') }}</button>
                                    </span>

                            </div>
                        </div>
                    </form>
                </div>

                @can('class-create')
                    <span class="float-right" style="float: right;">
                        <a class="btn btn-primary" href="{{ route('class.create') }}">{{ __('Basic.Add Class') }}</a>
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
                        <th>{{ __('Basic.Class Name') }}</th>
                        <th width="280px">{{ __('Users.Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $class)
                        <tr>
                            <td>{{ $class->ClassID }}</td>
                            <td>{{ $class->ClassName }}</td>
                            <td>
                                {{--  <a class="btn btn-success" href="{{ route('roles.show',$role->id) }}">Show</a>  --}}
                                @can('class-edit')
                                    <a class="btn btn-primary" href="{{ route('class.edit', $class->ClassID) }}">{{ __('Users.Edit') }}</a>
                                @endcan
                                @can('class-delete')

                                    {!! Form::open(['method' => 'DELETE','route' => ['class.destroy', $class->ClassID],'style'=>'display:inline']) !!}

                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-danger del-roles" data-toggle="tooltip" title='Delete'>{{ __('Users.Delete') }}</button>
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
