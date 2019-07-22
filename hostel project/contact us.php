<?php
 $title='Contact Us';
 $content=
    '<div id="contact" class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h4>Contact Us</h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="map">
                        <img src="img/map.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                    <form id="contact" action="" method="post">
                        <div class="col-md-6">
                        <fieldset>
                            <input name="name" type="text" class="form-control" id="name" pattern="^(([a-zA-Z]+){3})+"  placeholder="Your name..." required>
                        </fieldset>
                        </div>
                        <div class="col-md-6">
                        <fieldset>
                            <input name="email" type="email" class="form-control" id="email" pattern="/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})/" placeholder="Your email..." required>
                        </fieldset>
                        </div>
                        <div class="col-md-12">
                        <fieldset>
                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required></textarea>
                        </fieldset>
                        </div>
                        <div class="col-md-12">
                        <fieldset>
                            <button type="submit" id="form-submit" class="btn">Send Message</button>
                        </fieldset>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>';
   include 'home.php';
?>