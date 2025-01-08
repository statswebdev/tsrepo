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
                    <h1 class="display-4 fw-bold">Edit Profile</h1>
                </div>
            </div>    
        </div>
    </section>


    <section class="pt-5 pb-5">
        <div class="container">
          <!-- User info -->
          <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
              <!-- Bg -->
              <div class="rounded-top" style="background: url(https://geeksui.codescandy.com/geeks/assets/images/background/profile-bg.jpg) no-repeat; background-size: cover; height: 100px"></div>
              <div class="card px-4 pt-2 pb-4 shadow-sm rounded-top-0 rounded-bottom-0 rounded-bottom-md-2">
                <div class="d-flex align-items-end justify-content-between">
                  <div class="d-flex align-items-center">
                    <div class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5">
                      <img src="https://geeksui.codescandy.com/geeks/assets/images/svg/price-icon-2.svg" class="avatar-xl rounded-circle border border-4 border-white" alt="avatar">
                    </div>
                    <div class="lh-1">
                        <h2 class="mb-0">
                          {{ $user->estname }}    
                        </h2>
                        <p class="mb-0 d-block">{{ $user->esttype }}</p>
                    </div>
                  </div>    
                </div>
              </div>
            </div>
          </div>
          <!-- Content -->
          <div class="row mt-0 mt-md-4">
            <div class="col-lg-3 col-md-4 col-12">
              <!-- Side navbar -->
              <nav class="navbar navbar-expand-md shadow-sm mb-4 mb-lg-0 sidenav">
                <!-- Menu -->
                <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="#">Menu</a>
                <!-- Button -->
                <button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#sidenav" aria-controls="sidenav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="fe fe-menu"></span>
                </button>
                <!-- Collapse navbar -->
                <div class="collapse navbar-collapse" id="sidenav">
                  <div class="navbar-nav flex-column">
                    <span class="navbar-header">Account Settings</span>
                    <!-- List -->
                    <ul class="list-unstyled ms-n2 mb-0">
                      <!-- Nav item -->
                      <li class="nav-item active">
                        <a class="nav-link" href="{{ route('edit.profile') }}">
                          <i class="fe fe-settings nav-icon"></i>
                          Edit Profile
                        </a>
                      </li>
                      <!-- Nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('edit.security') }}">
                          <i class="fe fe-user nav-icon"></i>
                          Security
                        </a>
                      </li>
                      <!-- Nav item -->
                      <li class="nav-item">
                        <a class="nav-link" wire:click="logout" role="button">
                          <i class="fe fe-power nav-icon"></i>
                          Sign Out
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
            <div class="col-lg-9 col-md-8 col-12">
              <!-- Card -->
              <div class="card">
                <!-- Card header -->
                <div class="card-header">
                  <h3 class="mb-0">Profile Details</h3>
                  <p class="mb-0">You have full control to manage your own account setting.</p>
                </div>
                <!-- Card body -->
                <div class="card-body">
                  <div>
                    <h4 class="mb-0">Personal Details</h4>
                    <p class="mb-4">Edit your email address.</p>
                    <!-- Form -->
                    <form wire:submit.prevent="updateProfile" class="row gx-3">
                      <!-- First name -->
                      <div class="mb-3 col-12 col-md-6">
                        <label class="form-label" for="profileEstName">Establishment Name</label>
                        <input type="text" id="profileEstName" name="profileEstName" class="form-control" placeholder="{{ $user->estname }}" disabled>
                      </div>
                      <!-- Last name -->
                      <div class="mb-3 col-12 col-md-6">
                        <label class="form-label" for="profileEmail">Email Address</label>
                        <input type="text" id="profileEmail" name="profileEmail" class="form-control" wire:model="email">
                        @error('email')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                      </div>
                      <div class="col-12">
                        <!-- Button -->
                        <button class="btn btn-primary" type="submit">Update Profile</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
