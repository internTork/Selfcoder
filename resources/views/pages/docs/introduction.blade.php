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
                        <h2>Getting Started</h2>
                        <p class="mt-3 mb-0">Enjoy The Most Powerful Modern SelfCoder</p>
                        <nav aria-label="breadcrumb" class="d-inline-block mt-4">
                            <ul class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('home2') }}">Tork</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Getting Started</li>
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

    <!-- Introduction -->
    <section class="intro pt-150 pb-50">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-center">
                <!-- col -->
                @include('layouts.sidebar')
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-wrap p-lg-6">
                                <h2 class="mt-0 mb-4">Introduction</h2>
                                <p>
                                    <strong>SelfCoder</strong> is a web-based software solution to simplify the
                                    administration oflearning
                                    programme. It can track  progress through a learning programme, provide a forum
                                    for collaborating, centralize programme information andscheduling, provide a platform
                                    for synchronous and asynchronous courseware
                                    and enable the assessment of learning effectiveness
                                </p>
                                <p>Earlier learning took place in a chalk and talk method with the teacher-centriceducation.
                                    Then with the infusion of technology in education, there was a paradigm shift in the way
                                    learning experiences were provided to the students.The most recent trend in patterns on
                                    learning is e-learning, i.e. technology-enhanced education. Learning programme and
                                    materials are hosted and availableonline, allowing students to learn, interact and even
                                    earn or obtain degrees sittingin the comfort of their own homes.Even though the internet
                                    allows for hosting the learning material, the challengesof maintaining and administering
                                    the instructions over the internet is also to bedifficult. Hence, Learning Management
                                    Systems (SelfCoder) or the software designedto aid organizations/institutions in managing
                                    their e-learning initiatives havemushroomed and there is a huge market for the same</p>
                                {{-- <div class="alert alert-danger" role="alert">
                                    <strong>Note:-</strong> jQuery plugin dependencies may relay on used
                                    platform and their versions.
                                </div> --}}
                                <h2 class="mt-0 mb-4"> Concept of  SelfCoder</h2>
                                <p><strong> </strong> SelfCoder is a software applicationfor the
                                    administration,documentation, tracking, reporting and
                                    delivery of e-learningeducation courses ortraining programs.SelfCoders range from systems for
                                    managing training and educational records tosoftware for distributingonlineor
                                    blended/hybrid college courses over theInternet with features for online collaboration.
                                    Colleges and universities useSelfCoders to deliver online courses and compliment on-campus
                                    courses.</p>
                                <p> Corporatetraining departments use SelfCoders to deliver online training, as well as
                                    automaterecord-keeping and employee registration.In educational setting, adoption of SelfCoder
                                    has a wide scope. Universities are seeingdistance education as the means to the future.
                                    It is also seen as a way to decreasecosts, decrease the need for classrooms, increase
                                    access to education and increase and their student population. Instructors also find the
                                    use of SelfCoder actually improvestheir
                                    teaching.</p>
                                <hr>
                                <h3>Features of  SelfCoder</h3>
                                <div class="mt-3">
                                    <p><strong>Live And Recorded Class System:</strong>  SelfCoder System
                                        Provided Live 'Without Third Party Site Use' And Recorded Class System. Which Looks
                                        Modern SelfCoder System.
                                    </p>
                                    <p><strong>AI Based Exam System:</strong>  SelfCoder System Provided AI
                                        Based Exam System.
                                    </p>
                                    <p><strong>Study Materials:</strong>  SelfCoder System Provided Study
                                        Materials.
                                    </p>
                                    <p><strong>Study Plan:</strong>  SelfCoder System Provided Study Plan.
                                    </p>
                                    <p><strong>Multiple Payment Gateways Support:</strong>  Learning Management
                                        System Provided Multiple Payment Gateways Support.
                                    </p>
                                    <p><strong>Batchwise Courses:</strong>  SelfCoder System Provided
                                        Batchwise Courses.
                                    </p>
                                    <p>An effective SelfCoder performs the functions of creating class rosters,
                                        controllingregistration and creating waiting lists, uploading and managing
                                        documentscontaining curriculum content, delivering course content over a
                                        Web-basedinterface, allowing for an entirely remote educational experience for the
                                        instructorand student, creating and publishing course calendars, interacting
                                        betweenstudents via functionalities like instant messaging, email, and forums,
                                        toestablishing methods for assessment and testing, such as multiple choice quizzes
                                    </p>
                                </div>
                                <hr>

                                <h3>AI Based Reports and Statistics
                                </h3>
                                <p class="introduction"> With advanced reporting and tracking features, SelfCoder systems are
                                    the perfect tool to gaugethe learning progress of employees and students. Detailed
                                    reports such as course reports,user reports, group reports and compliance reports, as
                                    well as  statistics, allowstrainers to easily identify the progress of a large
                                    group of employees or individualstudents.
                                </p>
                                <hr>

                                <h3>Folder Structure</h3>
                                <div class="mt-3">
                                    <pre class="prettyprint"><span class="pun">├──</span><span class="pln"> html files</span><span class="pln">
                                    </span><span class="pun">├──</span><span class="pln"> css</span><span class="pun">/</span>
                                        </span><span class="pun"></span><span class="pln"></span><span class="pun">├──</span><span class="pln"> All css files
                                    </span><span class="pun">├──</span><span class="pln"> fonts</span><span class="pun">/</span>
                                    </span><span class="pun">├──</span><span class="pln"> img</span><span class="pun">/</span>
                                    </span><span class="pun">├──</span><span class="pln"> Js</span><span class="pun">/</span>
                                        </span><span class="pun">├──</span><span class="pln"> All common Javascripts files</span>
                                    </span><span class="pun">├──</span><span class="pln"> scss</span><span class="pun">/</span>
                                        </span><span class="pun">├──</span><span class="pln"> All scss files</span>
                                    </span></pre>
                                </div>
                                <hr>

                                <h3>Font Used</h3>
                                <div class="mt-3">
                                    <p>Google fonts are used in the template. They are as follows: <a
                                            href="https://fonts.google.com/specimen/Nunito+Sans?query=nunito">Nunito
                                            Sans
                                            Pro</a></p>
                                    <p>Icons: Demo Icon Use
                                    </p>
                                    <p>All Images are used:  SelfCoder </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </section>
    <!-- /Introduction -->
@endsection
<style>
    .tork-logo{
            width: 90px;
            height: auto;
        }
</style>
