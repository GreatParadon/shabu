<style>

    #owl-index .item img {
        margin-top: 0;
        display: block;
        width: 100%;
    }

    .shabu-logo_bg {
        width: 100%;
    }

    .shabu-logo {
        top: 10%;
        bottom: 10%;
        left: 45%;
        right: 45%;
        position: absolute;
        display: block;
        width: 11%;
    }

</style>

<div class="row shabu-header">
    <div class="col-md-12">
        <img class="shabu-logo_bg" src="{{ asset('resources/header/logo_bg.png') }}">
        <img class="shabu-logo" src="{{ asset('resources/header/logo.png') }}">
    </div>
</div>

@include('web_component.menu')

<div class="row shabu-banner">
    <div class="col-md-12">
        <div id="owl-index" class="owl-carousel owl-theme">
            @foreach(['banner1.png','header1.png'] as $r)
                <div class="item"><img src="{{ asset('resources/banner').'/'.$r }}"></div>
            @endforeach
        </div>
    </div>
</div>

<script type="application/javascript">
    $(document).ready(function () {

        $("#owl-index").owlCarousel({
            slideSpeed: 200,
            paginationSpeed: 800,
            singleItem: true,
            pagination: true

        });

    });
</script>