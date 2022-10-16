@extends('layouts.app')
@section('title') Menues @stop

@section('css')
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="row">
            <div class="col-md-4">
              <a href="{{ action('AdminMenuController@create') }}" class="btn btn-primary">+Add New</a>
            </div>
            <div class="col-md-3 col-md-offset-5">
              <form action="#">
                <div class="form-group">
                  <input type="text" name="keyword" class="form-control" placeholder="Search" value="{{ request('keyword') ? request('keyword') : '' }}">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="panel-body btn-margins">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Slug</th>
                  <th>Date</th>
                  <th>Actions</th>

                </tr>
              </thead>
              <tbody>
                @foreach($menus as $menu)
                <tr>
                  <td>{{ $menu->id }}</td>
                  <td>{{ $menu->name }}</td>
                  <td style="color:green; font-weight: bold;">{{ $menu->slug }}</td>
                  <td>{{ $menu->created_at->toFormattedDateString() }}</td>
                  <td>
                    <a class="btn btn-warning" href="{{ action('AdminMenuController@show', $menu->id) }}">Modify Menu</a>
                    <a class="btn btn-primary" href="{{ action('AdminMenuController@edit', $menu->id) }}">Edit Name</a>
                    <a class="btn btn-danger del" href="{{ action('AdminMenuController@destroy', $menu->id) }}">Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $menus->appends(['keyword' => request('keyword')])->links() }}
          </div>
        </div>
      </div><!-- /.panel-->

      <p style="color:red;">** Header Menu Slug : header-menu </p>
      <p style="color:red;">** Footer Menu Slug : footer-menu </p>
    </div><!--/ col-md-12 -->
  </div><!--/ row -->
@endsection 