<div>

    <section class="pt-6">
        <div class="container">
            <div class="row">
                @if (session()->has('updated'))
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                             class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                        </svg>
                        <div>{{ session('updated') }}</div>
                    </div>
                @endif

                <div class="col-md-12">
                    <h1 class="display-4 fw-bold">{{ $est->estname ?? 'Establishment' }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-6">
        <div class="container">
            <div class="row">

                @forelse($estrecords as $estrecord)
                    <div class="card mb-3 px-5">
                        <div class="accordion accordion-flush" id="accordion{{ $estrecord->id }}">

                            <div class="border-bottom py-3" id="heading{{ $estrecord->id }}">
                                <h3 class="mb-0 fw-bold">
                                    <a href="#"
                                       class="d-flex align-items-center text-inherit"
                                       data-bs-toggle="collapse"
                                       data-bs-target="#collapse{{ $estrecord->id }}"
                                       aria-expanded="false"
                                       aria-controls="collapse{{ $estrecord->id }}">
                                        <span class="me-auto">
                                            {{ $estrecord->collectionyear }}
                                        </span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-plus text-primary"></i>
                                        </span>
                                    </a>
                                </h3>
                            </div>

                            <div id="collapse{{ $estrecord->id }}"
                                 class="collapse"
                                 aria-labelledby="heading{{ $estrecord->id }}"
                                 data-bs-parent="#accordion{{ $estrecord->id }}">
                                <div class="py-3 fs-4">

                                    @foreach($estforms as $title => $form)
                                        @php
                                            $existsField = "{$form}_exists";
                                            $statusField = "{$form}_status";

                                            $hasForm = (bool) ($estrecord->$existsField ?? false);
                                            $status = $estrecord->$statusField; // can be null
                                        @endphp

                                        <span class="d-flex justify-content-between align-items-center mb-3">
                                            <span>
                                                {{ $title }}

                                                @if($hasForm)
                                                    <span class="badge
                                                        @if($status === 'incomplete') bg-warning
                                                        @elseif($status === 'submitted') bg-primary
                                                        @elseif($status === 'review') bg-danger
                                                        @elseif($status === 'completed') bg-success
                                                        @else bg-secondary
                                                        @endif
                                                        ms-2">
                                                        {{ $status ?? 'unknown' }}
                                                    </span>
                                                @endif
                                            </span>

                                            <div class="ms-auto">
                                                @if($hasForm)
                                                    <a href="/view/{{ $form }}/{{ $estrecord->id }}/{{ $est->id }}">
                                                        <span class="badge bg-primary ms-2">View Form</span>
                                                    </a>
                                                @else
                                                    <span class="badge bg-light ms-2 text-primary">Form Not Submitted</span>
                                                @endif
                                            </div>
                                        </span>

                                        <hr>
                                    @endforeach

                                </div>
                            </div>

                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info">
                            No records found for this establishment.
                        </div>
                    </div>
                @endforelse

                <div class="col-12 mt-3">
                    {{ $estrecords->links() }}
                </div>

            </div>
        </div>
    </section>

</div>
