<div id="email-container" class="container-fluid">
    <div class="email-text">
        <div class="email-txt-1">For the latest update, subscribe to our free security alerts!</div>
        <div>
            <form action="" class="email-form">
                <input type="text" placeholder="Enter Your Email">
                <button type="submit">Subscribe <i class="fa-regular fa-circle-right"></i></button>
            </form>
        </div>
    </div>
</div>

<div id="footer-item" class="container-fluid">
    <img class="img-fluid" src="{{ asset('assets/image/ess-logo.png') }}" alt=""><br><br>
    <div class="aboutknown">
        <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum est veniam voluptatem nemo asperiores
            labore quis aliquam sequi quia minus!</small>
    </div>
    <div class="footer-content">
        <div class="footer-element">
            <small>
                <h6>Our Branches</h6><br>
                <a href="#">Jharkhand</a><br>
                <a href="#">Bihar</a><br>
                <a href="#">Assam & North East States</a><br>
                <a href="#">Andhra Pradesh</a><br>
                <a href="#">Gujarat</a>
            </small>
        </div>
        <div class="footer-element">
            <small>
                <h6>Important links</h6><br>
                <a href="#">Disclaimer</a><br>
                <a href="#">Privecy Policy</a><br>
                <a href="#">Terms of use</a><br>
                <a href="#">Labour Compliance</a><br>
            </small>
        </div>
        <div class="footer-element">
            <h6>Our Office</h6><br>
            <b>Registered Office</b><br>
            <small><i class="fa-solid fa-house" style="color: #00bbff;"></i> ESS PVT. LTD., 14/482, Manifit, PO- TELCO
                Jamshedpur, Jharkhand 831004, India</small><br>
            <small>Write us: info@essindia.in</small><br>
            <small><i class="fa-solid fa-phone" style="color: #00bbff;"></i> Call us: 2273049/0943134949232</small><br>
            <small>Contact Person: A.K.Tiwari (CMD)</small>
        </div>
    </div>
</div>

<div class="footer-end">
    <h6>© 2023 ESS All Rights Reserved.</h6>
    <p>Design & Developed by
        <a target="blank" href="https://venturingdigitally.com/">Venturing Digitally</a>
    </p>
</div>


<script>
    new WOW().init();
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleButton = document.querySelector('.menu-toggle');
        const headerElement = document.querySelector('.header-element');

        // Toggle the active class on clicking the toggle button
        toggleButton.addEventListener('click', function() {
            headerElement.classList.toggle('active');
        });
    });
</script>
</body>

</html>
