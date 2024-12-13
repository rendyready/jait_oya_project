@include('frontend_layouts.header')

<div id="wrapper">
    <!-- start header -->
    @include('frontend_layouts.nav')
    <!-- end header -->

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="inner-heading">
                        <h2>Get in touch</h2>
                    </div>
                </div>
                <div class="span8">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="content">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452"
            width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="container">
            <div class="row">
                <div class="span8">
                    <h4>Get in touch with us by filling contact form below</h4>



                    <form id="contactform" action="" method="post" role="form" class="contactForm">

                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>

                        <div class="row">
                            <div class="span4 field form-group">
                                <input type="text" name="name" placeholder="* Enter your full name"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="span4 field form-group">
                                <input type="text" name="email" placeholder="* Enter your email address"
                                    data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="span8 margintop10 field form-group">
                                <input type="text" name="subject" placeholder="Enter your subject"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="span8 margintop10 field form-group">
                                <textarea rows="12" name="message" class="input-block-level" placeholder="* Your message here..."
                                    data-rule="required" data-msg="Please write something"></textarea>
                                <div class="validation"></div>

                                <p>
                                    <button class="btn btn-color margintop10 pull-left" type="submit">Send
                                        message</button>
                                    <span class="pull-right margintop20">* Please fill all required form field,
                                        thanks!</span>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="span4">
                    <div class="clearfix"></div>
                    <aside class="right-sidebar">

                        <div class="widget">
                            <h5 class="widgetheading">Contact information<span></span></h5>

                            <ul class="contact-info">
                                <li><label>Address :</label> Tinggi sekali tower Jl.Kemacetan timur<br /> Jakarta
                                    selatan - Indonesia</li>
                                <li><label>Phone :</label>+62 123 456 78 / +62 123 456 79</li>
                                <li><label>Fax : </label>+62 123 456 10 / +62 123 456 11</li>
                                <li><label>Email : </label> info@yourdomain.com</li>
                            </ul>

                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    @include('frontend_layouts.footer')
</div>
