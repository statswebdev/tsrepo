<div>
    @if (session()->has('success'))
    <div class="container">
        <div class="row align-items-center justify-content-center g-0 h-lg-100">
            <div class="col-lg-12 col-md-12 py-3">
                
                    <div class="alert alert-success d-flex align-items-center mt-3" role="alert" id="alert-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                            </path>
                        </svg>
                        <div>{{session('success')}}</div>
                    </div>
                    
            </div>
        </div>
    </div>
    @endif

        @if (Auth::user()->role === 'user')
            <livewire:ests.list-records />
        @endif

        @if (Auth::user()->role === 'admin')
            <livewire:admin.est-records />
            <livewire:admin.list-ests />
        @endif

</div>
