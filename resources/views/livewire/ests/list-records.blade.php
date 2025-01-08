<div>

    <section class="pt-6">
        <div class="container"> 
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
                    <h5 class="mb-0 text-primary display-5">{{ $user->estname }}</h5>
                </div>
            </div>    
        </div>
    </section>

    <section class="pt-6">
        <div class="container">
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
                            @foreach($estforms as $title => $form)
                                <span class="d-flex justify-content-between align-items-center mb-3">
                                    @if($estrecord->{$form})
                                    <span>{{ $title }}
                                        <span class="badge 
                                            @if($estrecord->{$form}->status === 'incomplete') bg-warning
                                            @elseif($estrecord->{$form}->status === 'submitted') bg-primary
                                            @elseif($estrecord->{$form}->status === 'review') bg-danger
                                            @elseif($estrecord->{$form}->status === 'completed') bg-success
                                            @endif 
                                            ms-2">{{ $estrecord->{$form}->status }}
                                        </span>
                                    </span>
                                @else
                                    <span>{{ $title }}</span>
                                @endif
                                <div class="ms-auto"> 
                                    @if(!$estrecord->{$form})
                                        <a href="{{ route($form, $estrecord->id) }}">
                                            <span class="badge bg-info ms-2">Submit Form</span>
                                        </a>
                                    @endif
                                    @if($estrecord->{$form} && $estrecord->{$form}->status === 'completed')
                                        <a href="/view/{{$form}}/{{ $estrecord->id }}/{{ $user->id }}">
                                        <span class="badge bg-primary ms-2">View Form</span>
                                        </a>
                                    @endif
                                    @if($estrecord->{$form} && $estrecord->{$form}->status === 'review')
                                        <a href="{{ route('edit-'.$form, $estrecord->id) }}">
                                            <span class="badge bg-secondary ms-2">Edit Form</span>
                                        </a>
                                    @endif
                                </div>
                            </span>
                            <hr>
                            @endforeach
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</div>
