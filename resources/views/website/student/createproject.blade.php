@extends('website.student.layouts.default')
@section('main')
<div class="main-panel" id="main-panel">
    <!-- Navbar -->
    <div class="sidebar" data-color="orange">
        <!--Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"-->
        <div class="logo">
            <a href="{{ url ('index') }}" class="simple-text logo-mini">

            </a>
            <a href="#" class="simple-text logo-normal">
                Student
            </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">
            <li class="active">
                <a href="{{ url('studentdash') }}">
                <i class="now-ui-icons design_app"></i>
                <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{ url('createproject') }}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p>create your project</p>
                </a>
            </li>
            <li>
                <a href="{{ url('projectlist') }}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p>show project list</p>
                </a>
            </li>
            </ul>
        </div>
    </div>
    <!-- End Navbar -->
    <div class="panel-header" style="height: 70px;padding:0">
    </div>
    <!-- table list -->
    <!-- form -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Edit Profile</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('storeproject') }}" method="post">
                        @csrf
                            <div class="row">

                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <label>Project Name</label>
                                        <input type="text" name="pname" class="form-control" placeholder="Project Name" value="">
                                        <span class="text-danger">@error('pname') {{ $message }} @enderror</span>
                                    </div>
                                </div>




                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group orange-border textarea">
                                        <label for="exampleFormControlTextarea4">Project description</label>
                                        <textarea name="desc" class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
                                        <span class="text-danger">@error('desc') {{ $message }} @enderror</span>
                                    </div>

                                </div>

                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Students Name</label>
                                        <input name="name" type="text" class="form-control" placeholder="Student Name" value="">
                                        <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                                


                            </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 pl-4">
                            <div class="form-group">
                                <label>Assign Date</label>
                                <input type="date" name="adate"class="form-control" value="">
                                <span class="text-danger">@error('adate') {{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6 pr-5">
                            <div class="form-group">
                                <label>Submission Date</label>
                                <input type="date" name="sdate"class="form-control" value="">
                                <span class="text-danger">@error('sdate') {{ $message }} @enderror</span>
                            </div>
                        </div>

                    </div>
                    <div class="pull-right">
                        <input type='submit' class='btn btn-fill btn-danger btn-wd' name='submit' value='Submit' />
                        
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection