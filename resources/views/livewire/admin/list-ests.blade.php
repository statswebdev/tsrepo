<div>
    <section class="pt-6">
        <div class="container px-4 px-lg-0"> 
            <div class="row">
                <!-- row -->
                <div class="col-md-12">
                    <!-- heading -->
                    <h1 class="display-4 fw-bold">List of Establishments</h1>
                </div>
            </div>    
        </div>
    </section>

    <section class="pt-6">
        <div class="container px-4 px-lg-0"> 
            
            <div class="mb-5 d-flex justify-content-end">
                <input type="search" class="form-control" placeholder="Search by Establishment Name or Email" wire:model.live.debounce.300ms="search">
              </div>

            <div class="row mb-5">
                @foreach($estlists as $estlist)
                    @if($estlist->esttype !== 'gov')
                    <div class="col-md-4 mb-4">
                        <div class="card card-border-primary rounded-4">
                            <!--card body-->
                            <div class="card-body d-flex flex-column gap-4 text-center">
                            <div>
                                <!--icon-->
                                <div class="icon-shape icon-xxl bg-light-primary rounded-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-badge text-primary" viewBox="0 0 16 16">
                                    <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                    <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492z"/>
                                  </svg>
                                </div>
                            </div>
                            <!--content-->
                            <div>
                                <h3 class="mb-0">{{ $estlist->estname}}</h3>
                                <span>{{ $estlist->esttype}}</span>
                                <div class="mt-3"><a href="/view/estrecords/{{ $estlist->id}}"><button type="button" class="btn btn-primary mb-2">View</button></a></div>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
                    <div class="mt-5">
                {{ $estlists->links() }}
                    </div>

            </div>    
        </div>
    </section>
</div>
