<?php
/*
When Lightning Strikes Module
*/
?>

<style>
  .modal-content {
    color: #fff;
    background-color: #594A34;
  }
</style>

<div class="card">
    <input type="checkbox" id="card4" class="more">
    <div class="content">
      <div class="front" style="background-image: url('../assets/images/wls.jpg')">
        <div class="inner">
            <h3>When Lightning Strikes</h3>
            <label for="card4" class="button" aria-hidden="true">
                Details
            </label>
        </div>
        </div>
        <div class="back">
          <div class="inner">
              <div class="description">
                <h5><b>When Lightning Strikes</b></h5>
                <p>CPPS has created this latest program to prepare any individual to become situationally aware of their surroundings, pick up on early indicators that something might be wrong, and respond effectively if “Lightning Does Strike” and they find themselves in an Extreme Violence event.</p>
              </div>
              <label for="card4" class="button return" aria-hidden="true">
                  <i class="fa fa-arrow-left"></i>
              </label>
              <a href="#" data-toggle="modal" data-target="#WLSModal" class="button return button-play" aria-hidden="true">
                <i class="fa fa-play"></i>
              </a>
          </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="WLSModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="WLSModal">When Lightning Strikes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style='color:white;'>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe id="wls-course" class="embed-responsive-item" src="https://player.vimeo.com/video/325018400" allowfullscreen></iframe>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
