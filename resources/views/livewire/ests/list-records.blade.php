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

                <!-- Kitchen Sink -->
                @foreach($estrecords as $estrecord)
                <div class="card mb-3">
                    <div class="p-4">
                      <span class="fs-6 text-uppercase fw-semibold">{{ $estrecord->collectionyear }}</span>
                      <h2 class="mt-2 fw-bold mb-1 d-flex align-items-center h1 lh-1 mb-3">{{ $estrecord->recordname }}</h2>
                      <hr>
                    <span class="d-flex justify-content-between align-items-center mb-3">
                        <span>1. Establishment Information</span>
                        <a href="{{ route('estinfo', $estrecord->id) }}"><span class="badge bg-primary ms-2">View Form</span></a>
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
          <span class="d-flex justify-content-between align-items-center mb-3">
            <span>13. Stock & Inventory </span>
            <a href="{{ route('eststock', $estrecord->id) }}"><span class="badge bg-primary ms-2">View Form</span></a>
        </span>
                
                    
                    
                    
                    
                    </div>

                      
                  </div>

                  
                @endforeach
            </div>
        </div>
    </section> 
</div>
