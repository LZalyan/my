@extends('site.layouts.head')


<div class="container my-5">

    <!--Section: Content-->
    <section class="contact-section dark-grey-text mb-5">

        <style>
            .contact-section .form .btn-floating {
                left: 3px;
            }
        </style>

        <!-- Form with header -->
        <div class="card">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-8">

                    <div class="card-body form">

                        <!-- Header -->
                        <h3 class="font-weight-bold dark-grey-text mt-4"><i class="fas fa-envelope pr-2 mr-1"></i> For booking, Please pass the registration:</h3>

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="form-registration-name" class="form-control" name="registrationName">
                                    <label for="form-registration-name" class="">Your name</label>
                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="form-registration-email" class="form-control">
                                    <label for="form-registration-email" class="">Your email</label>
                                </div>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="form-registration-phone" class="form-control" name="registrationPhone">
                                    <label for="form-registration-phone" class="">Your phone</label>
                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="password" id="form-registration-password" class="form-control" name="password1">
                                    <label for="form-registration-password" class="">Your password</label>
                                </div>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="password1" id="form-registration-password1" class="form-control" name="password1">
                                    <label for="form-registration-password1" class="">Verify Your password</label>
                                </div>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4">

                    <div class="card-body contact text-center h-100 white-text">

                        <h3 class="font-weight-bold my-4 pb-2">Contact information</h3>
                        <ul class="text-lg-left list-unstyled ml-4">
                            <li>
                                <p><i class="fas fa-map-marker-alt pr-2"></i>Yerevan, Amiryan st. 12, 0045, Armenia</p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone pr-2"></i>+ 0374 23 57 89</p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope pr-2"></i>alicehotel@gmail.com</p>
                            </li>
                        </ul>

                    </div>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Form with header -->

    </section>
    <!--Section: Content-->
</div>



