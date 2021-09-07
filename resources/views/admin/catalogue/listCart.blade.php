
@extends('layouts.app')

@section('content')

@include('layouts.partials.sidebar_left')
@include('layouts.partials.sidebar_top')

 <!-- Begin Page Content -->
        <div class="container-fluid">


          <!-- Content Row -->
          <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Vos catalogue</h1>
          <p class="mb-4">
            Liste des services et illustrations
          </p>

                    <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Liste</h6>
            </div>
            <div class="card-body">

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>N°</th>
                      <th>Client</th>
                      <th>Services</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>N°</th>
                      <th>Clients</th>
                      <th>Services</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach( $clts as $clt)
                    <tr>
                      {{-- <td>{{ $loop->iteration }}</td> --}}
                      <td>{{ $loop->iteration}}</td>
                      <td>{{ getClient($clt->clients_id)->nomClt }}</td>
                      <td>{{ getService($clt->services_id)->type.' - '.getService($clt->services_id)->nom }}</td>
                      <td>
                        <div class="justify-content-between">
                          <a href="#" class="btn btn-primary btn-circle voirImg" idEle="{{$clt->id}}" >
                          <i class="fas fa-eye"></i>
                        </a>
                          <a href="#" class="btn btn-danger btn-circle delClt" idEle="{{$clt->id}}">
                          <i class="fas fa-trash"></i>
                        </a>
                </div>
                      </td>
                    </tr>


                    @endforeach
                  
                  </tbody>
                </table>
                      {{ $clts->links() }}
                      {{-- {{ $matieres->appends(['sort' => 'votes'])->links() }} --}}
                
              </div>
            </div>
          </div>


          <!-- Content Row -->

        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  @endsection

  @section('script')

    <!-- Page level plugins -->
  <script src="{{ asset('assets_client/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets_client/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('assets_client/js/demo/datatables-demo.js') }}"></script>
  @endsection


