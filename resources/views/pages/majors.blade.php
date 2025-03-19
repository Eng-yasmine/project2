@extends('layouts.app')
@section('title','majors')

@section('content')
<div class="page-wrapper">
    <nav class="navbar navbar-expand-lg navbar-expand-md bg-blue sticky-top">
        <div class="container">
            <div class="navbar-brand">
                <a class="fw-bold text-white m-0 text-decoration-none h3" href="./index.html">VCare</a>
            </div>
            <button class="navbar-toggler btn-outline-light border-0 shadow-none" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <div class="d-flex gap-3 flex-wrap justify-content-center" role="group">
                    <a type="button" class="btn btn-outline-light navigation--button" href="./index.html">Home</a>
                    <a type="button" class="btn btn-outline-light navigation--button"
                        href="./majors.html">majors</a>
                    <a type="button" class="btn btn-outline-light navigation--button"
                        href="./doctors/index.html">Doctors</a>
                    <a type="button" class="btn btn-outline-light navigation--button" href="./login.html">login</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="./index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">majors</li>
            </ol>
        </nav>
        <div class="majors-grid">
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
        </div>

        <nav class="mt-5" aria-label="navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link page-prev" href="#" aria-label="Previous">
                        <span aria-hidden="true">
                            < </span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link page-next" href="#" aria-label="Next">
                        <span aria-hidden="true"> > </span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@endsection
