   <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">

      <div class="container">
        <div class="section-title">
          <h2>Nous contacter</h2>
          <p>
            “Caauri a une vision ultra-personnalisée aujourd'hui des attentes de chacun. Ne perdez donc pas des opportunités de séduire, engager et fidéliser vos publics. Et notre équipe est là pour ça...
            Notre CaauriTeam ne fait pas que créer une page facebook ou un compte Twitter. Nous mettons en place une stratégie complète correspondant à votre cible et à vos objectifs.”</p>
        </div>
      </div>

      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-6 d-flex align-items-stretch infos">

            <div class="row">

              <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                <i class="bx bx-map"></i>
                <h4>Adresse</h4>
                <p>Angré Château,<br>Abidjan, Côte d'Ivoire</p>
              </div>
              <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
                <i class="bx bx-phone"></i>
                <h4>Appelez Nous</h4>
                <p>+225 0708 0280 80</p>
              </div>
              <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
                <i class="bx bx-envelope"></i>
                <h4>Ecrivez nous</h4>
                <p>contact@caauri.com</p>
              </div>
              <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                <i class="bx bx-time-five"></i>
                <h4>Horaires</h4>
                <p>9:00-17.00 lundi au vendredi</p>
              </div>
            </div>

          </div>

          <div class="col-lg-6 d-flex align-items-stretch contact-form-wrap">
            <form action="contactUs" method="post" role="form" class="php-email-form">
              @csrf
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <label for="name">Vôtre Nom</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <label for="email">Vôtre Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="subject">Objet</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" rows="8" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Téléchargement</div>
                <div class="error-message"></div>
                <div class="sent-message">Vôtre message a bien été envoyé. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyez vôtre message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets_client/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets_client/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets_client/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('assets_client/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets_client/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
  <script src="{{ asset('assets_client/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets_client/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('assets_client/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets_client/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets_client/vendor/venobox/venobox.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets_client/js/main.js') }}"></script>




</body>

</html>