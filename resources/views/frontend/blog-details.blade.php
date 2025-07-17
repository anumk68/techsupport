  @extends('frontend.include.app')
@section('content')


    <div class="page-banner-wrap page_banner_wrapss text-center bg-cover"
        style="background-image: url('public/frontassets/img/abt_back_banner.jpg')">
        <div class="container">
            <div class="page-heading text-white">
                <h1>Blog Details</h1>
            </div>
        </div>
    </div>


<section class="blog_details py_8">
    <div class="container">
  <div class="row">
    <!-- Left Side Blog Content -->
    <div class="col-md-8">
      <div class="blog-container">
        <h4>What Causes an Epson Paper Jam?</h4>
        <p>A paper jam doesn’t always mean the paper is physically stuck inside the printer. Sometimes, sensors...</p>
        <ul>
          <li>Misaligned or curled paper loaded in the tray</li>
          <li>Dust inside paper feeder</li>
          <li>Using unsupported or poor-quality paper</li>
          <li>Worn out rollers that feed the sheets</li>
          <li>Paper torn or dirty paper loaded inside</li>
        </ul>

        <h5 class="mt-4">Initial Safety Measures Before Troubleshooting</h5>
        <ul>
          <li>Power off the printer and unplug it from the power source</li>
          <li>Let the printer cool down before opening the panel</li>
          <li>Use gloves if rollers or hot areas need to be adjusted</li>
        </ul>
        <ul>
          <li>Misaligned or curled paper loaded in the tray</li>
          <li>Dust inside paper feeder</li>
          <li>Using unsupported or poor-quality paper</li>
          <li>Worn out rollers that feed the sheets</li>
          <li>Paper torn or dirty paper loaded inside</li>
        </ul>

        <h5 class="mt-4">Initial Safety Measures Before Troubleshooting</h5>
        <ul>
          <li>Power off the printer and unplug it from the power source</li>
          <li>Let the printer cool down before opening the panel</li>
          <li>Use gloves if rollers or hot areas need to be adjusted</li>
        </ul>
        <ul>
          <li>Misaligned or curled paper loaded in the tray</li>
          <li>Dust inside paper feeder</li>
          <li>Using unsupported or poor-quality paper</li>
          <li>Worn out rollers that feed the sheets</li>
          <li>Paper torn or dirty paper loaded inside</li>
        </ul>

        <h5 class="mt-4">Initial Safety Measures Before Troubleshooting</h5>
        <ul>
          <li>Power off the printer and unplug it from the power source</li>
          <li>Let the printer cool down before opening the panel</li>
          <li>Use gloves if rollers or hot areas need to be adjusted</li>
        </ul>
        <ul>
          <li>Misaligned or curled paper loaded in the tray</li>
          <li>Dust inside paper feeder</li>
          <li>Using unsupported or poor-quality paper</li>
          <li>Worn out rollers that feed the sheets</li>
          <li>Paper torn or dirty paper loaded inside</li>
        </ul>

        <h5 class="mt-4">Initial Safety Measures Before Troubleshooting</h5>
        <ul>
          <li>Power off the printer and unplug it from the power source</li>
          <li>Let the printer cool down before opening the panel</li>
          <li>Use gloves if rollers or hot areas need to be adjusted</li>
        </ul>
      </div>

         <div class="feedback-container">
                 <p><strong>Was this article helpful?</strong></p>
                   <div id="buttonGroup">
                                        <button id="yesBtn" class="theme-btn feedback-btn"><i class="fa-solid fa-check"></i> Yes</button>
                                        <button id="noBtn" class="theme-btn feedback-btn">✘ No</button>
                                        </div>

                                            <div id="yesResponse" class="response-box response-success">
                                            Thanks 👍 for your feedback
                                            </div>

                                            <div id="noResponse" class="response-box response-error">
                                            Watch detailed video here (https://youtu.be/JIDRK9gzTO0)
                                            </div>
                                        </div>
    </div>

    <!-- Right Side Recent Posts -->
    <div class="col-md-4">
      <div class="recent-posts">
        <div class="recent-posts-header">📚 Recent Blogs</div>

        <div class="recent-post">
          <img src="public/frontassets/img/slide_new_1.jpg" alt="Post 1">
          <p class="recent-post-title mb-0">How to Fix a Canon Printer...</p>
        </div>

        <div class="recent-post">
          <img src="public/frontassets/img/slide_new_1.jpg" alt="Post 2">
          <p class="recent-post-title mb-0">How to Troubleshoot an Epson...</p>
        </div>

        <div class="recent-post">
          <img src="public/frontassets/img/slide_new_1.jpg" alt="Post 3">
          <p class="recent-post-title mb-0">Fix Canon Printer Paper Jam</p>
        </div>

        <div class="recent-post">
          <img src="public/frontassets/img/slide_new_1.jpg" alt="Post 4">
          <p class="recent-post-title mb-0">How to Fix Brother Printer Issues</p>
        </div>

        <div class="recent-post">
          <img src="public/frontassets/img/slide_new_1.jpg" alt="Post 5">
          <p class="recent-post-title mb-0">How to Configure an HP Printer</p>
        </div>

        <div class="recent-post">
          <img src="public/frontassets/img/slide_new_1.jpg" alt="Post 6">
          <p class="recent-post-title mb-0">Why is My Brother Printer Offline?</p>
        </div>

      </div>



</section>
  @include('frontend.include.footer-contactForm')

<!-- feedback users -->
<script>
  const yesBtn = document.getElementById("yesBtn");
  const noBtn = document.getElementById("noBtn");
  const yesResponse = document.getElementById("yesResponse");
  const noResponse = document.getElementById("noResponse");
  const buttonGroup = document.getElementById("buttonGroup");

  yesBtn.addEventListener("click", function () {
    yesResponse.style.display = "block";
    noResponse.style.display = "none";
    buttonGroup.style.display = "none"; // 🔴 Hide buttons
  });

  noBtn.addEventListener("click", function () {
    noResponse.style.display = "block";
    yesResponse.style.display = "none";
    buttonGroup.style.display = "none"; // 🔴 Hide buttons
  });
</script>
    @endsection
