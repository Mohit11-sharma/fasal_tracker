@extends('layouts.header.header')

@section('content')
    {{-- <div class="container py-5">
    <div class="card p-4 border-light shadow-sm text-center">
        <div>
            <div class="mb-4 text-lime empty-state-icon">
                <i class="bi bi-file-earmark-fill"></i>
            </div>

            <h3 class="mb-2">Sign-up Page Coming Soon</h3>
        </div>
    </div>
</div> --}}

    <div class="login-wrapper">
        <div class="login-bg-shape login-bg-shape-1"></div>
        <div class="login-bg-shape login-bg-shape-2"></div>

        <div class="signup-card">

            <a href="{{ url('/') }}" class="login-brand text-decoration-none">
                <span>Create Your Account</span>
            </a>

            <form action="#" method="POST" enctype="multipart/form-data" id="registerForm" class="needs-validation"
                novalidate>

                @csrf
                {{-- Farmer Photo --}}
                <div class="text-center mb-4">

                    <label for="farmer_image" class="farmer-image-upload">

                        <div class="farmer-image-preview">

                            <img id="farmerImagePreview" class="img-upload" src="{{ asset('images/upload.jpg') }}" alt="Farmer Photo"">

                        </div>

                        <input type="file" id="farmer_image" name="farmer_image" accept="image/*" hidden required>

                    </label>

                </div>



                {{-- TWO COLUMN FIELDS --}}
                <div class="row">

                    {{-- Farmer Name --}}
                    <div class="col-md-6">
                        <div class="login-form-group">
                            <label for="name" class="login-form-label">
                                Farmer Name
                            </label>

                            <div class="login-input-group">
                                <i class="bi bi-person input-icon"></i>

                                <input type="text" id="name" name="name" class="login-input"
                                    placeholder="Enter Your Name" required>
                            </div>
                        </div>
                    </div>


                    {{-- Mobile Number --}}
                    <div class="col-md-6">
                        <div class="login-form-group">
                            <label for="mobile_no" class="login-form-label">
                                Mobile Number
                            </label>

                            <div class="login-input-group">
                                <i class="bi bi-phone input-icon"></i>

                                <input type="tel" id="mobile_no" name="mobile_no" class="login-input"
                                    placeholder="Enter Your Mobile Number" maxlength="10" required>
                            </div>
                        </div>
                    </div>


                    {{-- State --}}
                    <div class="col-md-6">
                        <div class="login-form-group">
                            <label for="state" class="login-form-label">
                                State
                            </label>

                            <div class="login-input-group">
                                <i class="bi bi-geo-alt input-icon"></i>

                                <input type="text" id="state" name="state" class="login-input"
                                    placeholder="Enter Your State" required>
                            </div>
                        </div>
                    </div>


                    {{-- District --}}
                    <div class="col-md-6">
                        <div class="login-form-group">
                            <label for="district" class="login-form-label">
                                District
                            </label>

                            <div class="login-input-group">
                                <i class="bi bi-map input-icon"></i>

                                <input type="text" id="district" name="district" class="login-input"
                                    placeholder="Enter Your District" required>
                            </div>
                        </div>
                    </div>


                    {{-- Village --}}
                    <div class="col-md-6">
                        <div class="login-form-group">
                            <label for="village" class="login-form-label">
                                Village
                            </label>

                            <div class="login-input-group">
                                <i class="bi bi-house input-icon"></i>

                                <input type="text" id="village" name="village" class="login-input"
                                    placeholder="Enter Your Village" required>
                            </div>
                        </div>
                    </div>


                    {{-- Pincode --}}
                    <div class="col-md-6">
                        <div class="login-form-group">
                            <label for="pincode" class="login-form-label">
                                Pincode
                            </label>

                            <div class="login-input-group">
                                <i class="bi bi-mailbox input-icon"></i>

                                <input type="text" id="pincode" name="pincode" class="login-input"
                                    placeholder="Enter Your Pincode" maxlength="6" required>
                            </div>
                        </div>
                    </div>


                    {{-- Aadhaar Number --}}
                    <div class="col-md-6">
                        <div class="login-form-group">
                            <label for="aadhar_number" class="login-form-label">
                                Aadhaar Number
                            </label>

                            <div class="login-input-group">
                                <i class="bi bi-person-vcard input-icon"></i>

                                <input type="text" id="aadhar_number" name="aadhar_number" class="login-input"
                                    placeholder="Enter Your Aadhaar Number" maxlength="12" required>
                            </div>
                        </div>
                    </div>


                    {{-- Preferred Language --}}
                    <div class="col-md-6">
                        <div class="login-form-group">
                            <label for="preferred_language" class="login-form-label">
                                Preferred Language
                            </label>

                            <div class="login-input-group">
                                <i class="bi bi-translate input-icon"></i>

                                <select id="preferred_language" name="preferred_language" class="login-input" required>
                                    <option value="" selected disabled>
                                        Select Language
                                    </option>
                                    <option value="hi">Hindi</option>
                                    <option value="en">English</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>


                {{-- Register Button --}}
                <button type="submit" class="btn-login mt-3" id="btn-submit">

                    <span>Register</span>

                    <i class="bi bi-arrow-right"></i>

                </button>

            </form>


            <p class="login-footer-text mt-3">
                Already have an account?
                <a href="{{ route('login') }}">
                    Login Now
                </a>
            </p>

        </div>
    </div>
    <script>
        document.getElementById('farmer_image').addEventListener('change', function(event) {

            const file = event.target.files[0];

            if (!file) {
                return;
            }

            // Only allow images
            if (!file.type.startsWith('image/')) {
                alert('Please select an image file.');
                this.value = '';
                return;
            }

            const reader = new FileReader();

            reader.onload = function(e) {

                const preview = document.getElementById('farmerImagePreview');

                preview.src = e.target.result;

                // Force fixed size after upload
                preview.style.width = '100px';
                preview.style.height = '100px';
                preview.style.maxWidth = '100px';
                preview.style.maxHeight = '100px';
                preview.style.objectFit = 'cover';
                preview.style.borderRadius = '50%';
                preview.style.display = 'block';
            };

            reader.readAsDataURL(file);

        });
    </script>
@endsection
