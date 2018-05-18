<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
            <ul class="list-inline">
                <li>
                    <a href="https://facebook.com/"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </li>
            </ul>
            <hr>
            <p>Copyright &copy; Все права защищены  2018</p>
            <div class="top-scroll">
                <a href="#top"><i class="fa fa-arrow-circle-up scroll"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- /Footer -->

<!-- begin:booking -->
<div class="modal fade" id="booking" tabindex="-1" role="dialog" aria-labelledby="booking" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Заполните форму</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="emailAddress">Ваш Email</label>
                        <input id="emailAddress" type="email" class="form-control input-lg" placeholder="Ваш email">
                    </div>
                    <div class="form-group">
                        <label for="password">Ваш пароль</label>
                        <input id="password" type="password" class="form-control input-lg" placeholder="Ваш пароль">
                    </div>
                    <div class="form-group">
                        <label for="country">Куда вы хотите отправиться?</label>
                        <select class="form-control" id="country">
                            <option>Чернигов</option>
                            <option>Львов</option>
                            <option>England</option>
                            <option>France</option>
                            <option>U.S.A</option>
                        </select>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn confirm-btn" value="Подтвердить">
            </div>
        </div>
    </div>
</div>
<!-- end:booking -->

<!-- JavaScript -->
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>

<!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
<script>
    $("#menu-close").click(function (e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
</script>
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
</script>
<script>
    $(function () {
        $('a[href*=#]:not([href=#])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>

<!-- modal -->
<script>

    $('.modal').on('shown.bs.modal', function () {
        var curModal = this;
        $('.modal').each(function () {
            if (this != curModal) {
                $(this).modal('hide');
            }
        });
    });

</script>