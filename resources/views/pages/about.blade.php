@extends('layout.app')

@section('title', 'Inicio - STS')

@section('content')


<section class="about-section py-5">
    <div class="container">
        <div class="row align-items-center g-5">

            <!-- Imagen -->
            <div class="col-lg-6">
                <div class="about-image-wrapper">

                    <div class="dots-pattern"></div>

                    <img src="{{ asset('images/about.jpg') }}"
                         class="img-fluid about-image"
                         alt="About STS">

                </div>
            </div>

            <!-- Contenido -->
            <div class="col-lg-6">

                <span class="section-subtitle">
                    <span class="line"></span>
                    OUR STORY
                </span>

                <h2 class="section-title">
                    Our team comes with the
                    experience and knowledge
                </h2>

                <div class="about-tabs">

                    <ul class="nav nav-pills" id="nav-tab" role="tablist">

                        <li class="nav-item">
                            <button class="nav-link active"
                                data-bs-toggle="pill"
                                data-bs-target="#who">
                                Who We Are
                            </button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link"
                                data-bs-toggle="pill"
                                data-bs-target="#vision">
                                Our Vision
                            </button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link"
                                data-bs-toggle="pill"
                                data-bs-target="#history">
                                Our History
                            </button>
                        </li>

                    </ul>

                </div>

                <div class="tab-content mt-4">

                    <div class="tab-pane fade show active" id="who">
                        <p>
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </p>

                        <p>
                            There are many variations of passages of Lorem Ipsum available,
                            but the majority have suffered alteration.
                        </p>
                    </div>

                    <div class="tab-pane fade" id="vision">
                        ...
                    </div>

                    <div class="tab-pane fade" id="history">
                        ...
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

@endsection