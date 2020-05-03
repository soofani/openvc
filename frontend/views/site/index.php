<?php

/* @var $this yii\web\View */

$this->title = 'The Venture Capital Open Data Initiative';
?>
<div class="site-index">
    <div class="jumbotron" style="padding-top: 0; padding-bottom: 0; margin-bottom: 0;">
        <h2>The Venture Capital Open Data Project</h2>
        <p class="lead">Because all founders have the right to equal access.</p>
    </div>
    <div class="body-content">
        <div class="row">
            <div class="col-lg-12">
                <div>

                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#vcs" aria-controls="vcs" role="tab" data-toggle="tab">VCs</a></li>
                    <li role="presentation"><a href="#companies" aria-controls="companies" role="tab" data-toggle="tab">Companies</a></li>
                    <li role="presentation"><a href="#people" aria-controls="people" role="tab" data-toggle="tab">People</a></li>
                  </ul>

                  <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane fade in active" id="vcs">
                          <iframe class="airtable-embed" src="https://airtable.com/embed/shrcffwws5VQfP6JY?backgroundColor=blue&viewControls=on" frameborder="0" onmousewheel="" width="100%" height="330" style="background: transparent; border: 1px solid #ccc;"></iframe>
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="companies">
                          <iframe class="airtable-embed" src="https://airtable.com/embed/shr19N326FphQC8g0?backgroundColor=blue&viewControls=on" frameborder="0" onmousewheel="" width="100%" height="330" style="background: transparent; border: 1px solid #ccc;"></iframe>
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="people">
                          <iframe class="airtable-embed" src="https://airtable.com/embed/shrrqFSo6WJSkP9Su?backgroundColor=blue&viewControls=on" frameborder="0" onmousewheel="" width="100%" height="330" style="background: transparent; border: 1px solid #ccc;"></iframe>
                      </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
