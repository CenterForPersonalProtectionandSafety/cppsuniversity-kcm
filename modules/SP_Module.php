<?php
/*
Safe Passage Module
*/
?>
<div class="card">
    <input type="checkbox" id="card3" class="more">
    <div class="content">
      <div class="front" style="background-image: url('../assets/images/sp.png')">
            <div class="inner">
                <h3>Safe Passage</h3>
                <label for="card3" class="button" aria-hidden="true">
                    Details
                </label>
            </div>
        </div>
        <div class="back">
            <div class="inner">
                <div class="description">
                  <h5><b>Safe Passage</b></h5>
                  <p>Reduce your exposure and those your protect; guide your people through the key stages of travel and provide them with critical strategies, techniques and procedures aimed at minimizing travel risks including how to survive a hostage situation.</p>
                </div>
                <label for="card3" class="button return" aria-hidden="true">
                    <i class="fa fa-arrow-left"></i>
                </label>
                <a href="#" data-toggle="modal" data-target="#SPLModal" class="button return button-play" aria-hidden="true">
                  <i class="fa fa-play"></i>
                </a>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="SPLModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="SPLModal">Safe Passage</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="../assets/videos/SPL.mp4"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
