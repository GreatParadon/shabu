@extends('web_component.main')
@section('content')

    <style>

        .content-heading {
            /*background-color: #fff;*/
            background-color: #ef810a;
            text-align: center;
            color: #000;
            border-radius: 0;

        }

        .panel {
            border-radius: 0;
            border: 0;
            height: 100%;
        }

        .sub-promotion {
            box-shadow: 0 2px 2px rgba(0, 0, 0, .1);
            padding: 0;
            border: 10px;
            font-size: 15px;
        }

        .sub-promotion:hover {
            opacity: 0.9;
            cursor: pointer;
        }

        .btn {
            background-color: #ef810a;
            color: #FFF;
        }

        .panel-body {
            overflow: hidden;
            display: block;
        }

        .panel-title {
            font-weight: bold;
            font-size: large;
        }

    </style>

    <div class="row content">
        <div class="col-md-4">{{--
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading content-heading">
                            <h4 class="panel-title">ข่าวสาร</h4>
                        </div>
                        <div class="panel-body">
                            @forelse($news as $r)
                                <div class="row">
                                    <div class="col-md-12">

                                    </div>
                                </div>
                            @empty
                                <div class="row">
                                    <div class="col-md-12">
                                        พบกันในเร็วๆนี้
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>--}}
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading content-heading">
                            <h4 class="panel-title">ติดตาม</h4>
                        </div>
                        <div class="panel-body">
                            พบกันในเร็วๆนี้
                            {{--<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLa-Maison-De-VALLE-546413978892930%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=977149125690271"
                                    style="width: 100%; height: 496px; border:none; overflow:hidden" scrolling="no"
                                    frameborder="0"
                                    allowTransparency="true"></iframe>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel">
                <div class="panel-heading content-heading">
                    <h4 class="panel-title">ข่าว & โปรโมชั่น</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        @forelse($content as $r)
                            <div class="col-md-12">
                                <div class="panel sub-promotion" onclick="contentPage({{ $r->id }})">
                                    <div class="panel-heading" style="background-color: #FFF3E0; padding: 0">
                                        <img src="{{ filePath('content', $r->image) }}"
                                             style="height: 20%; width: 30%; display: block; margin: 0 auto;">
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-10">
                                                {{ $r->title or '' }}
                                            </div>
                                            <div class="col-md-2">
                                                <button class="btn pull-right" type="button">อ่านต่อ</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-md-12">
                                พบกันในเร็วๆนี้
                            </div>
                        @endforelse
                    </div>

                </div>
            </div>
        </div>

    </div>

    <script type="application/javascript">

        function contentPage(id) {
            window.location.href = "{{ url('content') }}/" + id;
        }
    </script>
@stop