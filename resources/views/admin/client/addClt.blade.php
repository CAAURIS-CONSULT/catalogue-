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
                  <h6 class="m-0 font-weight-bold text-primary">Ajout de client</h6>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <form action="/saveClt" method="POST" enctype="multipart/form-data" >
                    @csrf
             <fieldset>
                <legend>Informations du client</legend>
                <div class="row justify-content-left">
                <div class="form-group col-lg-6">
                  <label for="nomClt">Nom Client</label>
                  <input type="text" class="form-control @error('nomClt') is-invalid @enderror" id="nomClt" name="nomClt" aria-describedby="emailHelp" placeholder="Enter libelle" required="required" value="{{ old('nomClt') }}">
                                @error('nomClt')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  
                </div>
               <div class="form-group col-lg-6">
                  <label for="entrepriseClt">Entreprise </label>
                  <input type="text" class="form-control @error('entrepriseClt')  is-invalid @enderror" id="entrepriseClt" name="entrepriseClt" aria-describedby="Entreprise" placeholder="Entrer lien" value="{{ old('entrepriseClt') }}"  required="required">
                                @error('entrepriseClt')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                 
                </div>

               <div class="form-group col-lg-6">
                  <label for="contactClt">Contact </label>
                  <input type="text" class="form-control @error('contactClt')  is-invalid @enderror" id="contactClt" name="contactClt" aria-describedby="emailHelp" placeholder="Entrer lien" value="{{ old('contactClt') }}" required="required">
                                @error('contactClt')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                 
                </div>
               <div class="form-group col-lg-6">
                  <label for="date">Date </label>
                  <input type="date" class="form-control @error('date')  is-invalid @enderror" id="date" name="date" aria-describedby="emailHelp" placeholder="Entrer lien" value="{{ old('date') }}" required="required">
                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                 
                </div>
                </div>

                <div class="col-lg-12 d-flex justify-content-center">
                <button type="submit" class=" col-lg-4 btn btn-primary ">Soumettre les données</button>
                </div>
              </fieldset>
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