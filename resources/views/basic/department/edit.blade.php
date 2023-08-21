@extends('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'roleslist'
])
@section('contents')
<section class="content-header">

</section>
<div class="container">
    <div class="justify-content-center">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header">Edit Department
                <span class="float-right">
                    <a class="btn btn-primary" href="{{ route('department.index') }}">back</a>
                </span>
            </div>


                <form action="{{route('department.update',$data->DeptID)}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('put')}}

                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Department Name
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" value="{{ $data->DepartmentName }}" name="DepartmentName" placeholder="Enter the Department Name" class="form-control ">

                    </div>
                    <div class="col-md-3 col-sm-3 ">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
@endsection
