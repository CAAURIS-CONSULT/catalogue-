@extends('layouts.app')

@section('content')

@include('layouts.partials.sidebar_left')
@include('layouts.partials.sidebar_top')



        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Ma vue </a>
          </div>


          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Ajout de catalogue</h6>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                  {{-- <form action="/saveCart" method="POST" enctype="multipart/form-data" >
                    @csrf
             <fieldset>
                <legend>Formulaire</legend>
                <div class="row justify-content-left">

                <div class="form-group col-lg-4">
                  <label for="client">Liste des clients</label>
                  <select class="form-control " id="client" name="client">
                     @foreach(allClt() as $clt)
                        <option value="{{ $clt->id }}">{{ $clt->nomClt }}</option>
                      @endforeach()
                   </select>                
                </div>

                <div class="form-group col-lg-4">
                  <label for="service">Services </label>
                  <select class="form-control " id="service" name="service">
                     @foreach(allServ() as $srv)
                        <option value="{{ $srv->id }}">{{ $srv->type }} - {{$srv->nom  }}</option>
                      @endforeach()
                   </select>
                                 
                </div>

                <div class="form-group col-lg-4">
                  <label for="imageP">Image Principale</label>
                  <input type="file" class="form-control-file" id="imageP" aria-describedby="fileHelp" name="imageP" required="required" accept="*" >
                                
                <input type="hidden" name="MAX_FILE_SIZE" value="50000" >

                  <small id="fileHelp" class="form-text text-muted">Max (en Mo) : 5</small>
                </div>



                <div class="form-group col-lg-4">
                  <label for="upload_file2">Image 2</label>
                  <input type="file" class="form-control-file" id="upload_file2" aria-describedby="fileHelp" name="upload_file2" accept="*" >
                            

                  <small id="fileHelp" class="form-text text-muted">Max (en Mo) : 5</small>
                </div>
                <div class="form-group col-lg-4">
                  <label for="upload_file">Image 3</label>
                  <input type="file" class="form-control-file" id="upload_file3" aria-describedby="fileHelp" name="upload_file3" accept="*" >
                              

                  <small id="fileHelp" class="form-text text-muted">Max (en Mo) : 5</small>
                </div>
                <div class="form-group col-lg-4">
                  <label for="upload_file">Image 4</label>
                  <input type="file" class="form-control-file" id="upload_file4" aria-describedby="fileHelp" name="upload_file4" accept="*" >
                             

                  <small id="fileHelp" class="form-text text-muted">Max (en Mo) : 5</small>
                </div>
                </div>

                <div class="col-lg-12 d-flex justify-content-center">
                <button type="submit" class=" col-lg-4 btn btn-primary ">Soumettre les données</button>
                </div>
              </fieldset>
          </form> --}}

       <form enctype="multipart/form-data"
             action="/saveCart"
             method="POST">
             @csrf
                <div class="row justify-content-left">


                <div class="form-group col-lg-4">
                  <label for="client">Liste des clients</label>
                  <select class="form-control " id="client" name="client">
                     @foreach(allClt() as $clt)
                        <option value="{{ $clt->id }}">{{ $clt->nomClt }}</option>
                      @endforeach()
                   </select>                
                </div>

                <div class="form-group col-lg-4">
                  <label for="service">Services </label>
                  <select class="form-control " id="service" name="service">
                     @foreach(allServ() as $srv)
                        <option value="{{ $srv->id }}">{{ $srv->type }} - {{$srv->nom  }}</option>
                      @endforeach()
                   </select>
                                 
                </div>

                <div class="form-group  col-lg-4">
                  <label for="name">Image principale</label>
                  <div class="custom-file">
                   <input class="custom-file-input" id="imageP" 
                   type="file" name="imageP" required="required">
                   <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
                </div>


                <div class="form-group  col-lg-4">
                  <label for="name">Image détaillés 2</label>
                  <div class="custom-file">
                   <input class="custom-file-input" id="image2" 
                   type="file" name="image2">
                   <label class="custom-file-label" for="customFiles">Choose file</label>
                  </div>
                </div>

                <div class="form-group  col-lg-4">
                  <label for="name">Image détaillés 3</label>
                  <div class="custom-file">
                   <input class="custom-file-input" id="image3" 
                   type="file" name="image3">
                   <label class="custom-file-label" for="customFiles">Choose file</label>
                  </div>
                </div>

                <div class="form-group  col-lg-4">
                  <label for="name">Image détaillés 4</label>
                  <div class="custom-file">
                   <input class="custom-file-input" id="image4" 
                   type="file" name="image4">
                   <label class="custom-file-label" for="customFiles">Choose file</label>
                  </div>
                </div>

            </div>
            <div class="col-lg-12 d-flex justify-content-center">
                <button type="submit" class=" col-lg-4 btn btn-primary ">Soumettre les données</button>  
            </div>


       </form>

                </div>
              </div>
            </div>

            <!-- Pie Chart -->


          <!-- Content Row -->

        </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  @endsection