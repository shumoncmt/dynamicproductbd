<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <meta name="description"
        content="Want to communication with us? Here the Green Genesis Engineering  Limited Contact Information" />
    <meta name="keywords"
        content="Want to communication with us? Here the Green Genesis Engineering  Limited Contact Information">

    @include('master.header')
    @include('master.slider')

</head>

<body>
    <!-- Contact Start -->
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 mb-5">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                        <h3 class="display-4 text-capitalize mb-3">Send Your Message</h3>
                    </div>
                    <div class="card-body">
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                        @endif
                        <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Name"
                                            value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        <input type="text" name="email" class="form-control" placeholder="Email"
                                            value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Phone:</strong>
                                        <input type="text" name="phone" class="form-control" placeholder="Phone"
                                            value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Subject:</strong>
                                        <input type="text" name="subject" class="form-control" placeholder="Subject"
                                            value="{{ old('subject') }}">
                                        @if ($errors->has('subject'))
                                        <span class="text-danger">{{ $errors->first('subject') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Message:</strong>
                                        <textarea name="message" rows="3"
                                            class="form-control">{{ old('message') }}</textarea>
                                        @if ($errors->has('message'))
                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group text-center">
                                <button class="btn btn-success btn-submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="contact-map h-100 w-100">
                        <iframe class="h-100 w-100" style="height: 500px;"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d456.3784025658994!2d90.395635!3d23.782045!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c76a3e033945%3A0x10148203129d8607!2sGreen%20Genesis%20Engineering%20Limited!5e0!3m2!1sen!2sbd!4v1737959390127!5m2!1sen!2sbd"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="d-inline-flex bg-white w-100 border border-secondary p-4">
                        <i class="fas fa-map-marker-alt fa-2x text-secondary me-4"></i>
                        <div>
                            <h4>Address</h4>
                            <p class="mb-0">House B/113, Mosque Road, New DOHS Mohakhali, Dhaka-1206, Bangladesh</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="d-inline-flex bg-white w-100 border border-secondary p-4">
                        <i class="fas fa-envelope fa-2x text-secondary me-4"></i>
                        <div>
                            <h4>Mail Us</h4>
                            <p class="mb-0">karim@greengenesisbd.com <br>mamun@greengenesisbd.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="d-inline-flex bg-white w-100 border border-secondary p-4">
                        <i class="fa fa-phone-alt fa-2x text-secondary me-4"></i>
                        <div>
                            <h4>Telephone</h4>
                            <p class="mb-0">+8801898 777647</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


</body>





@include('master.footer')