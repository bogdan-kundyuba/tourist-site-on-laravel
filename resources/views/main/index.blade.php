@extends('layouts.master')

@section('content')
<!-- Full Page Image Header Area -->
<div id="top" class="header">
    <div class="vert-text parallax">
        <h1 class="header-text">Туры по Украине</h1>
        <h3 class="header-text">
            <em class="header-text">У нас есть тур на ваш вкус</em>
        </h3><br />
        <a href="#about" class="btn header-btn">Узнай больше</a>
        <br/>
        <a href="#about"><img src="img/direction.png" class="space" alt="Direction"></a>
    </div>
</div>
<!-- /Full Page Image Header Area -->

<!-- Intro -->
<div id="about">
    <div class="light-wrapper">
        <div class="container inner">
            <div class="row">
                <div class="text-center">
                    <h2 class="main-title">О нашей компании</h2>
                    <hr>
                </div>
                <div class="divide50"></div>
                <div class="col-sm-4">
                    <figure><img src="img/office.jpg" alt="" style="width: 100%;"></figure>
                </div>
                <div class="col-sm-8">
                    <h4>Наше Рабочее Место</h4>
                    <p>Vestibulum ligut praesent commodo cursus magna, consectetur et. Cum socis natoque penatibus et magnis dis tellus parturient pharetra montes. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna. Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                </div>
            </div>
            <div class="divide50"></div>
            <div class="row">
                <div class="col-sm-4">
                    <h4>Наши Путешествия</h4><hr>
                    <p>Duis non lectus sit amet est imperdiet cursus elementum vitae eros. Etiam adipiscingmorbi vitae magna tellus.</p>
                    <div class="divide5"></div>
                    <ul class="progress-list">
                        <li>
                            <p>Asia <em>90%</em></p>
                            <div class="progress plain">
                                <div class="bar" style="width: 90%;"></div>
                            </div>
                        </li>
                        <li>
                            <p>Australia <em>80%</em></p>
                            <div class="progress plain">
                                <div class="bar" style="width: 80%;"></div>
                            </div>
                        </li>
                        <li>
                            <p>America <em>85%</em></p>
                            <div class="progress plain">
                                <div class="bar" style="width: 85%;"></div>
                            </div>
                        </li>
                        <li>
                            <p>Европа <em>50%</em></p>
                            <div class="progress plain">
                                <div class="bar" style="width: 50%;"></div>
                            </div>
                        </li>
                    </ul>
                    <!-- /.progress-list --> 
                </div>
                <!-- /.col -->

                <div class="col-sm-4">
                    <h4>Почему Стоит Выбирать Нас?</h4><hr>
                    <p>Vestibulum id ligula porta felis euismod semper. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. </p>
                    <div class="divide10"></div>
                    <ol class="color">
                        <li>Donec ullamcorper nulla non metus auctor.</li>
                        <li>Cras justo odio, dapibus ac facilisis in egestas.</li>
                        <li>Praesent commodo cursus magna.</li>
                        <li>Curabitur blandit tempus porttitor.</li>
                        <li>Sed posuere consectetur est at lobortis.</li>
                        <li>Aenean lacinia bibendum nulla sed consectetur.</li>
                    </ol>
                </div>
                <!-- /.col -->

                <div class="col-sm-4">
                     <h4>Почему Стоит Выбирать Нас?</h4><hr>
                    <p>Vestibulum id ligula porta felis euismod semper. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. </p>
                    <div class="divide10"></div>
                    <ol class="color">
                        <li>Donec ullamcorper nulla non metus auctor.</li>
                        <li>Cras justo odio, dapibus ac facilisis in egestas.</li>
                        <li>Praesent commodo cursus magna.</li>
                        <li>Curabitur blandit tempus porttitor.</li>
                        <li>Sed posuere consectetur est at lobortis.</li>
                        <li>Aenean lacinia bibendum nulla sed consectetur.</li>
                    </ol>
                </div>
                <!-- /.col --> 
            </div>
            <!-- /.row --> 
        </div>
        <!-- /.container --> 
    </div>
    <!-- /.light-wrapper -->
</div>
<!-- /Intro -->

<!-- Services -->
<div id="services" class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                <h2 class="main-title">Наши услуги</h2>
                <hr>
            </div>
        </div>
        <div class="divide50"></div>
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="service-item">
                    <i class="service-icon fa fa-plane"></i>
                    <h4 class="service-title">Трансферы</h4>
                    <p class="service-desc">Мы полностью обеспечиваем наши туры комфортабельными автобусами и микроавтобусами.</p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="service-item">
                    <i class="service-icon fa fa-usd"></i>
                    <h4 class="service-title">Не дорого</h4>
                    <p class="service-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni voluptatum et, alias vero, reprehenderit doloremque neque dignissimos voluptas.</p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="service-item">
                    <i class="service-icon fa fa-cutlery"></i>
                    <h4 class="service-title">Качественная еда</h4>
                    <p class="service-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni voluptatum et, alias vero, reprehenderit doloremque neque dignissimos voluptas.</p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="service-item">
                    <i class="service-icon fa fa-camera"></i>
                    <h4 class="service-title">Best Photographer's</h4>
                    <p class="service-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni voluptatum et, alias vero, reprehenderit doloremque neque dignissimos voluptas.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Services -->

<!-- Callout -->
<div class="callout">
    <div class="vert-text">
        <h1 class="main-title parallax2">Ваш личный экскурсовод</h1>
    </div>
</div>
<!-- /Callout -->

<!-- Portfolio -->
<div id="places" class="places">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                <h2 class="main-title">Наши экскурсии</h2>
                <hr>
            </div>
        </div>
    </div>  
    <div class="divide50"></div>  
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="grid center-block">
                    <figure class="effect-zoe">
                        <img src="img/paris.jpg" alt="paris" class="img-responsive center-block">
                        <figcaption>
                            <h2>Paris</h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-eye"></i></a>
                                <a href="#"><i class="fa fa-bookmark-o"></i></a>
                            </p>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien.
                            </p>
                        </figcaption>           
                    </figure>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="grid center-block">
                    <figure class="effect-zoe">
                        <img src="img/sydney.jpg" alt="sydney" class="img-responsive center-block">
                        <figcaption>
                            <h2>Sydney</h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-eye"></i></a>
                                <a href="#"><i class="fa fa-bookmark-o"></i></a>
                            </p>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien.
                            </p>
                        </figcaption>           
                    </figure>
                </div>
            </div>
        </div>
        <div class= "row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="grid center-block">
                    <figure class="effect-zoe">
                        <img src="img/washington.jpg" alt="washington" class="img-responsive center-block">
                        <figcaption>
                            <h2>Washington</h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-eye"></i></a>
                                <a href="#"><i class="fa fa-bookmark-o"></i></a>
                            </p>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien.
                            </p>
                        </figcaption>           
                    </figure>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="grid center-block">
                    <figure class="effect-zoe">
                        <img src="img/london.jpg" alt="london" class="img-responsive center-block">
                        <figcaption>
                            <h2>London</h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-eye"></i></a>
                                <a href="#"><i class="fa fa-bookmark-o"></i></a>
                            </p>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien.
                            </p>
                        </figcaption>           
                    </figure>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="grid center-block">
                    <figure class="effect-zoe">
                        <img src="img/statue_of_liberty.jpg" alt="statue_of_liberty" class="img-responsive center-block">
                        <figcaption>
                            <h2>U.S.A</h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-eye"></i></a>
                                <a href="#"><i class="fa fa-bookmark-o"></i></a>
                            </p>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien.
                            </p>
                        </figcaption>           
                    </figure>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="grid center-block">
                    <figure class="effect-zoe">
                        <img src="img/pizza_tower.jpg" alt="pizza_tower" class="img-responsive center-block">
                        <figcaption>
                            <h2>Pizza Tower</h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-eye"></i></a>
                                <a href="#"><i class="fa fa-bookmark-o"></i></a>
                            </p>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien.
                            </p>
                        </figcaption>           
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Portfolio -->

<div class="map">
    <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3618.727010735933!2d91.837871!3d24.907291700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1404919738144"></iframe>
</div>  
<!-- /Map -->


@endsection