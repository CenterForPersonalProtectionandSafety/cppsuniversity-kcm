<?php
/*
BL Module
*/
?>

<style>
  .modal-content {
    color: #fff;
    background-color: #594A34;
  }
</style>

<div class="card">
    <input type="checkbox" id="card5" class="more" aria-hidden="true">
    <div class="content">
        <div class="front" style="background-image: url('../assets/images/sa.png')">
            <div class="inner">
                <h3>Chapel Situational Awareness</h3>
                <label for="card5" class="button" aria-hidden="true">
                    Details
                </label>
            </div>
        </div>
        <div class="back">
            <div class="inner">
                <div class="description">
                  <h5><b>Chapel Situational Awareness</b></h5>
                  <p>This video is a Special Chapel service teaching on Situational Awareness for the KCM campus and abroad.  Insightful learning for a more abundant life in the world we live in.</p>
                </div>
                <label for="card5" class="button return" aria-hidden="true">
                    <i class="fa fa-arrow-left"></i>
                </label>
                <a href="#" data-toggle="modal" data-target="#SAModal" class="button return button-play" aria-hidden="true">
                  <i class="fa fa-play"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="SAModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="SAModal">Chapel Situational Awareness</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style='color:white;'>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe id="sa-course" class="embed-responsive-item" src="https://vimeo.com/video/348479754/" allowfullscreen></iframe>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
