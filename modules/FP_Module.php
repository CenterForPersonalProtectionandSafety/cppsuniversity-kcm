<?php
/*
Flashpoint De-escalation and Prevention Module
*/
?>

<style>
  .modal-content {
    color: #fff;
    background-color: #594A34;
  }
</style>

<div class="card">
    <input type="checkbox" id="card2" class="more">
    <div class="content">
      <div class="front" style="background-image: url('../assets/images/fpdp.png')">
            <div class="inner">
                <h3>Flashpoint De-escalation and Prevention</h3>
                <label for="card2" class="button" aria-hidden="true">
                    Details
                </label>
            </div>
        </div>
        <div class="back">
            <div class="inner">
                <div class="description">
                  <h5><b>Flashpoint De-escalation and Prevention</b></h5>
                  <p>Research shows that over 2 million people are affected each year by violent victimizations in the workplace at a cost of over 100 billion dollars to U.S. corporations annually.  Violence, however, is almost always evolutionary with warning signs along the way.  In this 12-minute video, viewers are equipped to:</p>
                    <ul>
                      <li>Understand what Workplace Violence is</li>
                      <li>Recognize Behaviors of Concern before violence occurs</li>
                      <li>Understand how to report concerns once they are observed</li>
                      <li>Recognize indicators that a co-worker might be involved in a Domestic or Intimate Partner violence relationship…and what to do about it</li>
                      <li>Understand key strategies for de-escalating tense situations in the workplace</li>
                    </ul>
                </div>
                <label for="card2" class="button return" aria-hidden="true">
                    <i class="fa fa-arrow-left"></i>
                </label>
                <a href="#" data-toggle="modal" data-target="#FPDPModal" class="button return button-play" aria-hidden="true">
                  <i class="fa fa-play"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="FPDPModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="FPDPModal">Flashpoint DP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style='color:white;'>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe id="fpdp-course" class="embed-responsive-item" src="https://player.vimeo.com/video/237417322" allowfullscreen></iframe>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
