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

        .branch-link, .branch-link:hover {
            color: #ef810a;
            text-decoration: none;
        }

        /*, .branch-link:active {*/
        /*color: #ef810a;*/
        /*}*/

    </style>

    <div class="row content">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading content-heading">
                            <h4 class="panel-title">สาขา</h4>
                        </div>
                        <div class="panel-body">
                            @forelse($branch as $r)
                                <a href="{{ url('branch').'/'.$r->id }}" class="branch-link">
                                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                                    {{ $r->title }}</a>
                            @empty
                                พบกันในเร็วๆนี้
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel">
                <div class="panel-heading content-heading">
                    <h4 class="panel-title">ข่าวสาร & โปรโมชั่น</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        @forelse($content as $r)
                            <div class="col-md-6">
                                <div class="panel sub-promotion" onclick="contentPage({{ $r->id }})">
                                    <div class="panel-heading" style="background-color: #FFF3E0; padding: 0">
                                        <img src="{{ filePath('content', $r->image) }}"
                                             style="height: 200px; display: block; margin: 0 auto;">
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
                    {!! $content->links() !!}
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