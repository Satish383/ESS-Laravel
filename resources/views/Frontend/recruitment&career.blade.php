<x-header />

<div id="career_container" class="about_area about_bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="about_page">
                    <h3>Past Recruitment And Career</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="container mt-3">
        <div id="career_card" class="news_card_container">
            <div id="news_card" class="career_box">
                <div class="news_img">
                    <img src="{{ asset('assets/image/ess-logo.png') }}" alt="Avatar" style="width:50%">
                </div>
                <div class="container">
                    {{-- <h4><b>John Doe</b></h4>  --}}
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, eos?</p><br>
                    <a id="career_email" href="#">info@.com</a>
                </div>
            </div>
            <div id="news_card" class="career_box">
                <div class="news_img">
                    <img src="{{ asset('assets/image/ess-logo.png') }}" alt="Avatar" style="width:50%">
                </div>
                <div class="container">
                    {{-- <h4><b>John Doe</b></h4>  --}}
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, eos?</p><br>
                    <a id="career_email" href="#">info@.com</a>
                </div>
            </div>
            <div id="news_card" class="career_box">
                <div class="news_img">
                    <img src="{{ asset('assets/image/ess-logo.png') }}" alt="Avatar" style="width:50%">
                </div>
                <div class="container">
                    {{-- <h4><b>John Doe</b></h4>  --}}
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, eos?</p><br>
                    <a id="career_email" href="#">info@.com</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about_container mt-5">
    <div id="about_elements" class="container mt-5">
        <div class="about_heading">
            <h1>JOIN #ESS</h1>
        </div>
        <div id="career_para" class="about_text">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus sequi officia tenetur, mollitia iusto
                qui laudantium non, totam ut est eaque, natus corrupti vel eligendi cum accusamus. Neque, reiciendis
                magni? Quasi in sunt porro illum ea optio ipsam perferendis commodi sit ex fugit fugiat, vel fuga
                placeat laboriosam sint quisquam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
                deserunt amet qui, sequi, corporis omnis doloremque, reiciendis ab nobis culpa dolor architecto aliquam
                provident! Optio, est. Qui nulla similique error ut ab ea exercitationem earum quibusdam, amet
                distinctio doloremque. Hic ea cupiditate unde atque corporis illum qui quas! Error, alias!</p>
        </div>
    </div>
</div>

<div id="career_elements" class="about_container">
    <div id="about_elements" class="container mt-5">
        <div id="career_head" class="about_heading">
            <h1>COME GROW WITH US</h1>
        </div>
        <div id="career_form_text" class="about_text">
            <p>Send your resume to career@tenonworld.com or upload your resume using the form below.</p>
        </div>
        <div id="career_form" class="about_text">
            <form action="">
                <input type="text" id="fname" placeholder="Full Name"><br><br>
                <input type="text" id="emial" placeholder="Enter Your Email"><br><br>
                <select name="choose" id="chooseMenu">
                    <option value="1">Select</option>
                    <option value="2">Epass</option>
                    <option value="3">Enterprises</option>
                    <option value="4">Development & Collabration</option>
                </select><br><br>
                <input type="text" name="no" id="no" placeholder="Enter Your Mobile Number"><br><br>
                <textarea name="" id="message" placeholder="Message"></textarea><br><br>
                <input type="file" name="file" id="file_container"><br><br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

<x-footer />
