@extends('web_component.main')
@section('content')

    <style>

        #owl-promotion .item img {
            display: block;
            width: 100%;
        }

        footer {
            margin-top: 50px;
        }

        .content {
            margin-top: 50px;
        }

        .content div img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
        }

    </style>

    <div class="row content">
        <div class="col-md-4">

        </div>
        <div class="col-md-8">

        </div>
    </div>

    <script type="application/javascript">
        $(document).ready(function () {

            $("#owl-promotion").owlCarousel({
                slideSpeed: 200,
                paginationSpeed: 800,
                singleItem: true,
                pagination: true

            });

        });
    </script>
@stop