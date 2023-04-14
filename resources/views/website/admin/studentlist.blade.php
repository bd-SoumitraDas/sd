@extends('website.admin.layouts.default')
@section('main')
<div class="main-panel" id="main-panel">
    <!-- Navbar -->
    <div class="sidebar" data-color="orange">
        <!--Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"-->
        <div class="logo">
            <a href="{{ url ('index') }}" class="simple-text logo-mini">
            SS
            </a>
            <a href="#" class="simple-text logo-normal">
            Admin
            </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">
            <li>
                <a href="{{ url('dash') }}">
                <i class="now-ui-icons design_app"></i>
                <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{ url('teacherlist') }}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p>Teacher List</p>
                </a>
            </li>
            <li class="active" >
                <a href="{{ url('studentlist') }}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p>Student List</p>
                </a>
            </li>
            </ul>
        </div>
        </div>
        <!-- End Navbar -->
    <div class="panel-header" style="height: 70px;padding:0">

</div>
<!-- table list -->
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Students List</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Name
                </th>
                <th>
                  Email
                </th>
                <th>
                  ID
                </th>
                <th class="text-right">
                  Actions
                </th>
                </thead>
                <tbody>
                @foreach($users as $u)
                <tr>
                    <td>
                        {{ $u->name }}
                    </td>
                    <td>
                        {{ $u->mail }}
                    </td>
                    <td>
                        {{ $u->uid }}
                    </td>
                    <td class="text-right">
                        <a class="btn btn-danger" data-toggle="modal" data-target="#myModal{{ $u->id }}"><i class="far fa-trash-alt"></i></a>
                        <div class="modal" id="myModal{{ $u->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Delete Confirmation</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        Are you sure you want to delete <b>{{ $u->name }}?</b>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                        <a class="btn btn-success" href="{{ url('delete-user/'.$u->id) }}">Yes</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection