<x-layout>
<div class="container px-5 my-5 ">
  <div class="row justify-content-center form-custom">
    <div class="col-lg-8">
      <div class="card border-0 rounded-3 shadow-lg">
        <div class="card-body p-4">
          <div class="text-center">
            <div class="h1 fw-light">Come Contattarci!?</div>
            <p class="mb-4 text-muted">Se vuoi contattarci utilizza i seguenti form.</p>
          </div>

          <form id="contactForm" method="POST" action="{{route('crypto.contact.form')}}">
            @csrf

            <!-- Name Input -->
            <div class="form-floating mb-3">
              <input class="form-control" name='name' id="name" type="text" placeholder="Name"  />
              <label for="name">Nome</label>
              <div class="invalid-feedback"> E'richiesto il Nome </div>
            </div>

            <!-- Email Input -->
            <div class="form-floating mb-3">
              <input class="form-control" name='email' id="emailAddress" type="email" placeholder="Email Address" />
              <label for="emailAddress"> Indirizzo E-mail</label>
              <div class="invalid-feedback" > E' richiesta un E-mail </div>
              <div class="invalid-feedback" > E-mail non valida </div>
            </div>

            <!-- Message Input -->
            <div class="form-floating mb-3">
              <textarea class="form-control" name='message' id="message" type="text" placeholder="Message" style="height: 10rem;" ></textarea>
              <label for="message">Messagio</label>
              <div class="invalid-feedback"> E' richiesto un Messaggio </div>
            </div>

            <!-- Submit success message -->
            <div class="d-none" id="submitSuccessMessage">
              <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                <p>To activate this form, sign up at</p>
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
              </div>
            </div>

            <!-- Submit error message -->
            <div class="d-none" id="submitErrorMessage">
              <div class="text-center text-danger mb-3">Error sending message!</div>
            </div>

            <!-- Submit button -->
            <div class="d-grid">
              <button class="btn btn-primary btn-lg " id="submitButton" type="submit">Submit</button>
            </div>
          </form>
          <!-- End of contact form -->

        </div>
      </div>
    </div>
  </div>
</div>
</x-layout>