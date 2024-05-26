<?php require_once 'header.php'
?>



  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Contact Us</h3>
          <span class="breadcrumb"><a href="#">Home</a>  >  Contact Us</span>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-text">
            <div class="section-heading">
              <h6>Contact Us</h6>
              <h2><center>Give us a shout!</center></h2>
            </div>
            <p>Jeffrey Gaming is your ultimate destination for everything related to gaming, providing an extensive collection of free computer games to cater to all your gaming needs. Whether you're a seasoned veteran with years of experience or a curious newcomer eager to dive into the gaming world, Jeffrey Gaming has got you covered. 
            <br>
            Our platform is designed to offer you the best resources, tips, and tools to enhance your gaming experience. From detailed game guides and walkthroughs to the latest updates and exclusive content, we ensure you have everything you need to elevate your gameplay to the next level. Join our vibrant community of gamers and discover the endless possibilities that Jeffrey Gaming has to offer.</p>
            <ul>
              <li><span>Headquater</span> University of Sunderland </li>
              <li><span>Address<span>Sir Tom Cowie Campus</li>
              <li><span>Location</span> Sunderland</li>
              <li><span>Country</span> United Kingdom.</li>
              <li><span>Phone</span>0191 515 2000</li>
              <li><span>PostCode</span>SR6 0DD</li>
              <li><span> Student Email</span> bi53em@student.sunderland.ac.uk</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-content">
            <div class="row">
              <div class="col-lg-12">
                <div id="map">
                <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"             marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=721&amp;height=573&amp;hl=en&amp;q=university of sunderland&amp;t=h&amp;z=7&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://embed-googlemap.com">embed google map</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:573px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:573px;}.gmap_iframe {height:573px!important;}</style></div>
                
                  <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="325px" frameborder="0" style="border:0; border-radius: 23px;" allowfullscreen=""></iframe> -->
                </div>
              </div>
              <div class="col-lg-12">
                <form id="contact-form" action="MAIL/send_email.php" method="post">
                  <div class="row">
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="firstName" id="name" placeholder="Your Name..." autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="surname" name="lastName" id="surname" placeholder="Your Surname..." autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on" >
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="message" id="message" placeholder="Your Message"></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="orange-button">Send Message Now</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
<?php
require_once('footer.php');
?>