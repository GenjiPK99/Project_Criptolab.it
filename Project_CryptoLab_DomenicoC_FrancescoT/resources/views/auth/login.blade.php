<x-layout>
    
<div class="container">
      <div class="row justify-content-center form-custom">
            <div class="col-12 col-md-8 text-center">
            @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div>
            @endif
        <h1 class="mt-5 my-5">LOGGATI QUI</h1>
          <form method="POST" action="{{route('login')}}">
            @csrf
            <div class="form-floating mb-3">
              <input type="email"  name="email" class="form-control @error('email') is-invalid @enderror " id="email" placeholder="Email" value="{{ old('email') }}">
              <label for="name">Inserisci Email</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password"  name="password" class="form-control @error('password') is-invalid @enderror " id="password" placeholder="Password" value="{{ old('password') }}">
              <label for="name">Inserisci Password</label>
            </div>
            <div class="mt-5">
              <button type="submit" class="btn btn-success">Login!</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</x-layout>