<div>
    <!-- Log In Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true" style="z-index:99999">
        <div class="modal-dialog login-pop-form" role="document">
            <div class="modal-content" id="loginmodal">
                <div class="modal-headers">
                    <button type="button" class="border-0 close" data-bs-dismiss="modal" aria-label="Close">
                        <span class="ti-close"></span>
                    </button>
                </div>

                <div class="modal-body p-5">
                    <div class="text-center mb-4">
                        <h2 class="m-0 ft-regular" wire:show="isRegister">Register</h2>
                        <h2 class="m-0 ft-regular" wire:show="!isRegister">Login</h2>
                    </div>

                    @session('success')
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ $value }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endsession
                    @session('error')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $value }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endsession

                    <!-- Register -->
                    <form wire:show="isRegister" id="register-form">
                        <div class="form-group mb-3">
                            <label class="mb-2">Name</label> <span class="text-danger">*</span>
                            <input type="text" class="form-control" placeholder="Name" required id="name">
                        </div>

                        <div class="form-group mb-3">
                            <label class="mb-2">Email</label> <span class="text-danger">*</span>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" id="register-email">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="mb-2">Password</label> <span class="text-danger">*</span>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" id="register-password">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

{{--                        <div class="form-group mb-3">--}}
{{--                            <div class="d-flex align-items-center justify-content-between">--}}
{{--                                <div class="flex-1">--}}
{{--                                    <input id="dd" class="checkbox-custom" name="dd" type="checkbox">--}}
{{--                                    <label for="dd" class="checkbox-custom-label">Remember Me</label>--}}
{{--                                </div>--}}
{{--                                <div class="eltio_k2">--}}
{{--                                    <a href="#">Lost Your Password?</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-md full-width bg-dark text-light fs-md ft-medium" id="register-btn">
                                Register&nbsp;&nbsp;
                                <div class="spinner-border spinner-border-sm" role="status" id="register-spinner">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </button>
                        </div>

                    </form>
                    <!-- End Register -->

                    <!-- Login -->
                    <form wire:show="!isRegister" id="login-form">

                        <div class="form-group mb-3">
                            <label class="mb-2">Email</label> <span class="text-danger">*</span>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" id="email">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="mb-2">Password</label> <span class="text-danger">*</span>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" id="password">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="flex-1">
                                    <input id="dd" class="checkbox-custom" name="dd" type="checkbox">
                                    <label for="dd" class="checkbox-custom-label">Remember Me</label>
                                </div>
                                <div class="eltio_k2">
                                    <a href="#">Lost Your Password?</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-md full-width bg-dark text-light fs-md ft-medium" id="login-btn">
                                Login&nbsp;&nbsp;
                                <div class="spinner-border spinner-border-sm" role="status" id="login-spinner">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </button>
                        </div>

                    </form>
                    <!-- End Login -->

                    <div class="form-group text-center mb-0">
                        <p class="extra" wire:show="!isRegister">Not a member?
                            <a href="#" class="text-dark" x-on:click="$wire.isRegister = true" x-transition.duration.300ms> Register</a></p>
                        <p class="extra" wire:show="isRegister">Already a member?
                            <a href="#" class="text-dark" x-on:click="$wire.isRegister = false" x-transition.duration.300ms> Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
</div>
