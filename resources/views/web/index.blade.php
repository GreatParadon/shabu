@extends('web_component.main')
@section('content')

    <style>

        #owl-promotion .item img {
            display: block;
            width: 100%;
        }

        .panel-heading {
            /*background-color: #fff;*/
            background-color: #ef810a;
            text-align: center;
            color: #000;
            border-radius: 0;

        }

        .panel {
            border-radius: 0;
            border: 0;
        }

    </style>

    <div class="row content">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">ข่าวสาร</h4>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">ติดตาม</h4>
                        </div>
                        <div class="panel-body">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLa-Maison-De-VALLE-546413978892930%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=977149125690271"
                                    style="width: 100%; height: 496px; border:none; overflow:hidden" scrolling="no"
                                    frameborder="0"
                                    allowTransparency="true"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">โปรโมชั่น</h4>
                </div>
                <div class="panel-body">
                    @foreach($promotion as $r)
                        <div class="row">
                            <div class="col-md-12">

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
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