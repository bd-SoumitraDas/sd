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
                <i class="now-ui-icons design-2_ruler-pencil"></i>
                <p>create your project</p>
                </a>
            </li>
            <li>
                <a href="{{ url('projectlist') }}">
                <i class="now-ui-icons education_glasses"></i>
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
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Students List</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table  class="table table-striped ">
              <thead  class=" text-primary" style="vertical-align:bottom">
                <th  >
                  Project Name
                </th>
                
                <th >
                  Students Name
                </th>
                <th  >
                  Assign Date
    
                <th  >
                  Submit Date
                </th>
                <th width="40%" >
                Project description
                </th>
                </thead>
                <tbody>
                @foreach($teams as $t)
                <tr>
                    <td>
                        {{ $t->pname }}
                    </td>
                    <td>
                        {{ $t->name }}
                    </td>
                    <td>
                        {{ $t->adate }}
                    </td>
                    <td>
                        {{ $t->sdate }}
                    </td>
                    <td width="40%">
                        {{ $t->desc }}
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