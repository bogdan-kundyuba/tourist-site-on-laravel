<div class="container">
    @if (Session::has('flash_message'))
    <div class="alert alert-info {{ Session::has('flash_message_important') ? 'alert-important' : '' }}">
        @if (Session::has('flash_message_important'))
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times</button>
        @endif
        {{ session('flash_message') }}
    </div>
    @endif
</div>
<script>
    $('div.alert').not('alert-important').delay(4000).slideUp(400);
</script>
