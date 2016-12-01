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
                    <h4 class="panel-title">เกี่ยวกับเรา</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            {!! $about->content or 'พบกันในเร็วๆนี้' !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop