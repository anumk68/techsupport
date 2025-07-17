<section class="cta-banner-wrapper bottom_website_form">
    <div class="container">
        <div class="cta-banner-box section-padding bg-cover">
            <div class="main_form_ahead">
                <h2>Contact Us</h2>
                 @php
                     $brands = \App\Models\Brand::all();
                     $issuse = \App\Models\Issue::all();
                 @endphp
            </div>
            <div class="row align-center">
                <form action="{{ route('form.submit') }}" method="POST" class="row" id="contact-form">
                    @csrf
                    <input type="hidden" name="form_id" value="index_form">
                    <grammarly-extension data-grammarly-shadow-root="true"
                        style="position: absolute; top: 0px; left: 0px; pointer-events: none;"
                        class="dnXmp"></grammarly-extension><grammarly-extension data-grammarly-shadow-root="true"
                        style="position: absolute; top: 0px; left: 0px; pointer-events: none;"
                        class="dnXmp"></grammarly-extension>
                          <div class="col-md-3 col-12">
                        <div class="form_a">
                            {{-- <select class="custom-select select_form" name="it_services" tabindex="0" required>
                                <option>Select Brand</option>
                                <option>Laptop</option>
                                <option>Printer</option>
                                <option>Internet & Networking</option>
                                <option>Email Online Services</option>
                                <option>Apple Mac Os</option>
                                <option>Virus and Malware</option>

                            </select> --}}
                             <div class="form-group">
            <select class="form-control" name="brand_id">
                <option value="">Select Brand</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                @endforeach
            </select>
            <div class="invalid-feedback"></div>
        </div>
                            {{-- @error('ir_services') <div class="text-danger">{{ $message }}</div> @enderror --}}
                        </div>
                    </div>

                       <div class="col-md-3 col-12">
                        <div class="form_a">
                            {{-- <select class="custom-select select_form" name="it_services" tabindex="0" required>
                                <option>Select Issues</option>
                                <option>Printer Offline</option>
                                <option>Color or black ink not printing</option>
                                <option>Instant ink issue</option>
                                <option>Printer setup issues</option>


                            </select>
                            @error('ir_services') <div class="text-danger">{{ $message }}</div> @enderror --}}


                            <div class="form-group">
            <select class="form-control" name="issue_id">
                <option value="">Select Issue</option>
                @foreach ($issuse as $issue)
                    <option value="{{ $issue->id }}">{{ $issue->issue_name }}</option>
                @endforeach
            </select>
            <div class="invalid-feedback"></div>
        </div>
                        </div>
                    </div>
                   <div class="col-md-3 col-12">
                        <div class="form_a">
                            <input class="formmm" type="number" id="fname" name="name" value="{{ old('name') }}"
                                placeholder="Enter Model Number" tabindex="0" required>
                             @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="form_a">
                            <input class="formmm" type="text" id="fname" name="name" value="{{ old('name') }}"
                                placeholder="Enter Name" tabindex="0" required>
                             @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="form_a">
                            <input class="formmm" type="email" name="email" value="{{ old('email') }}" id="email"
                                placeholder="Enter Email Address" tabindex="0" required>

                            @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="col-md-3 col-12">
                        <div class="form_a">
                        <select class="form-select" name="country_code" required="">
                                <option value="">Country Code</option>
                                <option>USA +1</option>
                                <option>UK +44</option>
                                <option>CA +1</option>
                                <option>AUS +61</option>
                            </select>
                        </div>
                    </div>
                   <div class="col-md-3 col-12">
                        <div class="form_a">
                            <input class="formmm" type="number" name="number" value="{{ old('number') }}" id="number"
                                placeholder="Your Phone Number" tabindex="0" required>

                            @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>

                </form>
                <div class="col-md-3 col-12">
                           <div class="btn_widthly">
                                <button type="submit" class="btn">Get Support</button>
                           </div>
                    </div>
            </div>
        </div>
    </div>
</section>
















{{-- <section class="cta-banner-wrapper bottom_website_form">
    <div class="container">
        <div class="cta-banner-box section-padding bg-cover">
            <div class="main_form_ahead">
                <h2>Contact Us</h2>
            </div>

            <div class="row align-center">
                <form action="{{ route('form.submit') }}" method="POST" class="row" id="contact-form">
                    @csrf
                    <input type="hidden" name="form_id" value="index_form">

                    <!-- Name -->
                    <div class="col-md-3 col-12">
                        <div class="form_a">
                            <input class="formmm" type="text" name="name" placeholder="Enter Name">
                            <small class="text-danger error" data-error="name"></small>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="col-md-3 col-12">
                        <div class="form_a">
                            <input class="formmm" type="email" name="email" placeholder="Enter Email Address">
                            <small class="text-danger error" data-error="email"></small>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="col-md-3 col-12">
                        <div class="form_a">
                            <input type="tel" name="number" placeholder="Your Phone Number">
                            <small class="text-danger error" data-error="number"></small>

                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="form_a">
                            <input type="text" name="subject" placeholder="Enter subject">
                            <small class="text-danger error" data-error="subject"></small>

                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="col-md-3 col-12">
                        <div class="btn_widthly">
                            <button type="submit" class="btn" id="submit-btn">Get Support</button>
                        </div>
                    </div>
                    <div id="form-success-msg" class="alert alert-success text-center" style="display: none;"></div>
                </form>
            </div>
        </div>
    </div>
</section> --}}

<script src="{{ asset('public/assets/js/footer-contact.js') }}"></script>
