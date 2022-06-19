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
                        <h2>Installation</h2>
                        <p class="mt-3 mb-0">Enjoy The Most Powerful Modern SelfCoder</p>
                        <nav aria-label="breadcrumb" class="d-inline-block mt-4">
                            <ul class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index-2.html">Tork</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Installation</li>
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
    <section class="intro pt-100 pb-50">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-center">
                <!-- col -->
                @include('layouts.sidebar')
                <!-- /col -->
                <!-- col -->
                <!-- col -->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Follow</h3>
                        </div>
                        <div class="card-body">
                            <p>You must construct your own application after joining in to
                                https://selfcoder.net. Then you must include CRUD. Then you should get the app. Following
                                the download, you must complete the following steps:
                            </p>
                        </div>
                        <div class="card-body">
                            <p> <strong>1: </strong> Open a command prompt in your project's root directory and type –
                            </p>
                            <div class="alert alert-primary" role="alert">
                                <strong>composer update </strong>
                            </div>
                        </div>
                        <div class="card-body">
                            <p> <strong>2:</strong> In the mysql database, enter the name of your database.
                            </p>
                        </div>
                        <div class="card-body">
                            <p> <strong>3: </strong> Return to your command prompt and type -
                            </p>
                            <div class="alert alert-primary" role="alert">
                                <strong>php artisan serve </strong>
                            </div>
                        </div>
                        <div class="card-body">
                            <p> <strong>4: </strong> To set up the applications on a local server, open your browser and
                                navigate to the following page. and the laravel installer will be used to set up the
                                applications. –
                            </p>
                            <div class="alert alert-primary" role="alert">
                                <strong>http://127.0.0.1:8000/ </strong>
                            </div>
                        </div>
                        <div class="card-body">
                            <p> <strong>5: Form wizard setup -</strong>
                            </p>
                            <p> <strong>Environment :-</strong>
                            </p>
                            <p> <strong>1:</strong> App Name : Enter App name </p>
                            <p> <strong>2:</strong> App Environment : Local </p>
                            <p> <strong>3:</strong> App Debug : False </p>
                            <p> <strong>4:</strong> App Log Level : debug </p>
                            <p> <strong>5:</strong> App Url : App Url </p>

                            <p> <strong>Database :-</strong>
                            </p>
                            <p> <strong>1:</strong> Database Connection : mysql </p>
                            <p> <strong>2:</strong> Database Host : 127.0.0.1 </p>
                            <p> <strong>3:</strong> Database Port : 3306 </p>
                            <p> <strong>4:</strong> Database Name : Your Database name </p>
                            <p> <strong>5:</strong> Database User Name : root </p>
                            <p> <strong>5:</strong> Database Password : no need to add any password </p>

                            <p> <strong>Application :-</strong>
                            </p>
                            <p> Click <strong>install</strong> button then it will take time and after complete press
                                <strong>click here to exit</strong> button and enjoy
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
