@extends('frontend.include.app')
@section('content')


<section class="package_detail_page py_8">
<div class="container">
    <div class="plan-box">
  <div class="plan-title">One Time Fix + Antivirus (1 Year - 1 Device)</div>
  <div class="plan-price">Rs. 139.00</div>
  <div class="star-rating">⭐⭐⭐⭐⭐ </div>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum natus, asperiores atque eligendi a, corporis iste labore sit temporibus eius perferendis maxime accusantium unde aspernatur magnam repellendus dolores delectus? Consequatur!Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum natus, asperiores atque eligendi a, corporis iste labore sit temporibus eius perferendis maxime accusantium unde aspernatur magnam repellendus dolores delectus? Consequatur!Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum natus, asperiores atque eligendi a, corporis iste labore sit temporibus eius perferendis maxime accusantium unde aspernatur magnam repellendus dolores delectus? Consequatur!Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum natus, asperiores atque eligendi a, corporis iste labore sit temporibus eius perferendis maxime accusantium unde aspernatur magnam repellendus dolores delectus? Consequatur!Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum natus, asperiores atque eligendi a, corporis iste labore sit temporibus eius perferendis maxime accusantium unde aspernatur magnam repellendus dolores delectus? Consequatur!</p>


   <div class="add_to_cart mt-4">
  <button class="theme-btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to Cart</button>
</div>

  <!-- Bootstrap 5 Tabs -->
  <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="desc-tab" data-bs-toggle="tab" data-bs-target="#desc" type="button" role="tab">Description</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab">Review</button>
    </li>
  </ul>

  <div class="tab-content p-3 border border-top-0" id="myTabContent">
    <div class="tab-pane fade show active" id="desc" role="tabpanel">
      <p>This plan includes full remote support for 1 device for 1 year, along with antivirus protection and instant troubleshooting. Ideal for users facing repeated issues or malware problems.</p>
    </div>
    <div class="tab-pane fade" id="review" role="tabpanel">
     <div class="write_review_btn mt-4">
  <button class="theme-btn " data-bs-toggle="modal" data-bs-target="#reviewModal">✍ Write a Review</button>
</div>

      <div class="review-block mt-3">
        <div class="d-flex align-items-center mb-2">
          <div class="me-2 bg-primary text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 35px; height: 35px;">M</div>
          <div>
            <div class="fw-bold">Mamta devi</div>
            <div class="text-muted" style="font-size: 12px;">Give Your Review</div>
          </div>
        </div>
        <div class="text-muted">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Non pariatur libero magni eius cum laborum.
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>


<div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal_dis">
    <div class="modal-content p-4">
      <div class="modal-header border-0">
        <h5 class="modal-title w-100 text-center" id="reviewModalLabel">Write A Review</h5>
        <button type="button" class="btn-close position-absolute end-0 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">

        <!-- ✅ Star Rating -->
        <div id="starRating" class="star-rating mb-2">
          <span class="star" data-value="1">&#9733;</span>
          <span class="star" data-value="2">&#9733;</span>
          <span class="star" data-value="3">&#9733;</span>
          <span class="star" data-value="4">&#9733;</span>
          <span class="star" data-value="5">&#9733;</span>
        </div>

        <!-- ✅ Current Rating -->
        <div>Current Rating: <span class="rating-output" id="currentRating">0</span></div>

        <!-- ✅ Review Textarea -->
        <textarea class="form-control mt-3" rows="4" placeholder="Write your review..."></textarea>

        <!-- ✅ Submit Button -->
        <button class="theme-btn mt-3">Submit</button>
      </div>
    </div>
  </div>
</div>

<script>
  const stars = document.querySelectorAll('.star-rating .star');
  const ratingOutput = document.getElementById('currentRating');
  let selectedRating = 0;

  stars.forEach((star, idx) => {
    star.addEventListener('mouseenter', () => {
      highlightStars(idx + 1, 'hovered');
    });

    star.addEventListener('mouseleave', () => {
      highlightStars(selectedRating, 'selected');
    });

    star.addEventListener('click', () => {
      selectedRating = idx + 1;
      ratingOutput.textContent = selectedRating;
      highlightStars(selectedRating, 'selected');
    });
  });

  function highlightStars(count, className) {
    stars.forEach((star, i) => {
      star.classList.remove('hovered', 'selected');
      if (i < count) {
        star.classList.add(className);
      }
    });
  }
</script>













@endsection