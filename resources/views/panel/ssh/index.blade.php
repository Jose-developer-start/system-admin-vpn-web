@extends('panel.layouts.app')
@section('title','Add server')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div>
            @if (count($getUsersAll) > 0)
            <table class="table table-hover table-bordered no-footer table-responsive-sm" id="table-userAuth">
                <thead>
                  <tr>
                    <th>User</th>
                    <th>Passwd</th>
                    <th>Tipo</th>
                    <th>Creado</th>
                    <th>Expire</th>
                    <th>Dominio</th></tr>
                </thead>
                <tbody>
                    @foreach ($getUsersAll as $item)    
                    <tr>
                      <td>{{ $item->user }}</td>
                      <td>{{ $item->passwd }}</td>
                      <td>{{ $item->type }}</td>
                      <td>{{ $item->created }}</td>
                      <td>{{ $item->expire }}</td>
                      <td>{{ $item->domain }}</td>
                    </tr>
                      @endforeach  
                    </tbody>
              </table>
              
            @else
              <h4>¡No hay usuario creados!</h4>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    //USE DATATABLES  
    var tableServer = new DataTable("#table-userAuth");
  </script>
@endsection
