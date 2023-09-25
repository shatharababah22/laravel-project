        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Our Head Office</h2>
                            <p><i class="fa fa-map-marker-alt"></i>30th Street, Irbid, Jordan</p>
                            <p><i class="fa fa-phone-alt"></i>+962 78 7656330</p>
                            <p><i class="fa fa-envelope"></i>info@helpz.com</p>
                            <div class="footer-social">
                                <a class="btn btn-custom" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="#about">About Us</a>
                            <a href="#contact">Contact Us</a>
                            <a href="#off">Our Offerings</a>
                            <a href="#ach">Our Achievements</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Useful Links</h2>
                            <a href="">Terms of use</a>
                            <a href="">Privacy policy</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <form>
                                <input class="form-control" placeholder="Email goes here">
                                <button class="btn btn-custom">Submit</button>
                                <label>Don't worry, we don't spam!</label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">HELEPZ</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src={{ asset("lib/easing/easing.min.js") }}></script>
        <script src={{ asset("lib/owlcarousel/owl.carousel.min.js") }}></script>
        <script src={{ asset("lib/waypoints/waypoints.min.js") }}></script>
        <script src={{ asset("lib/counterup/counterup.min.js") }}></script>
        <script src={{ asset("lib/parallax/parallax.min.js") }}></script>
        
        
        
        
        
        
        <!-- Contact Javascript File -->
        <script src={{ asset("mail/jqBootstrapValidation.min.js") }}></script>
        <script src={{ asset("mail/contact.js") }}></script>
        
        <!-- Template Javascript -->
        <script src= {{ asset("js/main.js") }} ></script>
        <script src= {{ asset("showMore.min.js") }} ></script>

<script>
    const readMoreButtons = document.querySelectorAll('.read-more-btn');

readMoreButtons.forEach(button => {
  button.addEventListener('click', event => {
    const current = event.target;
    const currentText = current.parentNode.querySelector('.read-more-text');
    currentText.classList.toggle('read-more-text--show');
    current.textContent = current.textContent.includes('Read More') ? "Read Less..." : "Read More...";
  });
});

</script>
        
    </body>
</html>