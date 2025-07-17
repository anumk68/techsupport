@extends('frontend.include.app')
@section('content')
    <div class="page-banner-wrap page_banner_wrapss text-center bg-cover"
        style="background-image: url('assets/img/page-banner.jpg')">
        <div class="container">
            <div class="page-heading text-white">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
    <section class="contact-page-wrap section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-contact-card card1">
                        <div class="top-part">
                            <div class="icon aaa">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="title">
                                <h4>Email Address</h4>
                                <span>Sent mail asap anytime</span>
                            </div>
                        </div>
                        <div class="bottom-part">
                            <div class="info">
                                <p>info@example.com</p>
                                <p>jobs@example.com</p>
                            </div>
                            <div class="icon aaa">
                                <i class="fal fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-contact-card card2">
                        <div class="top-part">
                            <div class="icon aaa">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="title">
                                <h4>Phone Number</h4>
                                <span>call us asap anytime</span>
                            </div>
                        </div>
                        <div class="bottom-part">
                            <div class="info">
                                <p>098-098-098-09</p>
                                <p>+(098) 098-098-765</p>
                            </div>
                            <div class="icon aaa">
                                <i class="fal fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-contact-card card3">
                        <div class="top-part">
                            <div class="icon aaa">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="title">
                                <h4>Office Address</h4>
                                <span>Sent mail asap anytime</span>
                            </div>
                        </div>
                        <div class="bottom-part">
                            <div class="info">
                                <p>B2, Miranda City Tower</p>
                                <p>New York, US</p>
                            </div>
                            <div class="icon aaa">
                                <i class="fal fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main_form_contact_form">
                <div class="row pt-5">
                    <div class="col-12 col-xl-8 offset-xl-2 text-center">
                        <div class="section-title">
                            <h2>get in touch</h2>
                            <p>Have a question or need assistance with your tech? Our team is here to help. Reach out to us
                                via live chat, email, or phone for reliable support.</p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-12">
                        <div class="contact-form">
                            <form method="POST" class="row ajax-contact-form" data-route="{{ route('form.submit') }}">
                                @csrf

                                <!-- Full Name -->
                                <div class="col-md-6 col-12">
                                    <div class="single-personal-info">
                                        <label for="fname">Full Name</label>
                                        <input type="text" name="name" id="fname" placeholder="Enter Name">
                                        <small class="text-danger error" data-error="cname"></small>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6 col-12">
                                    <div class="single-personal-info">
                                        <label for="email">Email Address</label>
                                        <input type="email" name="email" id="email"
                                            placeholder="Enter Email Address">
                                        <small class="text-danger error" data-error="cemail"></small>
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="col-md-6 col-12">
                                    <div class="single-personal-info">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" name="number" id="phone" placeholder="Enter Number">
                                        <small class="text-danger error" data-error="cnumber"></small>
                                    </div>
                                </div>

                                <!-- Subject -->
                                <div class="col-md-6 col-12">
                                    <div class="single-personal-info">
                                        <label for="subject">Subject</label>
                                        <input type="text" name="subject" id="subject" placeholder="Enter Subject">
                                        <small class="text-danger error" data-error="csubject"></small>
                                    </div>
                                </div>

                                <!-- Submit -->
                                <div class="col-md-12 col-12 text-center">
                                    <input class="submit-btn" type="submit" value="Get Support">
                                    <div class="form-success-msg alert alert-success text-center mt-2"
                                        style="display: none;"></div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    $('.ajax-contact-form').on('submit', function (e) {
        e.preventDefault();

        const form = $(this);
        const url = form.data('route');
        const formData = new FormData(this);
        const submitBtn = form.find('input[type="submit"]');
        const successBox = form.find('.form-success-msg');

        // Disable button
        submitBtn.prop('disabled', true).val('Please wait...');

        // Clear previous errors
        form.find('.error').text('');
        successBox.hide().text('');

        $.ajax({
            url: url,
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': form.find('input[name="_token"]').val()
            },
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                if (response.success || response.message) {
                    successBox.text(response.message || response.success).show();
                    setTimeout(() => {
                        successBox.fadeOut();
                    }, 4000);
                    form[0].reset();
                }
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    const errors = xhr.responseJSON.errors;
                    $.each(errors, function (field, messages) {
                        const errorKey = 'c' + field;
                        const errorEl = form.find(`.error[data-error="${errorKey}"]`);
                        if (errorEl.length) {
                            errorEl.text(messages[0]);
                        }
                    });
                } else {
                    alert('Something went wrong. Please try again.');
                    console.error(xhr.responseText);
                }
            },
            complete: function () {
                submitBtn.prop('disabled', false).val('Get A Quote');
            }
        });
    });
});
</script>


@endsection
