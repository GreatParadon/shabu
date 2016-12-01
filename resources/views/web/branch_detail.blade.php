@extends('web_component.main')
@section('content')

    <style>

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

        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">สาขา : {{ $branch->title or 'พบกันในเร็วๆนี้' }}</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ filePath('branch', $branch->image) }}" style="width: 100%">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h1>รายละเอียด</h1>
                            {!! $branch->content or 'พบกันในเร็วๆนี้' !!}
                        </div>
                    </div>
                    <div class="row" style=" margin-top: 50px">
                        <div class="col-md-12">
                            <h1>แผนที่</h1>
                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5lHJ78QZHKv7GUO2H8IcYyjhQ8DkfSPY"></script>
                            <script>
                                var lat = '{{ $branch->lat or '18.789167'}}';
                                var lng = '{{ $branch->lon or '98.985187'}}';
                                var myCenter = new google.maps.LatLng(lat, lng);
                                var map;

                                function initialize() {
                                    var mapProp = {
                                        center: myCenter,
                                        zoom: 15,
                                        mapTypeId: google.maps.MapTypeId.ROADMAP
                                    };

                                    map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

                                    var marker = new google.maps.Marker({
                                        position: myCenter
                                    });

                                    marker.setMap(map);

                                }

                                google.maps.event.addDomListener(window, 'load', initialize);
                            </script>
                            <div id="googleMap" style="width:100%; height:400px;"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@stop