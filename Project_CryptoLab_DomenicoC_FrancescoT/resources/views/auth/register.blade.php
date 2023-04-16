<x-layout>
    
<div class="container">
      <div class="row justify-content-center form-custom">
        <div class="col-12 col-md-8 text-center">
        <h1 class="mt-5 my-5">REGISTRATI QUI</h1>
          <form method="POST" action="{{route('register')}}">
            @csrf
            <div class="form-floating mb-3">
              <input type="text"  name="name" class="form-control @error('name') is-invalid @enderror " id="name" placeholder="Name" value="{{ old('name') }}">
              <label for="name">Inserisci Username</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email"  name="email" class="form-control @error('email') is-invalid @enderror " id="email" placeholder="Email" value="{{ old('email') }}">
              <label for="name">Inserisci Email</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password"  name="password" class="form-control @error('password') is-invalid @enderror " id="password" placeholder="Password" value="{{ old('password') }}">
              <label for="name">Inserisci Password</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password"  name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror " id="password_confirmation" placeholder="Password Confirmation" value="{{ old('password_confirmation') }}">
              <label for="name">Password Confirmation</label>
            </div>
            <div class="mt-5">
              <button type="submit" class="btn btn-success">Registrati Now!</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</x-layout>