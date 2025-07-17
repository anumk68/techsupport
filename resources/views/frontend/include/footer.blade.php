

<footer class="footer-1 footer-wrap">
    <div class="footer-widgets-wrapper text-white bg-cover">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3">
                    <div class="about-quantech pe-md-5 pe-xl-0">
                        <a href="{{ route('front.index') }}">
                            <img src="{{ asset('public/frontassets/img/logo-footers.png') }}" alt="quantech">
                        </a>
                        <p>Quantech is IT Solutions & Technology business, then you should choose QuanTech Theme.
                            Startup, Digital marketing, IT Agency Services, IT Consultant and Tech Business</p>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="single-footer-wid ps-xl-5">
                        <div class="wid-title">
                            <h3> Tech Services </h3>
                        </div>
                        <ul>
                            <li><a href="{{ route('front.computerTunes') }}">Computer Tune-Ups</a></li>
                            <li><a href="{{ route('front.homeNetworking') }}">Home Networking</a></li>
                            <li><a href="{{ route('front.emailService') }}">Email Services</a></li>
                            <li><a href="{{ route('front.internetConectivity') }}">Internet Connectivity</a></li>
                            <li><a href="{{ route('front.microsoftWindow') }}">Microsoft Windows</a></li>
                            <li><a href="{{ route('front.about') }}">About</a> </li>
                            <!-- <li><a href="projects.php">projects</a></li> -->


                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="single-footer-wid ps-xl-2">
                        <div class="wid-title">
                            <h3> IT Services </h3>
                        </div>
                        <ul>
                            <li><a href="{{ route('front.webDevelopment') }}">Web Development</a></li>
                            <li><a href="{{ route('front.appDevelopment') }}">App Development</a></li>
                            <li><a href="{{ route('front.webAgency') }}">Web Agency</a></li>
                            <li><a href="{{ route('front.digitalMarketing') }}">Digital Marketing</a></li>
                            <li><a href="{{ route('front.uiUxDesign') }}">UI/UX Design</a></li>
                            <li><a href="{{ route('front.contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="single-footer-wid site-info-widget">
                        <div class="wid-title">
                            <h3>Get In Touch</h3>
                        </div>
                        <div class="get-in-touch">
                            <div class="single-contact-info">
                                <div class="icon id1">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-info">
                                    <span>94 Roa Malaka, West Jakarta City, UK</span>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="icon id2">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="contact-info">
                                    <span>+91-768728658</span>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="icon id3">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="contact-info">
                                    <span>info@example.com</span>
                                </div>
                            </div>
                        </div>

                        <div class="newsletter_widget">
                            <div class="newsletter_box">
                                <form action="{{ route('subscriber') }}" method="POST" id="subscribe-form">
                                    @csrf
                                    <div>
                                        <input type="email" name="email" id="subscriber-email"
                                            placeholder="Enter email address" required>
                                    </div>
                                    <div id="subscribe-message" style="margin-top: .5rem;"></div>
                                    <button class="submit-btn" type="submit"><i
                                            class="fas fa-envelope-open"></i></button>
                                </form>

                                @if (session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif

                                @if (session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container align-items-center">
            <div class="bottom-content-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="copy-rights footer_plcy_page">
                            <p>&copy;2023 <strong>quantech</strong>, All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-12">
                        <div class="pages_ref_policy gap-4 text-center">
                            <a href="{{ route('front.privacyPolicy') }}">Privacy Policy /</a>
                            <a href="{{ route('front.termAndCondition') }}">Terms and Conditions /</a>
                            <a href="{{ route('front.refundPolicy') }}">Refund Policy</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 mt-2 mt-md-0 col-12 text-md-end">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- <!LIVE CHAT------ -->
<!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 18071466;
    window.__lc.integration_name = "manual_channels";
    window.__lc.product_name = "livechat";;
    (function(n, t, c) {
        function i(n) {
            return e._h ? e._h.apply(null, n) : e._q.push(n)
        }
        var e = {
            _q: [],
            _h: null,
            _v: "2.0",
            on: function() {
                i(["on", c.call(arguments)])
            },
            once: function() {
                i(["once", c.call(arguments)])
            },
            off: function() {
                i(["off", c.call(arguments)])
            },
            get: function() {
                if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                return i(["get", c.call(arguments)])
            },
            call: function() {
                i(["call", c.call(arguments)])
            },
            init: function() {
                var n = t.createElement("script");
                n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js",
                    t.head.appendChild(n)
            }
        };
        !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
    }(window, document, [].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/18071466/" rel="nofollow">Chat with us</a>, powered by <a
        href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->

<div class="side-buttons">
    <div class="btn" id="contactBtn">Contact Us</div>
    <div class="btn">
        <i><i class="fa-solid fa-phone"></i></i>
        <a href="tel: +1 888 768 4674"> +1 888 768 4674</a>
    </div>
</div>

<div class="form_left_button_popup contactFormSidebar">
    <div class="contact-form" id="contactForm">
        <h3>Contact Us</h3>
       <form method="POST" class="row ajax-contact-form custom-contact-form" data-route="{{ route('form.submit') }}">
    @csrf

    <div class="form-row">
        <select class="custom-select select_form" name="tech_services">
            <option value="">Select Brand</option>
            <option>Laptop</option>
            <option>Printer</option>
            <option>Internet & Networking</option>
            <option>Email Online Services</option>
            <option>Apple Mac Os</option>
            <option>Virus and Malware</option>
        </select>
        <small class="text-danger error" data-error="ftech_services"></small>
    </div>

    <div class="form-row">
        <select class="custom-select select_form" name="it_services">
            <option value="">Select Issues</option>
            <option>Printer Offline</option>
            <option>Color or black ink not printing</option>
            <option>Instant ink issue</option>
            <option>Printer setup issues</option>
        </select>
        <small class="text-danger error" data-error="fit_services"></small>
    </div>

    <div class="form-row">
        <input class="formmm" type="text" name="subject" placeholder="Enter Subject">
        <small class="text-danger error" data-error="fsubject"></small>
    </div>

    <div class="form-row">
        <input class="formmm" type="text" name="name" placeholder="Enter Name">
        <small class="text-danger error" data-error="fname"></small>
    </div>

    <div class="form-row">
        <input class="formmm" type="email" name="email" placeholder="Enter Email Address">
        <small class="text-danger error" data-error="femail"></small>
    </div>

    <div class="form-row">
        <input type="tel" name="number" placeholder="Your Phone Number">
        <small class="text-danger error" data-error="fnumber"></small>
    </div>
   <button type="submit" class="submit-btn btn btn-primary w-100">Submit</button>

</form>

    </div>
</div>
<script>
    let formModified = false;
    let formLockedOpen = false;

    $(document).ready(function () {
        const formPopup = $('.contactFormSidebar'); // updated
        const form = $('.custom-contact-form');     // updated
        const submitBtn = form.find('.contact-submit-btn'); // updated
        const originalBtnText = 'Submit';

        // Show form
        $('#contactBtn').on('click', function () {
            formPopup.show();
        });

        // Lock when modified
        form.find('input, select, textarea').on('input change', function () {
            formModified = true;
            formLockedOpen = true;
        });

        // Prevent auto-hide if locked
        $(document).on('click', function (e) {
            if (!$(e.target).closest('.contactFormSidebar, #contactBtn').length) {
                if (!formLockedOpen) {
                    formPopup.hide();
                }
            }
        });

        // Submit form
        form.on('submit', function (e) {
            e.preventDefault();

            const url = form.data('route');
            const formData = new FormData(this);

            submitBtn.prop('disabled', true).text('Please wait...');
            form.find('.error').text('');

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
                        alert(response.message || "Form submitted successfully!");
                        form[0].reset();
                        formModified = false;
                        formLockedOpen = false;
                        formPopup.fadeOut();
                    }
                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        const errors = xhr.responseJSON.errors;
                        formLockedOpen = true;
                        $.each(errors, function (field, messages) {
                            const errorEl = form.find(`.error[data-error="f${field}"]`);
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
                    submitBtn.prop('disabled', false).text(originalBtnText);
                }
            });
        });
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('subscribe-form');
        const emailIn = document.getElementById('subscriber-email');
        const msgDiv = document.getElementById('subscribe-message');
        const submitBtn = form.querySelector('.submit-btn');
        const originalBtnHTML = submitBtn.innerHTML;

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            msgDiv.innerHTML = '';
            submitBtn.disabled = true;
            // show loading spinner
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending…';

            const email = emailIn.value.trim();
            const token = form.querySelector('input[name="_token"]').value;

            fetch("{{ route('subscriber') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': token,
                    },
                    body: JSON.stringify({
                        email
                    })
                })
                .then(async response => {
                    const text = await response.text();
                    let data;
                    try {
                        data = JSON.parse(text);
                    } catch {
                        throw new Error('Server returned an unexpected response.');
                    }
                    if (!response.ok) {
                        if (response.status === 422 && data.errors?.email) {
                            throw new Error(data.errors.email[0]);
                        }
                        throw new Error(data.message || 'Subscription failed.');
                    }
                    return data;
                })
                .then(data => {
                    msgDiv.innerHTML = `<span style="color: green;">${data.message}</span>`;
                    emailIn.value = '';
                })
                .catch(err => {
                    msgDiv.innerHTML = `<span style="color: red;">${err.message}</span>`;
                })
                .finally(() => {
                    // restore button
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnHTML;
                });
        });
    });
</script>
