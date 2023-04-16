<x-layout>
<div class="container">
    <div class="row justify-content-center">
     @foreach($cryptocurrencies as $cryptocurrency)
        <div class="col-6 col-md-6 col-lg-4 mt-5">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{Storage::url($cryptocurrency->img)}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$cryptocurrency->name}}</h5>
                            <h4 class="card-text">Amount:</h4>
                            <h3 class="cart-text"></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>

</x-layout>