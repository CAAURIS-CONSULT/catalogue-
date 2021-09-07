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

            <!-- Content Column -->


            <div class="col-lg-6 mb-4">

              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Avant Propos</h6>
                </div>
                <div class="card-body">
                  <p>Cette plateforme est destinée au responsable de CAAURI CONSULTING . Elle est l'interface d'administration du site internet que vous trouverez a l'adresse  <a href="{{route('home')}}"> https://catalogue.caauri.com</a> . Vous trouverez un ensemble d'informations sur avec ce guide d'utilisation de la plateforme.
                  Pour toute autre préoccupations veuilez joindre l'équipe technique aux adresse suivantes :
                  <ul>
                    <li>Mail : supportTech@caauri.com</li>
                    <li>Contact : 07 xx xx xx xx / 01 xx xx xx xx</li>
                  </ul></p>
                </div>
              </div>

            </div>


            <div class="col-lg-6 mb-4">

              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Mes Identifiants</h6>
                </div>
                <div class="card-body">
                  <p>Notre plateforme d'administration est protége par un mot de passe et un nom d'utilisateur. Tous ceux qui accede a cette plateforme devrons soumettre un formulaire pour verifier leur identité. Les identifiants vous sont communiqués par l'intermédiaire du webmaster. L'utilisateur ne peut ni les modifier ni les supprimer. Pour des eventuels cas de pertes ou d'oublie veuillez vous referez au webmaster</p>
                  <p class="mb-0">La divulgation de vos identifiants à tous autres personnes hors du système pourrait causer des dégats.</p>
                </div>
              </div>

            </div>
          </div>

<div class="row">
            <div class="col-lg-6 mb-4">


              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Ajout de catalogue</h6>
                </div>
                <div class="card-body">
                  <p>
               Nous voila a l'ajout des image du catologue. Pour ajouter une image  :
               <ul>
                    <li>
                      Allez dans le menu cliquez sur l'onglet Catalogue
                    </li>
                    <li>
                      Choisir le sous onglet Nouveau
                    </li>
                    <li>
                      Choisir le service et le client
                    </li>
                    <li>
                      Remplir le formulaire d'ajout  et le soumettre
                    </li>
                  </ul>
                  </p>
                  <p class="mb-0">Pour l'ajout de catalogue verifier que le client et le service soit disponible avant d'ajouter!</p>
                </div>
              </div>

            </div>

            <div class="col-lg-6 mb-4">


              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Ajout de Clients</h6>
                </div>
                <div class="card-body">
                  <p>
               Nous voila à l'ajout d'un client. Pour ajouter un client il faut  :
               <ul>
                    <li>
                      Allez dans le menu cliquez sur l'onglet Client
                    </li>
                    <li>
                      Choisir l'onglet Nouveau
                    </li>
                    <li>
                      Remplir le formulaire d'ajout d'exercice et le soumettre
                    </li>
                  </ul>
                  </p>
                </div>
              </div>

            </div>

              <!-- Approach -->

            </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  @endsection