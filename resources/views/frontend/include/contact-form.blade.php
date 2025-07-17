 <div class="col-12 col-xxl-6 col-lg-5 col-sm-12">
     <div class="form_box home_page_form">
         <div class="service-contact-form">
             <div class="contact-form">
                 <h2>Fill The Form Now</h2>
                 @php
                     $brands = \App\Models\Brand::all();
                     $issuse = \App\Models\Issue::all();
                 @endphp
         <form method="POST" action="{{ route('issueFormSubmit.ajax') }}" class="row ajax-contact-form" data-route="{{ route('issueFormSubmit.ajax') }}">
    @csrf


    <div class="col-md-6">
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Enter Name">
            <div class="invalid-feedback"></div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Enter Email">
            <div class="invalid-feedback"></div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <select class="form-control" name="brand_id">
                <option value="">Select Brand</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                @endforeach
            </select>
            <div class="invalid-feedback"></div>
        </div>
    </div>

    <div class="col-md-6">
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

    <div class="col-md-6">
        <div class="form-group">
            <input class="form-control" type="text" name="model" placeholder="Model Name">
            <div class="invalid-feedback"></div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <input class="form-control" type="tel" name="phone" placeholder="Your Phone Number">
            <div class="invalid-feedback"></div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <input class="form-control" type="text" name="subject" placeholder="Describe the Issue">
            <div class="invalid-feedback"></div>
        </div>
    </div>

    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Get Support</button>
        <div class="form-success-msg alert alert-success text-center mt-2" style="display: none;"></div>
    </div>
</form>




             </div>
         </div>
     </div>
 </div>



 <script src="{{ asset('public/assets/js/contact.js') }}"></script>
