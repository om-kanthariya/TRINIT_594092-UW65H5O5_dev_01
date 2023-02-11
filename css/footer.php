    <!-- Footer -->
    <footer id="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="footer_area_about">
                        <img src="assets/img/logo.png" alt="img">
                        <p>Lorem ipsum dolor sit amet consec elit sed eiusmod tempor incididunt ut labore etdolore magna
                            aliqua.</p>
                        <h6><strong>Address:</strong> 858 Walnutwood Ave. Webster, NY 14580</h6>
                        <h6><strong>Phone:</strong> <a href="tel:123-284-2554">+91 958-901-0903</a></h6>
                        <h6><strong>Email:</strong> <a href="mailto:info@example.com">info@example.com</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                    <div class="footer_navitem_ara">
                        <h3>Quick links</h3>
                        <div class="nav_item_footer">
                            <ul>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="causes.html">Services</a></li>
                                <li><a href="events.html">Projects</a></li>
                                <li><a href="news.html">News</a></li>
                                <li><a href="about.html">Career</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                    <div class="footer_navitem_ara">
                        <h3>Support</h3>
                        <div class="nav_item_footer">
                            <ul>
                                <li><a href="faqs.html">Help & FAQ</a></li>
                                <li><a href="causes.html">Causes</a></li>
                                <li><a href="events.html">Events</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                                <li><a href="terms-service.html">Terms of service</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="footer_navitem_ara">
                        <h3>Latest tweets</h3>
                        <div class="footer_twitter_area">
                            <a href="#!" class="footer_twit_title"><i class="fab fa-twitter"></i> #digitalmarketing</a>
                            <p>Lorem ipsum dolor sit amet consec elit sed eiusmod tempor incididunt ut labore etdolore
                                magna aliqua. Sit amet consec elit sed eiusmod tempor</p>
                            <a href="#!" class="footer_twit_two">twitter.com/i/#puredrinkingwater</a>
                            <h6>December 13, 2021 04:20 PM</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Copyright Area -->
    <div class="copyright_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="co-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="copyright_left"> 
                        <p>Copyright Anshuiya Foundation © 2022 All Rights Reserved</p>
                    </div>
                </div>
                <div class="co-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="copyright_right">
                        <ul>
                            <li>
                                <a href="#!"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fab fa-twitter-square"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fab fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Top To Bottom Area -->
    <div class="go-top">
        <i class="fas fa-chevron-up"></i>
        <i class="fas fa-chevron-up"></i>
    </div>

<div class="modal fade mt-5 pt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Verify Mobile Number</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" id="author_form" method="POST" onsubmit="event.preventDefault(); verify_otp();">
          <div class="modal-body">
                <div class="form-group" id="con_no">
                    <input type="text" class="form-control" name="mobile_no" id="mobile_no" onClick="this.select();" pattern="[0-9]*" minlength="10" maxlength="10" placeholder="Enter Mobile Number" required onkeypress="return IsNumeric(event);" />
                </div>
      
                <div class="form-group" style="display: none;" id="opt">
                    <input type="text" class="form-control" maxlength="4" minlength="4" placeholder="Enter OTP" name="otp" required onkeypress="return IsNumeric(event);"/>
                </div>
              <!-- <input type="hidden" name="d_id" id="d_id" value="">
              <input type="hidden" name="amount" id="amount" value="">
              <input type="hidden" name="donation_for" id="donation_for" value="">
              <input type="hidden" name="contact" id="contact" value=""> -->
              <input type="hidden" name="c1e7c5cfd3d06ee8ef28b5c807d50f3b" value="<?php echo base64_encode("verify_otp") ?>">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary btn_md" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn_theme btn_md" id="next" onclick="send_OTP()">Next</button>
                <button type="submit" class="btn btn_theme btn_md" id="submit" style="display: none;" >Submit</button>
            </div>
        </form>
    </div>
   </div>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <!-- Meanu js -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- owl carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- wow.js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- waypoints.js -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- counterup.js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Custom js -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/custom-scroll-count.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
</body>

</html>
<script type="text/javascript">
    var toastMixin = Swal.mixin({
    toast: true,
    icon: 'success',
    title: 'General Title',
    animation: false,
    position: 'bottom-right',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  });
    function verify_otp() {
   
    var form = new FormData(document.getElementById('author_form'));

    $.ajax({
        type: 'POST',
        url: "controllers/general.php",
        data: form,
        dataType: 'json',
        contentType: false,
        cache: false,
        processData:false,
        beforeSend: function(){},
        success : function(response){
            // alert(response);
            console.log(response.success);
            if (response.success == 1) {
            
                $(".preloader2").hide();
                $('#exampleModal').modal('hide');
            
                
                toastMixin.fire({
                    animation: true,
                    title: 'Signed in Successfully'
                });
                window.location.href = 'make-donation.php';
           

            } else {
                 alert('OTP Not Match');
            }
        }
    });
}
function IsNumeric(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
function send_OTP(){
    var number = document.getElementById("mobile_no").value;
    if(number != '' && number.length>=10){
        document.getElementById("con_no").style.display = "none";
        document.getElementById("next").style.display = "none";
        document.getElementById("opt").style.display = "block";
        document.getElementById("submit").style.display = "block";
        
        $.ajax({
            url: "controllers/general.php",
            method : "POST",
            data: {"mobile_no" : $("#mobile_no").val(), "c1e7c5cfd3d06ee8ef28b5c807d50f3b" : btoa("send_otp")},
            success : function(data){
                response = JSON.parse(data)
            console.log(response);
            console.log(response.success);
            if (response.success == 1) {
            
                $(".preloader2").show();
                // $('#exampleModal').modal('hide');
               
                toastMixin.fire({
                    animation: true,
                    title: 'OTP Send Successfully'
                });
               
                    // window.location.href = 'make-donation.php';
           

            } else {
                 alert('OTP Not Send');
            }
        }
    });
    }
    
}

</script>