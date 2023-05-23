<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center mt-5 mb-5">
                <h1 class="fs-1 fw-bold text-black"> Crypto List</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($cryptocurrencies as $cryptocurrencies)
            <div class="col-6 col-md-3 col-lg-4 text-center ">
                <div class="card text-bg-success mb-3" >
                    <img src="{{Storage::url($cryptocurrencies->img)}}" class="card-img-top " alt="..." >
                    <div class="card-header">{{$cryptocurrencies->name}}</div>
                    <div class="card-body">
                        <p class="card-text">{{$cryptocurrencies->description}}</p>
                    </div>
                    <div class="col-auto mb-2">
                    <button class="btn btn-info me-4" type="submit">Aggiungi Crypto</button>
                    <button class="btn btn-danger" type="submit">Rimuovi Crypto</button>
                    </div>
                    <form class="row g-3">
                    @csrf
                    <div class="col-auto ms-3">
                        <label for="integer" class="visually-hidden">Amount</label>
                        <input type="integer" class="form-control" id="integer" placeholder="Amount">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Aggiungi al Wallet</button>
                    </div>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    
</x-layout>