@extends('admin.adminmain', [
    'menu' => 'basicsetting',
    'sub_menu' => 'roleslist'
])
@section('contents')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h6 class="card-title">{{ __('Basic.Sections List') }}</h6>

            <div class="card-tools">
                <div class="title_right">
                    <form action="{{ route('section.index') }}" method="GET">
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

                @can('section-create')
                    <span class="float-right" style="float: right;">
                        <a class="btn btn-primary" href="{{ route('section.create') }}">{{ __('Basic.Add Section') }}</a>
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
                        <th>{{ __('Basic.Section Name') }}</th>
                        <th>{{ __('Basic.Class Name') }}</th>
                        <th width="280px">{{ __('Users.Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $section)
                        <tr>
                            <td>{{ $section->SectionID }}</td>
                            <td>{{ $section->SectionName }}</td>
                            <td>{{ $section->ClassName }}</td>
                            <td>
                                {{--  <a class="btn btn-success" href="{{ route('roles.show',$role->id) }}">Show</a>  --}}
                                @can('section-edit')
                                    <a class="btn btn-primary" href="{{ route('section.edit', $section->SectionID) }}">{{ __('Users.Edit') }}</a>
                                @endcan
                                @can('section-delete')

                                    {!! Form::open(['method' => 'DELETE','route' => ['section.destroy', $section->SectionID],'style'=>'display:inline']) !!}

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
