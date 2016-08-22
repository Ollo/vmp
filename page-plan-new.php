<?php
/*
Template Name: Plan Page (New)
*/

get_header('stripped'); ?>


<script>
$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

$('#myTabs a[href="#dom"]').tab('show') // Select tab by name
$('#myTabs a[href="#int"]').tab('show') // Select tab by name
$('#myTabs a:first').tab('show') // Select first tab
$('#myTabs a:last').tab('show') // Select last tab
$('#myTabs li:eq(2) a').tab('show') // Select third tab (0-indexed)
</script>

<section class='double-margin-top double-padding-top no-padding-bottom'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12 text-center'>
        <h1 class="half-margin-bottom">Join the club</h1>
        <h3>Free shipping, plans renew automatically</h3>
      </div>
    </div>
  </div>
</section>
<section class='no-padding-top padding-bottom border-bottom'>
  <div class='container'>
    <div class='row'>
      <!--Start Country Select-->
      <div>
        <!-- Nav tabs -->
          <ul class="nav nav-pills margin-bottom" role="tablist">
            <li role="presentation" class="active"><a href="#dom" aria-controls="home" role="tab" data-toggle="tab">U.S. Domestic</a></li>
            <li role="presentation"><a href="#int" aria-controls="int" role="tab" data-toggle="tab">International</a></li>
          </ul>
        <!-- Membership panes -->
        <div class="tab-content">
          <!--Start Dom-->
          <div role="tabpanel" class="tab-pane active" id="dom">
            <div class="col-md-12 text-center">
              <p><em>Must be a U.S. Domestic Shipping address</em></p>
            </div>
            <!--Option 1-->
            <div class="col-md-4 text-center margin-bottom">
              <div class="panel-plan">
                <div class="plan-header no-padding-right no-padding-left">
                  <h2 class="half-margin-top half-margin-bottom">Annual</h2>
                </div>
                <div class="plan-content padding-right padding-left">
                  <div class="plan-price"><sup>$</sup>23</span> / mo</div>
                  <div><a class="btn btn-wire-green btn-primary full-width margin-bottom" data-href="https://vinylmeplease.chargebee.com/hosted_pages/plans/12_Month_Domestic">Join <i class="fa fa-play-circle"></i></a></div>
                  <p class="no-margin-bottom"><span class="special">Save $40 per year</span></p>
                  <p class="half-margin-bottom">Billed annually</p>
                </div>
              </div>
            </div>
            <!--Option 2-->
            <div class="col-md-4 text-center margin-bottom">
              <div class="panel-plan">
                <div class="plan-header-special no-padding-right no-padding-left">
                  <h2 class="half-margin-top half-margin-bottom">3-month</h2>
                </div>
                <div class="plan-content padding-right padding-left">
                  <div class="plan-price"><sup>$</sup>25</span> / mo</div>
                  <div><a class="btn btn-default btn-primary full-width margin-bottom" data-href="https://vinylmeplease.chargebee.com/hosted_pages/plans/3_month_domestic">Join <i class="fa fa-play-circle"></i></a></div>
                  <p class="no-margin-bottom"><span class="special"><i class="fa fa-star"></i> MOST POPULAR <i class="fa fa-star"></i></span></p>
                  <p class="no-margin-bottom"><span class="special">Save $24 per year</span></p>
                  <p class="half-margin-bottom">Billed every 3 months</p>
                </div>
              </div>
            </div>
            <!--Option 3-->
            <div class="col-md-4 text-center margin-bottom">
              <div class="panel-plan">
                <div class="plan-header no-padding-right no-padding-left">
                  <h2 class="half-margin-top half-margin-bottom">Month-to-month</h2>
                </div>
                <div class="plan-content padding-right padding-left">
                  <div class="plan-price"><sup>$</sup>27</span> / mo</div>
                  <div><a class="btn btn-wire-green btn-primary full-width margin-bottom" data-href="https://vinylmeplease.chargebee.com/hosted_pages/plans/monthly_domestic">Join <i class="fa fa-play-circle"></i></a></div>
                </div>
              </div>
            </div>
            <!--End Options-->
          </div>
          <!--End Dom-->
          <!--Start Int-->
          <div role="tabpanel" class="tab-pane" id="int">
            <!--Option 1-->
            <div class="col-md-4 text-center margin-bottom">
              <div class="panel-plan">
                <div class="plan-header no-padding-right no-padding-left">
                  <h2 class="half-margin-top half-margin-bottom">Annual</h2>
                </div>
                <div class="plan-content padding-right padding-left">
                  <div class="plan-price"><sup>$</sup>38</span> / mo</div>
                  <div><a class="btn btn-wire-green btn-primary full-width margin-bottom" data-href="https://vinylmeplease.chargebee.com/hosted_pages/plans/annual_international">Join <i class="fa fa-play-circle"></i></a></div>
                  <p class="no-margin-bottom"><span class="special">Save $78 per year</span></p>
                  <p class="half-margin-bottom">Billed annually</p>
                </div>
              </div>
            </div>
            <!--Option 2-->
            <div class="col-md-4 text-center margin-bottom">
              <div class="panel-plan">
                <div class="plan-header-special no-padding-right no-padding-left">
                  <h2 class="half-margin-top half-margin-bottom">3-month</h2>
                </div>
                <div class="plan-content padding-right padding-left">
                  <div class="plan-price"><sup>$</sup>40</span> / mo</div>
                  <div><a class="btn btn-default btn-primary full-width margin-bottom" data-href="https://vinylmeplease.chargebee.com/hosted_pages/plans/3_month_international">Join <i class="fa fa-play-circle"></i></a></div>
                  <p class="no-margin-bottom"><span class="special"><i class="fa fa-star"></i> MOST POPULAR <i class="fa fa-star"></i></span></p>
                  <p class="no-margin-bottom"><span class="special">Save $48 per year</span></p>
                  <p class="half-margin-bottom">Billed every 3 months</p>
                </div>
              </div>
            </div>
            <!--Option 3-->
            <div class="col-md-4 text-center margin-bottom">
              <div class="panel-plan">
                <div class="plan-header no-padding-right no-padding-left">
                  <h2 class="half-margin-top half-margin-bottom">Month-to-month</h2>
                </div>
                <div class="plan-content padding-right padding-left">
                  <div class="plan-price"><sup>$</sup>44</span> / mo</div>
                  <div><a class="btn btn-wire-green btn-primary full-width margin-bottom" data-href="https://vinylmeplease.chargebee.com/hosted_pages/plans/monthly_international">Join <i class="fa fa-play-circle"></i></a></div>
                </div>
              </div>
            </div>
            <!--End Options-->
          </div>
          <!--End Int-->
        </div>
      </div>
      <!--End Country Select-->
    </div>
  </div>
</section>
<section class='double-padding-top no-padding-bottom double-margin-bottom border-bottom double-margin-bottom muted'>
  <div class='container'>
    <div class='row'>
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-1">
            <img src="https://pbs.twimg.com/profile_images/552231448317415424/o3HzKnjB.jpeg" class="img-circle margin-bottom" height="75px" width="75px">
          </div>
          <div class="col-md-5">
            <p class="no-margin-bottom"><em>Last 3 @VinylMePlease albums: reggae, pop, rock, hip-hop... Each was an artist I didn't know, each was an album I've loved.</em> <br />
          - Rick K</p>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class='no-padding-top double-padding-bottom border-bottom double-margin-bottom'>
  <div class='container'>
    <div class='row'>
      <div class="col-md-12 text-center margin-bottom">
        <h1>Frequently asked questions</h1>
      </div>
      <div class="col-md-6">
        <p class="bold-font-name">When will my membership start?</p>
        <p>If you’re signing up on or before the 15th of the month you’ll get the current month’s record. If you’re signing up the 16th or later, your membership will be activated on the next 2nd of the month (and you’ll start with the next record). We do that because we want to make sure you get your first record before we announce the next record :-)</p>

        <p>We process new orders once per week so you can expect to get a shipping notification with tracking info within 7 – 10 days of your account being activated. Following your initial shipment, you’ll be charged on the 2nd of each renewal month (you’ll get an email before you plan is set to renew).</p>
        <p class="bold-font-name">What do I get every month?</p>

        <p>Every month our members receive:</p>
          <ul>
            <li>1 LP pressed exclusively for Vinyl Me, Please members</li>
            <li>An original 12”x12” art print inspired by the album</li>
            <li>A custom cocktail recipe</li>
            <li>Access to The Standard</li>
            <li>Access to our member’s only store with discounted records, gear, and VMP merch</li>
            <li>A host of other members-only benefits</li>
          </ul>
        <p>Not bad eh?</p>
      </div>
      <div class="col-md-6">
        <p class="bold-font-name">Can I cancel anytime?</p>
        <p>You bet! If you're not enjoying your subscription, just drop us a line and we'll help you, no questions asked.</p>
        <p class="bold-font-name">Can I give a gift?</p>
        <p>You bet! <a href="http://vinylmeplease.com/gift/">Click here</a> for gift plans.</p>        
      </div>
    </div>
  </div>
</section>

<? get_footer('stripped'); ?>