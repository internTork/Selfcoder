@extends('layouts.app')

@section('content')
    {{-- section 1 --}}
    <section class="hero-1 section-2" style="background: url('{{ asset('assets/img/bg/line-bg.png') }}') top center;">
        <!-- Container -->
        <div class="container">
            <div class="row hero-1-content pt-20">
                <div class="col-md-12">
                    <h1 class="title">Learner LMS is a Tork Inc Product</h1>
                </div>
                <div class="col-md-8 col-12 col-center mb-50">
                    <p class="">Tork is a Bangladeshi Technology Company That Develop Most Powerful
                        <strong>Learner</strong> LMS System
                    </p>
                    <a class="ticket-btn" href="javascript:void(0)">Contact Us</a>
                </div>
            </div>
        </div>
        <!-- Container -->
    </section>
    {{-- section 1 end --}}

    {{-- section 2 --}}
    <section class="pt-50 pb-50 section-2">
        <!-- Container -->
        <div class="container">
            <div class="row hero-1-content pt-20">
                <div class="col-md-12 col-12  mb-50 heading">
                    <h1 class="title-left">Live And Recorded Class System</h1>
                    <p class=""><strong>Learner</strong> Learning Management System
                        Provided Live 'Without Third Party Site Use' And Recorded Class System. Which Looks Modern LMS
                        System.</p>
                </div>
                <div class="col-md-12">
                    <div class="hero-image text-center mb-50">
                        <img src="{{ asset('assets/img/lms/Feature-01.jpg') }}" class="img-fluid rounded py5"
                            data-aos="fade-up" alt="Hero">
                    </div>
                </div>
                <div class="col-md-12">
                    <section id="qualification">
                        <div class="experience sm">
                            <nav data-aos="fade-left">
                                <div class="nav nav-tabs custom-nav" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                        role="tab" aria-controls="nav-home" aria-selected="true">Live</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                        role="tab" aria-controls="nav-profile" aria-selected="false">Record</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                        role="tab" aria-controls="nav-contact" aria-selected="false">Store</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent" data-aos="fade-right">
                                <!-- study -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <!-- study -->
                                    <div class="row">
                                        <div class="col-12">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque vel et odit
                                            nulla a repellat porro obcaecati eum quis fugiat ipsa similique commodi
                                            inventore quisquam mollitia ratione quas, numquam, consequuntur quasi soluta id
                                            veniam. Impedit nobis quibusdam fuga. Alias fugiat doloribus necessitatibus,
                                            voluptas vero nobis dolorum est iusto obcaecati quos.
                                        </div>
                                    </div>
                                    <!-- study end -->

                                </div>
                                <!-- study end -->

                                <!-- qualification  -->
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <!-- experience  -->
                                    <div class="row">
                                        <div class="col-12">
                                            hello bd dolor, sit amet consectetur adipisicing elit. Cumque vel et odit
                                            nulla a repellat porro obcaecati eum quis fugiat ipsa similique commodi
                                            inventore quisquam mollitia ratione quas, numquam, consequuntur quasi soluta id
                                            veniam. Impedit nobis quibusdam fuga. Alias fugiat doloribus necessitatibus,
                                            voluptas vero nobis dolorum est iusto obcaecati quos.
                                        </div>
                                    </div>
                                </div>

                                {{-- 3rd section --}}
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">
                                    <!-- experience  -->
                                    <div class="row">
                                        <div class="col-12">
                                            this is one of sit amet consectetur adipisicing elit. Cumque vel et odit
                                            nulla a repellat porro obcaecati eum quis fugiat ipsa similique commodi
                                            inventore quisquam mollitia ratione quas, numquam, consequuntur quasi soluta id
                                            veniam. Impedit nobis quibusdam fuga. Alias fugiat doloribus necessitatibus,
                                            voluptas vero nobis dolorum est iusto obcaecati quos.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Container -->
                    </section>
                </div>
            </div>
        </div>
    </section>
    {{-- section 2 end --}}

    {{-- section 3 --}}
    <section class="pt-50 pb-50 section-2">
        <!-- Container -->
        <div class="container">
            <div class="row hero-1-content pt-20">
                <div class="col-md-12 col-12  mb-50 heading">
                    <h1 class="title-left">AI Based Exam System</h1>
                    <p class=""><strong>Learner</strong> Learning Management System
                        Provided AI Based Exam System.</p>
                </div>
                <div class="col-md-12">
                    <div class="hero-image text-center mb-50">
                        <img src="{{ asset('assets/img/lms/Feature-02.jpg') }}" class="img-fluid rounded py5"
                            data-aos="fade-up" alt="Hero">
                    </div>
                </div>
                <div class="col-md-12">
                    <section id="qualification">
                        <div class="experience sm">
                            <nav data-aos="fade-left">
                                <div class="nav nav-tabs custom-nav" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                        href="#nav-home1" role="tab" aria-controls="nav-home" aria-selected="true">Exam</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile1"
                                        role="tab" aria-controls="nav-profile" aria-selected="false">Result</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact1"
                                        role="tab" aria-controls="nav-contact" aria-selected="false">Analysis Report</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent" data-aos="fade-right">
                                <!-- study -->
                                <div class="tab-pane fade show active" id="nav-home1" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <!-- study -->
                                    <div class="row">
                                        <div class="col-12">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque vel et odit
                                            nulla a repellat porro obcaecati eum quis fugiat ipsa similique commodi
                                            inventore quisquam mollitia ratione quas, numquam, consequuntur quasi soluta id
                                            veniam. Impedit nobis quibusdam fuga. Alias fugiat doloribus necessitatibus,
                                            voluptas vero nobis dolorum est iusto obcaecati quos.
                                        </div>
                                    </div>
                                    <!-- study end -->

                                </div>
                                <!-- study end -->

                                <!-- qualification  -->
                                <div class="tab-pane fade" id="nav-profile1" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <!-- experience  -->
                                    <div class="row">
                                        <div class="col-12">
                                            hello bd dolor, sit amet consectetur adipisicing elit. Cumque vel et odit
                                            nulla a repellat porro obcaecati eum quis fugiat ipsa similique commodi
                                            inventore quisquam mollitia ratione quas, numquam, consequuntur quasi soluta id
                                            veniam. Impedit nobis quibusdam fuga. Alias fugiat doloribus necessitatibus,
                                            voluptas vero nobis dolorum est iusto obcaecati quos.
                                        </div>
                                    </div>
                                </div>

                                {{-- 3rd section --}}
                                <div class="tab-pane fade" id="nav-contact1" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">
                                    <!-- experience  -->
                                    <div class="row">
                                        <div class="col-12">
                                            this is one of sit amet consectetur adipisicing elit. Cumque vel et odit
                                            nulla a repellat porro obcaecati eum quis fugiat ipsa similique commodi
                                            inventore quisquam mollitia ratione quas, numquam, consequuntur quasi soluta id
                                            veniam. Impedit nobis quibusdam fuga. Alias fugiat doloribus necessitatibus,
                                            voluptas vero nobis dolorum est iusto obcaecati quos.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Container -->
                    </section>
                </div>
            </div>
        </div>
    </section>
    {{-- section 3 end --}}

    {{-- section 4 --}}
    <section class="pt-50 pb-50 section-2">
        <!-- Container -->
        <div class="container">
            <div class="row hero-1-content pt-20">
                <div class="col-md-12 col-12  mb-50 heading">
                    <h1 class="title-left">Study Materials</h1>
                    <p class=""><strong>Learner</strong> Learning Management System
                        Provided Study Materials.</p>
                </div>
                <div class="col-md-12">
                    <div class="hero-image text-center mb-50">
                        <img src="{{ asset('assets/img/lms/Feature-03.jpg') }}" class="img-fluid rounded py5"
                            data-aos="fade-up" alt="Hero">
                    </div>
                </div>
                <div class="col-md-12">
                    <section id="qualification">
                        <div class="experience sm">
                            <nav data-aos="fade-left">
                                <div class="nav nav-tabs custom-nav" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                        href="#nav-home2" role="tab" aria-controls="nav-home" aria-selected="true">PDF /
                                        PPTX</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile2"
                                        role="tab" aria-controls="nav-profile" aria-selected="false">Online Assignment</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact2"
                                        role="tab" aria-controls="nav-contact" aria-selected="false">Online Recourse</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent" data-aos="fade-right">
                                <!-- study -->
                                <div class="tab-pane fade show active" id="nav-home2" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <!-- study -->
                                    <div class="row">
                                        <div class="col-12">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque vel et odit
                                            nulla a repellat porro obcaecati eum quis fugiat ipsa similique commodi
                                            inventore quisquam mollitia ratione quas, numquam, consequuntur quasi soluta id
                                            veniam. Impedit nobis quibusdam fuga. Alias fugiat doloribus necessitatibus,
                                            voluptas vero nobis dolorum est iusto obcaecati quos.
                                        </div>
                                    </div>
                                    <!-- study end -->

                                </div>
                                <!-- study end -->

                                <!-- qualification  -->
                                <div class="tab-pane fade" id="nav-profile2" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <!-- experience  -->
                                    <div class="row">
                                        <div class="col-12">
                                            hello bd dolor, sit amet consectetur adipisicing elit. Cumque vel et odit
                                            nulla a repellat porro obcaecati eum quis fugiat ipsa similique commodi
                                            inventore quisquam mollitia ratione quas, numquam, consequuntur quasi soluta id
                                            veniam. Impedit nobis quibusdam fuga. Alias fugiat doloribus necessitatibus,
                                            voluptas vero nobis dolorum est iusto obcaecati quos.
                                        </div>
                                    </div>
                                </div>

                                {{-- 3rd section --}}
                                <div class="tab-pane fade" id="nav-contact2" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">
                                    <!-- experience  -->
                                    <div class="row">
                                        <div class="col-12">
                                            this is one of sit amet consectetur adipisicing elit. Cumque vel et odit
                                            nulla a repellat porro obcaecati eum quis fugiat ipsa similique commodi
                                            inventore quisquam mollitia ratione quas, numquam, consequuntur quasi soluta id
                                            veniam. Impedit nobis quibusdam fuga. Alias fugiat doloribus necessitatibus,
                                            voluptas vero nobis dolorum est iusto obcaecati quos.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Container -->
                    </section>
                </div>
            </div>
        </div>
    </section>
    {{-- section 4 end --}}


    {{-- section 5 --}}
    <section class="pt-50 pb-50 section-2">
        <!-- Container -->
        <div class="container">
            <div class="row hero-1-content pt-20">
                <div class="col-md-12 col-12  mb-50 heading">
                    <h1 class="title-left">Study Plan</h1>
                    <p class=""><strong>Learner</strong> Learning Management System
                        Provided Study Plan</p>
                </div>
                <div class="col-md-12">
                    <div class="hero-image text-center mb-50">
                        <img src="{{ asset('assets/img/lms/Feature-04.jpg') }}" class="img-fluid rounded py5"
                            data-aos="fade-up" alt="Hero">
                    </div>
                </div>
                <div class="col-md-12">
                    <section id="qualification">
                        <div class="experience sm">
                            <nav data-aos="fade-left">
                                <div class="nav nav-tabs custom-nav" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                        href="#nav-home3" role="tab" aria-controls="nav-home" aria-selected="true">Daily</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile3"
                                        role="tab" aria-controls="nav-profile" aria-selected="false">Weckly</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact3"
                                        role="tab" aria-controls="nav-contact" aria-selected="false">Monthly</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent" data-aos="fade-right">
                                <!-- study -->
                                <div class="tab-pane fade show active" id="nav-home3" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <!-- study -->
                                    <div class="row">
                                        <div class="col-12">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque vel et odit
                                            nulla a repellat porro obcaecati eum quis fugiat ipsa similique commodi
                                            inventore quisquam mollitia ratione quas, numquam, consequuntur quasi soluta id
                                            veniam. Impedit nobis quibusdam fuga. Alias fugiat doloribus necessitatibus,
                                            voluptas vero nobis dolorum est iusto obcaecati quos.
                                        </div>
                                    </div>
                                    <!-- study end -->

                                </div>
                                <!-- study end -->

                                <!-- qualification  -->
                                <div class="tab-pane fade" id="nav-profile3" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <!-- experience  -->
                                    <div class="row">
                                        <div class="col-12">
                                            hello bd dolor, sit amet consectetur adipisicing elit. Cumque vel et odit
                                            nulla a repellat porro obcaecati eum quis fugiat ipsa similique commodi
                                            inventore quisquam mollitia ratione quas, numquam, consequuntur quasi soluta id
                                            veniam. Impedit nobis quibusdam fuga. Alias fugiat doloribus necessitatibus,
                                            voluptas vero nobis dolorum est iusto obcaecati quos.
                                        </div>
                                    </div>
                                </div>

                                {{-- 3rd section --}}
                                <div class="tab-pane fade" id="nav-contact3" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">
                                    <!-- experience  -->
                                    <div class="row">
                                        <div class="col-12">
                                            this is one of sit amet consectetur adipisicing elit. Cumque vel et odit
                                            nulla a repellat porro obcaecati eum quis fugiat ipsa similique commodi
                                            inventore quisquam mollitia ratione quas, numquam, consequuntur quasi soluta id
                                            veniam. Impedit nobis quibusdam fuga. Alias fugiat doloribus necessitatibus,
                                            voluptas vero nobis dolorum est iusto obcaecati quos.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Container -->
                    </section>
                </div>
            </div>
        </div>
    </section>
    {{-- section 5 end --}}

    {{-- section 6 --}}
    <section class="pt-50 pb-50 section-2">
        <!-- Container -->
        <div class="container">
            <div class="row hero-1-content pt-20">
                <div class="col-md-12 col-12  mb-50 heading">
                    <h1 class="title-left">Multiple Payment Gateways Support</h1>
                    <p class=""><strong>Learner</strong> Learning Management System
                        Provided Multiple Payment Gateways Support.</p>
                </div>
                <div class="col-md-12">
                    <div class="hero-image text-center mb-50">
                        <img src="{{ asset('assets/img/lms/Feature-05.jpg') }}" class="img-fluid rounded py5"
                            data-aos="fade-up" alt="Hero">
                    </div>
                </div>
                <div class="col-md-12">
                    <section id="qualification">
                        <div class="experience sm">
                            <nav data-aos="fade-left">
                                <div class="nav nav-tabs custom-nav" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                        href="#nav-home4" role="tab" aria-controls="nav-home" aria-selected="true">Live</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                        href="#nav-profile4" role="tab" aria-controls="nav-profile"
                                        aria-selected="false">Record</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                        href="#nav-contact4" role="tab" aria-controls="nav-contact"
                                        aria-selected="false">Store</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent" data-aos="fade-right">
                                <!-- study -->
                                <div class="tab-pane fade show active" id="nav-home4" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <!-- study -->
                                    <div class="row">
                                        <div class="col-12">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque vel et odit
                                            nulla a repellat porro obcaecati eum quis fugiat ipsa similique commodi
                                            inventore quisquam mollitia ratione quas, numquam, consequuntur quasi soluta id
                                            veniam. Impedit nobis quibusdam fuga. Alias fugiat doloribus necessitatibus,
                                            voluptas vero nobis dolorum est iusto obcaecati quos.
                                        </div>
                                    </div>
                                    <!-- study end -->

                                </div>
                                <!-- study end -->

                                <!-- qualification  -->
                                <div class="tab-pane fade" id="nav-profile4" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <!-- experience  -->
                                    <div class="row">
                                        <div class="col-12">
                                            hello bd dolor, sit amet consectetur adipisicing elit. Cumque vel et odit
                                            nulla a repellat porro obcaecati eum quis fugiat ipsa similique commodi
                                            inventore quisquam mollitia ratione quas, numquam, consequuntur quasi soluta id
                                            veniam. Impedit nobis quibusdam fuga. Alias fugiat doloribus necessitatibus,
                                            voluptas vero nobis dolorum est iusto obcaecati quos.
                                        </div>
                                    </div>
                                </div>

                                {{-- 3rd section --}}
                                <div class="tab-pane fade" id="nav-contact4" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">
                                    <!-- experience  -->
                                    <div class="row">
                                        <div class="col-12">
                                            this is one of sit amet consectetur adipisicing elit. Cumque vel et odit
                                            nulla a repellat porro obcaecati eum quis fugiat ipsa similique commodi
                                            inventore quisquam mollitia ratione quas, numquam, consequuntur quasi soluta id
                                            veniam. Impedit nobis quibusdam fuga. Alias fugiat doloribus necessitatibus,
                                            voluptas vero nobis dolorum est iusto obcaecati quos.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Container -->
                    </section>
                </div>
            </div>
        </div>
    </section>
    {{-- section 6 end --}}

    {{-- section 7 --}}
    <section class="pt-50 pb-50 section-2">
        <!-- Container -->
        <div class="container">
            <div class="row hero-1-content pt-20">
                <div class="col-md-12 col-12  mb-50 heading">
                    <h1 class="title-left">Batchwise Courses</h1>
                    <p class=""><strong>Learner</strong> Learning Management System
                        Provided Batchwise Courses</p>
                </div>
                <div class="col-md-12">
                    <div class="hero-image text-center mb-50">
                        <img src="{{ asset('assets/img/lms/Feature-06.jpg') }}" class="img-fluid rounded py5"
                            data-aos="fade-up" alt="Hero">
                    </div>
                </div>
                <div class="col-md-12">
                    <section id="qualification">
                        <div class="experience sm">
                            <nav data-aos="fade-left">
                                <div class="nav nav-tabs custom-nav" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                        href="#nav-home5" role="tab" aria-controls="nav-home" aria-selected="true">Live</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                        href="#nav-profile5" role="tab" aria-controls="nav-profile"
                                        aria-selected="false">Record</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                        href="#nav-contact5" role="tab" aria-controls="nav-contact"
                                        aria-selected="false">Store</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent" data-aos="fade-right">
                                <!-- study -->
                                <div class="tab-pane fade show active" id="nav-home5" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <!-- study -->
                                    <div class="row">
                                        <div class="col-12">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque vel et odit
                                            nulla a repellat porro obcaecati eum quis fugiat ipsa similique commodi
                                            inventore quisquam mollitia ratione quas, numquam, consequuntur quasi soluta id
                                            veniam. Impedit nobis quibusdam fuga. Alias fugiat doloribus necessitatibus,
                                            voluptas vero nobis dolorum est iusto obcaecati quos.
                                        </div>
                                    </div>
                                    <!-- study end -->

                                </div>
                                <!-- study end -->

                                <!-- qualification  -->
                                <div class="tab-pane fade" id="nav-profile5" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <!-- experience  -->
                                    <div class="row">
                                        <div class="col-12">
                                            hello bd dolor, sit amet consectetur adipisicing elit. Cumque vel et odit
                                            nulla a repellat porro obcaecati eum quis fugiat ipsa similique commodi
                                            inventore quisquam mollitia ratione quas, numquam, consequuntur quasi soluta id
                                            veniam. Impedit nobis quibusdam fuga. Alias fugiat doloribus necessitatibus,
                                            voluptas vero nobis dolorum est iusto obcaecati quos.
                                        </div>
                                    </div>
                                </div>

                                {{-- 3rd section --}}
                                <div class="tab-pane fade" id="nav-contact5" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">
                                    <!-- experience  -->
                                    <div class="row">
                                        <div class="col-12">
                                            this is one of sit amet consectetur adipisicing elit. Cumque vel et odit
                                            nulla a repellat porro obcaecati eum quis fugiat ipsa similique commodi
                                            inventore quisquam mollitia ratione quas, numquam, consequuntur quasi soluta id
                                            veniam. Impedit nobis quibusdam fuga. Alias fugiat doloribus necessitatibus,
                                            voluptas vero nobis dolorum est iusto obcaecati quos.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Container -->
                    </section>
                </div>
            </div>
        </div>
    </section>
    {{-- section 7 end --}}
@endsection


@section('style')
    @parent
    <style>
        .heading {
            text-align: left;
        }

        .title-left {
            text-align: left;
        }

        .wrapper {
            padding: 20px;
        }

        .details-collapse {
            text-align: left;
        }

        .nav-item {
            width: 300px;
        }

        .tab-pane {
            text-align: left;
            font-size: 18px;
            margin-top: 10px;
        }

        .section-2 {
            background: -webkit-linear-gradient(top, rgb(242, 243, 246) 0%, rgba(255, 255, 255, 0) 100%);
        }

        .py5 {
            padding: 20px;
            overflow: visible;
            /* background: none rgba(241, 243, 246, 0.5); */
            box-shadow: rgb(17 18 38 / 15%) 0px 0px 2px 0px;
            transition: background 200ms ease 0s, box-shadow 200ms ease 0s;
            background: #ffff
        }

    </style>
@endsection
