<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center mt-5 mb-5">
                <h1 class="fs-1 fw-bold text-black"> Most Popoular Crypto </h1>
            </div>
        </div>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 text-center">
          <form method="POST" action="{{route('crypto.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
              <input name="img" type="file" class="form-control" id="img">
              <label class="input-group-text" for="img">Inserisci Cryptoimmagine</label>
            </div>
              @error('img')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            <div class="form-floating mb-3">
              <input type="text"  name="name" class="form-control" id="name" placeholder="CryptoName">
              <label for="name">Aggiungi Nome Cripto</label>
            </div>
              @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            <div class="form-floating">
              <textarea class="form-control" name="description" placeholder="Insert Description Crypto" id="description"></textarea>
              <label for="description">Descrizione Crypto</label>
            </div>
              @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            <button class="btn btn-success mt-5" type="submit">Aggiungi Crypto</button>
          </form>
        </div>
      </div>
    </div>
</x-layaut>