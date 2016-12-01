@extends('web_component.main')
@section('content')

    <style>

        #owl-news .item img {
            display: block;
            width: 100%;
        }

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

        .sub-branch {
            box-shadow: 0 2px 2px rgba(0, 0, 0, .1);
            padding: 0;
            border: 10px;
        }

        .sub-branch:hover {
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

    </style>

    <div class="row content">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading content-heading">
                    <h4 class="panel-title">สาขา</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        @forelse($branch as $r)
                            <div class="col-md-6">
                                <div class="panel sub-branch" onclick="branchPage({{ $r->id }})">
                                    <div class="panel-heading" style="background-color: #FFF3E0; padding: 0">
                                        <img src="{{ filePath('branch', $r->image) }}"
                                             style="height: 60%; width: 60%; display: block; margin: 0 auto;">
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

        function branchPage(id) {
            window.location.href = "{{ url('branch') }}/" + id;
        }

    </script>
@stop