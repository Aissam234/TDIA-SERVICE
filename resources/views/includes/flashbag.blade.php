@if(session()->has('success'))
        <div class="container text-center mt-3 mb-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="max-width: 400px; margin: 0 auto;">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
@endif