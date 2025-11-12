<x-slot:title>Contact</x-slot>
<div>
    <!-- Top Breadcrubms -->
    <div class="gray py-3">
        <div class="container">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Support</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Breadcrubms -->

    <!-- Contact Page -->
    <section class="middle">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center">
                        <h2 class="off_title">Contact Us</h2>
                        <h3 class="ft-bold pt-3">Get In Touch</h3>
                    </div>
                </div>
            </div>

            <div class="row align-items-start justify-content-between">

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="card-wrap-body mb-4">
                        <h4 class="ft-medium mb-3 theme-cl">Make a Email</h4>
                        <p>1354 Green Street Nashville Drive Dodge City,<br> KS 67801 United States</p>
                        <p class="lh-1"><span class="text-dark ft-medium">Email:</span> calvinenglish@gmail.com</p>
                    </div>

                    <div class="card-wrap-body mb-3">
                        <h4 class="ft-medium mb-3 theme-cl">Make a Call</h4>
                        <h6 class="ft-medium mb-1">Customer Care:</h6>
                        <p class="mb-2">+91 458 753 6924</p>
                        <h6 class="ft-medium mb-1">Careers::</h6>
                        <p>+91 965 784 23658</p>
                    </div>

                    <div class="card-wrap-body mb-3">
                        <h4 class="ft-medium mb-3 theme-cl">Drop A Mail</h4>
                        <p>Fill out our form and we will contact you within 24 hours.</p>
                        <p class="lh-1 text-dark">calvinenglish@gmail.com</p>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-8 col-md-12 col-sm-12">
                    <form name="myForm" id="myForm" class="row g-3" onsubmit="return validateForm()">
                        @csrf
                        <p class="mb-0" id="error-msg"></p>
                        <div id="simple-msg"></div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="small text-dark ft-medium mb-2" for="name">Your Name *</label>
                                    <input name="name" id="name" type="text" class="form-control simple" placeholder="Enter your full name">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="small text-dark ft-medium mb-2" for="email">Your Email *</label>
                                    <input name="email" id="email" type="email" class="form-control simple" placeholder="Enter your email address">
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="small text-dark ft-medium mb-2" for="subject">Subject</label>
                                <input name="subject" id="subject" type="text" class="form-control simple" placeholder="Enter your subject">
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="small text-dark ft-medium mb-2" for="Message">Message</label>
                                <textarea name="Message" id="Message" class="form-control simple ht-80" placeholder="Enter your message"></textarea>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <button type="submit" id="submit" name="send" class="btn btn-dark">
                                    Send Message
                                </button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- Contact Page End -->

    <!-- Customer Features -->
    <section class="px-0 py-3 br-top">
        <div class="container">
            <div class="row">

                <!-- includes/blog-detail/features.blade.php -->
                @include('frontend.components.features')

            </div>
        </div>
    </section>
    <!-- Customer Features -->
</div>
