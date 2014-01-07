<div id="content-wrap">
		<div class="gridwrap pagewrap cf head">
   <div class="grid-9 small-12 grid">
     <div id="logo-top">
       <a href="/"><img src="/<?php print drupal_get_path('theme', 'joshcooper_bling'); ?>/img/logo.jpg" /></a>
     </div><?php if ($title): print '<h1>'. $title .'</h1>'; endif; ?>
     <div id="donation-message">
       <p>On the ground in some of the world&#39;s most troubled places, the IRC helps people at their moment of greatest need &mdash; providing shelter, medical care, and safety. And we stay for as long as we are able to help in the rebuilding of lives and livelihoods.</p><p>&nbsp;</p><p><strong>Make a tax-deductible gift to help the IRC aid refugees around the world.</strong></p>
     </div>
   </div>
 
   <div class="grid-3 small-12 grid">
     <img src="/<?php print drupal_get_path('theme', 'joshcooper_bling'); ?>/img/efficiency.png" />
     <div id="image-top">
       <div id="donation-image-caption">
         More than ninety cents of every dollar we spend is used to support IRC programs.
       </div>
     </div>
   </div>
  </div><!--gridwrap-->

  <div class="gridwrap pagewrap cf content">
    <div class="grid-10 small-12 left-2">
      <?php if (!empty($tabs['#primary'])): print '<ul class="tabs primary">'. render($tabs) .'</ul>'; endif; ?><?php if ($show_messages && $messages): print $messages; endif; ?><?php print render($page['content']); ?>
    </div>
  </div><!--gridwrap-->
		
  <div class="gridwrap pagewrap cf foot">
    <div class="grid-4">
      <img src="/<?php print drupal_get_path('theme', 'joshcooper_bling'); ?>/img/certifications.png" /><br />
    </div>

    <div class="grid-7">
      <div id="efficiency-footer">
        Of every $1 the IRC spends, more than 90 cents goes to programs and
        services that directly benefit refugees and war affected
        populations.<br />
        <br />
        Donors living outside the US and Canada, please use our<br />
        <a href="/donate/international">international donation form</a>
      </div>
    </div>
  </div><!--gridwrap-->
  
</div><!-- content wrap -->

  <div class="container cf close">
    <div class="grid-12">
      <div class="footer-line">
        <strong>International Rescue Committee</strong> <strong>|</strong> 122
        East 42nd Street New York, NY 10168 USA <strong>|</strong> Phone: +1
        212 551 3000 <strong>|</strong> Donate: +1 855 9RESCUE
        <strong>|</strong> <a href="http://www.rescue.org/respecting-your-privacy" target="_blank">Privacy Policy</a>
    </div>

    <div class="footer-line"></div>

    <div class="footer-line">
      IRC is a 501(c)(3) not-for-profit organization <strong>|</strong>
      Copyright © International Rescue Committee, <?php echo date("Y"); ?>
    </div>
  </div>
  
</div><!--container-->

