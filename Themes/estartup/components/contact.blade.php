
<section id="contact" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>ያግኙን</h2>
        <p class="separator">አብረውን ለመስራት አስበዋል? ለማወቅ የሚፈልጉት ነገር አለ? እንግዲያውስ ለምን አያገኙንም?</p>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">

        <div class="col-lg-3 col-md-4">

          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>ቡሌሆራ ዩኒቨርሲቲ<br>Bulehora, Oromia 535022
                <br>ሞዴል ወጣቶች ማእከል<br>Hawassa, SNNPR 535022</p>
            </div>

            <div class="email">
              <i class="fa fa-envelope"></i>
              <p>info@alenethiopia.org</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+251 462 210 860<br>+251 462 210 861</p>
            </div>
          </div>

          <div class="social-links">
            <a href="@theme('facebook_link')" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="@theme('facebook_link')" class="telegram"><i class="fa fa-telegram"></i></a>
            <a href="@theme('linkedin_link')" class="linkedin"><i class="fa fa-linkedin"></i></a>
          </div>

        </div>

        <div class="col-lg-5 col-md-8">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            
            <form action="{{route('enquiry.submit')}}" method="POST">
                @csrf
                <input type="hidden" name="from" value="contact-us">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #contact -->