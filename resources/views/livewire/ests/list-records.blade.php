<div>

    <section class="pt-6">
        <div class="container px-4 px-lg-0"> 
            <div class="row">
                @if (session()->has('updated'))
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                            </path>
                        </svg>
                        <div>{{session('updated')}}</div>
                    </div>
                    @endif
                <!-- row -->
                <div class="col-md-6">
                    <!-- heading -->
                    <h1 class="display-4 fw-bold">Tourism Survey Records</h1>
                </div>
            </div>    
        </div>
    </section>

    <section class="pt-6">
        <div class="container px-4 px-lg-0">
            <div class="row">

                @foreach($estrecords as $estrecord)
                <div class="card mb-3 px-5">
                    <div class="accordion accordion-flush" id="accordion{{ $estrecord->collectionyear }}">
                        <div class="border-bottom py-3" id="heading{{ $estrecord->collectionyear }}">
                        <h3 class="mb-0 fw-bold">
                            <a href="#" class="d-flex align-items-center text-inherit " data-bs-toggle="collapse" data-bs-target="#collapse{{ $estrecord->collectionyear }}" aria-expanded="false" aria-controls="collapse{{ $estrecord->collectionyear }}">
                            <span class="me-auto">
                                {{ $estrecord->collectionyear }}
                            </span>
                            <span class="collapse-toggle ms-4">
                            <i class="fe fe-plus text-primary"></i>
                            </span>
                            </a>
                        </h3>
                        </div>
                        <div id="collapse{{ $estrecord->collectionyear }}" class="collapse" aria-labelledby="heading{{ $estrecord->collectionyear }}" data-bs-parent="#accordion{{ $estrecord->collectionyear }}">
                        <div class="py-3 fs-4">
                            <span class="d-flex justify-content-between align-items-center mb-3">
                                {{-- @php
                                        $estinfo = App\Models\EstInfo::where('est_record_id', $estrecord->id)
                                                                    ->where('user_id', auth()->id())
                                                                    ->first();
                                @endphp --}}
                                @if($estrecord->estinfo)
                                    <span>1. Establishment Information
                                        <span class="badge 
                                            @if($estrecord->estinfo->status === 'incomplete') bg-warning
                                            @elseif($estrecord->estinfo->status === 'submitted') bg-primary
                                            @elseif($estrecord->estinfo->status === 'review') bg-danger
                                            @elseif($estrecord->estinfo->status === 'completed') bg-success
                                            @endif 
                                            ms-2">{{ $estrecord->estinfo->status }}
                                        </span>
                                    </span>
                                @else
                                    <span>1. Establishment Information</span>
                                @endif 
                                <a href="{{ route('estinfo', $estrecord->id) }}"><span class="badge bg-primary ms-2">View Form</span></a>
                                <a href="{{ route('edit-estinfo', $estrecord->id) }}"><span class="badge bg-primary ms-2">Edit Form</span></a>
                            </span>
                            <hr>
                            <span class="d-flex justify-content-between align-items-center">
                                <span>2. Operations</span>
                                <a href="{{ route('estopera', $estrecord->id) }}"><span class="badge bg-primary ms-2">View Form</span></a>
                            </span>
                            <hr>
                            <span class="d-flex justify-content-between align-items-center mb-3">
                                <span>3. Employment Information P1</span>
                                <a href="{{ route('estempone', $estrecord->id) }}"><span class="badge bg-primary ms-2">View Form</span></a>
                            </span>
                            <hr>
                            <span class="d-flex justify-content-between align-items-center mb-3">
                                <span>3. Employment Information P2</span>
                                <a href="{{ route('estemptwo', $estrecord->id) }}"><span class="badge bg-primary ms-2">View Form</span></a>
                            </span>
                            <hr>
                            <span class="d-flex justify-content-between align-items-center mb-3">
                                <span>4. Production & Consumption </span>
                                <a href="{{ route('estprod', $estrecord->id) }}"><span class="badge bg-primary ms-2">View Form</span></a>
                            </span>
                            <hr>
                            <span class="d-flex justify-content-between align-items-center mb-3">
                                <span>5. Agricultural Products </span>
                                <a href="{{ route('estagri', $estrecord->id) }}"><span class="badge bg-primary ms-2">View Form</span></a>
                            </span>
                            <hr>
                              <span class="d-flex justify-content-between align-items-center mb-3">
                                <span>6. Fish Products </span>
                                <a href="{{ route('estfish', $estrecord->id) }}"><span class="badge bg-primary ms-2">View Form</span></a>
                            </span>
                            <hr>
                              <span class="d-flex justify-content-between align-items-center mb-3">
                                <span>7. Electricity </span>
                                <a href="{{ route('estelec', $estrecord->id) }}"><span class="badge bg-primary ms-2">View Form</span></a>
                            </span>
                            <hr>
                            <span class="d-flex justify-content-between align-items-center mb-3">
                                <span>8. Energy Capacity </span>
                                <a href="{{ route('estfuel', $estrecord->id) }}"><span class="badge bg-primary ms-2">View Form</span></a>
                            </span>
                            <hr>
                            <span class="d-flex justify-content-between align-items-center mb-3">
                                <span>9. Fuel Consumption </span>
                                <a href="{{ route('estfuelconsumption', $estrecord->id) }}"><span class="badge bg-primary ms-2">View Form</span></a>
                            </span>
                            <hr>
                                <span class="d-flex justify-content-between align-items-center mb-3">
                                <span>10. Other Services </span>
                                <a href="{{ route('estotherservice', $estrecord->id) }}"><span class="badge bg-primary ms-2">View Form</span></a>
                            </span>
                            <hr>
                            <span class="d-flex justify-content-between align-items-center mb-3">
                                <span>11. Income </span>
                                <a href="{{ route('estincome', $estrecord->id) }}"><span class="badge bg-primary ms-2">View Form</span></a>
                            </span>
                            <hr>
                            <span class="d-flex justify-content-between align-items-center mb-3">
                                <span>12. Expenditure </span>
                                <a href="{{ route('estexpenses', $estrecord->id) }}"><span class="badge bg-primary ms-2">View Form</span></a>
                            </span>
                            <hr>
                            <span class="d-flex justify-content-between align-items-center mb-0">
                                <span>13. Stock & Inventory </span>
                                <a href="{{ route('eststock', $estrecord->id) }}"><span class="badge bg-primary ms-2">View Form</span></a>
                            </span>
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</div>
