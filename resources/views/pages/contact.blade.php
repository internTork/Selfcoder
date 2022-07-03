@extends('layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <section class="bg-half-150 d-table w-100 bg-light"
        style="background: url('{{ asset('assets/img/bg/Breadcrumb.png') }}') top center;">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row mt-5">
                <!-- col -->
                <div class="col-lg-12">
                    <div class="title-heading text-center text-md-center">
                        <h2>Contact Us</h2>
                        <p class="mt-3 mb-0">Enjoy The Most Powerful Modern SelfCoder</p>
                        <nav aria-label="breadcrumb" class="d-inline-block mt-4">
                            <ul class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index-2.html">Tork</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- col -->
            </div>
            <!-- row -->
        </div>
        <!-- Container -->
    </section>
    <!-- /Breadcrumb -->

    <!-- Contact -->
    <section class="contact-area pt-100 pb-50">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-center">
                <!-- col -->
                <div class="col-lg-8 ml-auto mr-auto">
                    <div class="contact-form-wrap">
                        <h2>Get In Touch</h2>
                        <form id="contact-form" action="#" method="post">
                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-md-6">
                                    <div class="contact-form-style mb-20">
                                        <input name="firstname" placeholder="First Name*" type="text">
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-md-6">
                                    <div class="contact-form-style mb-20">
                                        <input name="lastname" placeholder="Last Name*" type="text">
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-md-12">
                                    <div class="contact-form-style mb-20">
                                        <input name="email" placeholder="Email*" type="email">
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-md-12">
                                    <div class="contact-form-style mb-20">
                                        <input name="subject" placeholder="Subject*" type="text">
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-md-12">
                                    <div class="contact-form-style mb-20">
                                        <textarea name="message" placeholder="Type your message here.."></textarea>
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-12">
                                    <button class="btn btn-lg btn-block solid-btn-login border-radius mt-4 mb-3"
                                        type="submit"><span>Send Email</span></button>
                                </div>
                                <!-- /col -->
                            </div>
                            <!-- row -->
                        </form>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </section>
    <!-- /Contact -->
@endsection
