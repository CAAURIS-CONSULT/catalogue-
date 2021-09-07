
@extends('layouts.app')

@section('content')

@include('layouts.partials.sidebar_left')
@include('layouts.partials.sidebar_top')


 <!-- Begin Page Content -->
        <div class="container-fluid">


          <!-- Content Row -->
          <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Nos Clients</h1>
          <p class="mb-4">
            Vos clients enregistrés
          </p>

                    <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List</h6>
            </div>
            <div class="card-body">

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>N°</th>
                      <th>Nom</th>
                      <th>Entreprise</th>
                      <th>Numero</th>
                      <th>Date</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>N°</th>
                      <th>Nom</th>
                      <th>Entreprise</th>
                      <th>Numero</th>
                      <th>Date</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach( $clts as $clt)
                    <tr>
                      {{-- <td>{{ $loop->iteration }}</td> --}}
                      <td>{{ $loop->iteration}}</td>
                      <td>{{ $clt->nomClt }}</td>
                      <td>{{ $clt->entreprise }}</td>
                      <td>{{ $clt->numero }}</td>
                      <td>{{ $clt->date }}</td>
                      <td>
                        <div class="justify-content-between">
                          <a href="{{'editClt/?id='.$clt->id}}" class="btn btn-primary btn-circle" >
                          <i class="fas fa-edit"></i>
                        </a>
                          <a href="#" class="btn btn-danger btn-circle delClt" id="{{$clt->id}}">
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


