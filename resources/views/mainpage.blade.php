@extends('layouts.index')

@section('content')
<title>DashboardPage</title> 


<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us section-bg">
    <div class="container" data-aos="fade-up">
        <div class="row gy-4">
            <div class="col-lg-12 d-flex flex-column align-items-center">
                <div class="section-header">
                    <h2>Welcome!</h2>
                    <span>{{ Auth::user()->name }}</span>
                </div>

                <div class="row gy-4 justify-content-center">

                    <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-clipboard-data"></i>
                            <h4>Add Student Carry Marks</h4>
                            <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-gem"></i>
                            <h4>Update Student Carry Marks</h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-inboxes"></i>
                            <h4>Delete Student Carry Marks</h4>
                            <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                        </div>
                    </div><!-- End Icon Box -->

                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Why Us Section -->

@endsection
