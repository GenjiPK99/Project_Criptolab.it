<x-layout>
    <section class="masthead vh-100">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="fw-bold text-black">Benvenuti su CriptoLab.it</h1>
                    @if (session('SuccessMessage'))
                    <div class="alert alert-success">
                    {{ session('SuccessMessage') }}
                    </div>
                    @endif
                </div>
            </div>
        </div> 
    </section> 
</x-layout>
