@extends('web.layouts.app4')
@section('title')
Book-Now
@endsection
@section('content')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="breadcrumb-option">
                    <a href="#">Home</a>
                    <span>Book</span>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="breadcrumb-text">
                    <h3>Book Now</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->


    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="form-header">
                            <h1>Book an appointment</h1>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">First Name</span>
                                        <input class="form-control" readonly type="text" value="{{$user->fname}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Last Name</span>
                                        <input class="form-control" readonly type="email" value="{{$user->lname}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Email</span>
                                <input class="form-control" readonly type="email" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Phone</span>
                                <input class="form-control" type="tel" readonly value="{{$user->phone}}">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Preferred Make-Up Artist</span>
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                                <span class="select-arrow"></span>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Book Date</span>
                                        <input class="form-control" type="date" required>
                                    </div>
                                </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Book Time</span>
                                            <input class="form-control" type="time" required>
                                        </div>
                                    </div>
                            </div>
                            <div class="form-btn">
                                <button class="submit-btn">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
