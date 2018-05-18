@extends('layouts.master')

@section('content')
<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h3>Отправьте заявку</h3>
                <a href="#" class="btn booking-btn text-center" data-toggle="modal" data-target="#booking">Заполните форму !</a>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div id="contact" class="container parallax">
    <div class="col-md-4 col-md-offset-4 text-center">
        <h2 class="main-title">Наши контакты</h2>
        <hr>
        <div class="divide50"></div>
    </div>
    <!-- Contact Inner -->
    <div class="inner contact">
        <!-- Form Area -->
        <div class="contact-form">
            <!-- Form -->
            <form id="contact-us" method="POST" action="/blog/contact">
                @csrf
                <!-- Left Inputs -->
                <div class="col-xs-6 col-xs-12 animated" data-animation="fadeInLeft" data-animation-delay="300">
                    <!-- Name -->
                    <input type="text" name="name" id="name" required="required" class="form" placeholder="Ваше имя" />
                    <!-- Email -->
                    <input type="text" name="email" id="email" required="required" class="form" placeholder="Email" />
                    <!-- Subject -->
                    <input type="text" name="phone" id="phone" class="form" placeholder="Телефон" />
                </div><!-- End Left Inputs -->
                <!-- Right Inputs -->
                <div class="col-xs-6 col-xs-12 animated" data-animation="fadeInRight" data-animation-delay="400">
                    <!-- Message -->
                    <textarea name="body" id="body" class="form textarea"  placeholder="Сообщение"></textarea>
                </div><!-- End Right Inputs -->
                <!-- Bottom Submit -->
                <div class="relative fullwidth col-xs-12">
                    <!-- Send Button -->
                    <button type="submit" name="submit" class="form-btn semibold">Отправить</button>
                    <br>

                    @include('layouts.errors')

                </div><!-- End Bottom Submit -->
                <!-- Clear -->
                <div class="clear"></div>
            </form>

        </div><!-- End Contact Form Area -->

    </div><!-- End Inner -->
</div><!-- End Contact Section -->

<div class="map">
    <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3618.727010735933!2d91.837871!3d24.907291700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1404919738144"></iframe>
</div>  
<!-- /Map -->
@endsection
