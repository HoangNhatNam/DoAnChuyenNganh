<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>user profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            margin-top: 20px;
            background: #eee;
        }

        .fs35 {
            font-size: 35px !important;
        }

        .mw50 {
            max-width: 50px !important;
        }

        .mn {
            margin: 0 !important;
        }

        .mw140 {
            max-width: 140px !important;
        }

        .mb20 {
            margin-bottom: 20px !important;
        }

        .mr25 {
            margin-right: 25px !important;
        }

        .mw40 {
            max-width: 40px !important;
        }

        .p30 {
            padding: 30px !important;
        }

        .page-heading {
            position: relative;
            padding: 30px 40px;
            margin: -25px -20px 25px;
            border-bottom: 1px solid #d9d9d9;
            background-color: #f2f2f2;
        }

        .page-tabs {
            margin: -25px -20px 30px;
            padding: 15px 25px 0;
            border-bottom: 1px solid #ddd;
            background: #e9e9e9;
        }

        .page-tabs .nav-tabs {
            border-bottom: 0;
        }

        .page-tabs .nav-tabs > li > a {
            color: #AAA;
            padding: 10px 20px;
        }

        .page-tabs .nav-tabs > li:hover > a,
        .page-tabs .nav-tabs > li:focus > a {
            border-color: #ddd;
        }

        .page-tabs .nav-tabs > li.active > a,
        .page-tabs .nav-tabs > li.active > a:hover,
        .page-tabs .nav-tabs > li.active > a:focus {
            color: #666;
            font-weight: 600;
            background-color: #eee;
            border-bottom-color: transparent;
        }

        @media (max-width: 800px) {
            .page-tabs {
                padding: 25px 20px 0;
            }

            .page-tabs .nav-tabs li {
                float: none;
                margin-bottom: 5px;
            }

            .page-tabs .nav-tabs li:last-child,
            .page-tabs .nav-tabs li.active:last-child {
                margin-bottom: 10px;
            }

            .page-tabs .nav-tabs > li > a:hover,
            .page-tabs .nav-tabs > li > a:focus {
                border: 1px solid #DDD;
            }

            .page-tabs .nav-tabs > li.active > a,
            .page-tabs .nav-tabs > li.active > a:hover,
            .page-tabs .nav-tabs > li.active > a:focus {
                border-bottom-color: #ddd;
            }
        }

        .panel {
            position: relative;
            margin-bottom: 27px;
            background-color: #ffffff;
            border-radius: 3px;
        }

        .panel.panel-transparent {
            background: none;
            border: 0;
            margin: 0;
            padding: 0;
        }

        .panel.panel-border {
            border-style: solid;
            border-width: 0;
        }

        .panel.panel-border.top {
            border-top-width: 5px;
        }

        .panel.panel-border.right {
            border-right-width: 5px;
        }

        .panel.panel-border.bottom {
            border-bottom-width: 5px;
        }

        .panel.panel-border.left {
            border-left-width: 5px;
        }

        .panel.panel-border > .panel-heading {
            background-color: #fafafa;
            border-color: #e2e2e2;
            border-top: 1px solid transparent;
        }

        .panel.panel-border > .panel-heading > .panel-title {
            color: #999999;
        }

        .panel.panel-border.panel-default {
            border-color: #DDD;
        }

        .panel.panel-border.panel-default > .panel-heading {
            border-top: 1px solid transparent;
        }

        .panel-menu {
            background-color: #fafafa;
            padding: 12px;
            border: 1px solid #e2e2e2;
        }

        .panel-menu.dark {
            background-color: #f8f8f8;
        }

        .panel-body .panel-menu {
            border-left: 0;
            border-right: 0;
        }

        .panel-heading + .panel-menu,
        .panel-menu + .panel-body,
        .panel-body + .panel-menu,
        .panel-body + .panel-body {
            border-top: 0;
        }

        .panel-body {
            position: relative;
            padding: 15px;
            border: 1px solid #e2e2e2;
        }

        .panel-body + .panel-footer {
            border-top: 0;
        }

        .panel-heading {
            position: relative;
            height: 52px;
            line-height: 49px;
            letter-spacing: 0.2px;
            color: #999999;
            font-size: 15px;
            font-weight: 400;
            padding: 0 8px;
            background: #fafafa;
            border: 1px solid #e2e2e2;
            border-top-right-radius: 3px;
            border-top-left-radius: 3px;
        }

        .panel-heading + .panel-body {
            border-top: 0;
        }

        .panel-heading > .dropdown .dropdown-toggle {
            color: inherit;
        }

        .panel-heading .widget-menu .btn-group {
            margin-top: -3px;
        }

        .panel-heading .widget-menu .form-control {
            margin-top: 6px;
            font-size: 11px;
            height: 27px;
            padding: 2px 10px;
            border-radius: 1px;
        }

        .panel-heading .widget-menu .form-control.input-sm {
            margin-top: 9px;
            height: 22px;
        }

        .panel-heading .widget-menu .progress {
            margin-top: 11px;
            margin-bottom: 0;
        }

        .panel-heading .widget-menu .progress-bar-lg {
            margin-top: 10px;
        }

        .panel-heading .widget-menu .progress-bar-sm {
            margin-top: 15px;
        }

        .panel-heading .widget-menu .progress-bar-xs {
            margin-top: 17px;
        }

        .panel-icon {
            padding-left: 5px;
        }

        .panel-title {
            padding-left: 6px;
            margin-top: 0;
            margin-bottom: 0;
        }

        .panel-title > .fa,
        .panel-title > .glyphicon,
        .panel-title > .glyphicons,
        .panel-title > .imoon {
            top: 2px;
            min-width: 22px;
            color: inherit;
            font-size: 14px;
        }

        .panel-title > a {
            color: inherit;
        }

        .panel-footer {
            padding: 10px 15px;
            background-color: #fafafa;
            border: 1px solid #e2e2e2;
            border-bottom-right-radius: 2px;
            border-bottom-left-radius: 2px;
        }

        .panel > .list-group {
            margin-bottom: 0;
        }

        .panel > .list-group .list-group-item {
            border-radius: 0;
        }

        .panel > .list-group:first-child .list-group-item:first-child {
            border-top-right-radius: 2px;
            border-top-left-radius: 2px;
        }

        .panel > .list-group:last-child .list-group-item:last-child {
            border-bottom-right-radius: 2px;
            border-bottom-left-radius: 2px;
        }

        .panel-heading + .list-group .list-group-item:first-child {
            border-top-width: 0;
        }

        .panel-body + .list-group .list-group-item:first-child {
            border-top-width: 0;
        }

        .list-group + .panel-footer {
            border-top-width: 0;
        }

        .panel > .table,
        .panel > .table-responsive > .table,
        .panel > .panel-collapse > .table {
            margin-bottom: 0;
        }

        .panel > .table:first-child,
        .panel > .table-responsive:first-child > .table:first-child {
            border-top-right-radius: 2px;
            border-top-left-radius: 2px;
        }

        .panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
        .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
        .panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
        .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
        .panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
        .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
        .panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
        .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
            border-top-left-radius: 2px;
        }

        .panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
        .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
        .panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
        .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
        .panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
        .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
        .panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
        .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
            border-top-right-radius: 2px;
        }

        .panel > .table:last-child,
        .panel > .table-responsive:last-child > .table:last-child {
            border-bottom-right-radius: 2px;
            border-bottom-left-radius: 2px;
        }

        .panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
        .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
        .panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
        .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
        .panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
        .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
        .panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
        .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
            border-bottom-left-radius: 2px;
        }

        .panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
        .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
        .panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
        .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
        .panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
        .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
        .panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
        .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
            border-bottom-right-radius: 2px;
        }

        .panel > .panel-body + .table,
        .panel > .panel-body + .table-responsive {
            border-top: 1px solid #eeeeee;
        }

        .panel > .table > tbody:first-child > tr:first-child th,
        .panel > .table > tbody:first-child > tr:first-child td {
            border-top: 0;
        }

        .panel > .table-bordered,
        .panel > .table-responsive > .table-bordered {
            border: 0;
        }

        .panel > .table-bordered > thead > tr > th:first-child,
        .panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
        .panel > .table-bordered > tbody > tr > th:first-child,
        .panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
        .panel > .table-bordered > tfoot > tr > th:first-child,
        .panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
        .panel > .table-bordered > thead > tr > td:first-child,
        .panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
        .panel > .table-bordered > tbody > tr > td:first-child,
        .panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
        .panel > .table-bordered > tfoot > tr > td:first-child,
        .panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
            border-left: 0;
        }

        .panel > .table-bordered > thead > tr > th:last-child,
        .panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
        .panel > .table-bordered > tbody > tr > th:last-child,
        .panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
        .panel > .table-bordered > tfoot > tr > th:last-child,
        .panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
        .panel > .table-bordered > thead > tr > td:last-child,
        .panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
        .panel > .table-bordered > tbody > tr > td:last-child,
        .panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
        .panel > .table-bordered > tfoot > tr > td:last-child,
        .panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
            border-right: 0;
        }

        .panel > .table-bordered > thead > tr:first-child > td,
        .panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
        .panel > .table-bordered > tbody > tr:first-child > td,
        .panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
        .panel > .table-bordered > thead > tr:first-child > th,
        .panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
        .panel > .table-bordered > tbody > tr:first-child > th,
        .panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
            border-bottom: 0;
        }

        .panel > .table-bordered > tbody > tr:last-child > td,
        .panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
        .panel > .table-bordered > tfoot > tr:last-child > td,
        .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
        .panel > .table-bordered > tbody > tr:last-child > th,
        .panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
        .panel > .table-bordered > tfoot > tr:last-child > th,
        .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
            border-bottom: 0;
        }

        .panel > .table-responsive {
            border: 0;
            margin-bottom: 0;
        }

        .panel-group {
            margin-bottom: 19px;
        }

        .panel-group .panel-title {
            padding-left: 0;
        }

        .panel-group .panel-heading,
        .panel-group .panel-heading a {
            position: relative;
            display: block;
            width: 100%;
        }

        .panel-group.accordion-lg .panel + .panel {
            margin-top: 12px;
        }

        .panel-group.accordion-lg .panel-heading {
            font-size: 14px;
            height: 54px;
            line-height: 52px;
        }

        .panel-group .accordion-icon {
            padding-left: 35px;
        }

        .panel-group .accordion-icon:after {
            position: absolute;
            content: "\f068";
            font-family: "FontAwesome";
            font-size: 12px;
            font-style: normal;
            font-weight: normal;
            -webkit-font-smoothing: antialiased;
            color: #555;
            left: 10px;
            top: 0;
        }

        .panel-group .accordion-icon.collapsed:after {
            content: "\f067";
        }

        .panel-group .accordion-icon.icon-right {
            padding-left: 10px;
            padding-right: 30px;
        }

        .panel-group .accordion-icon.icon-right:after {
            left: auto;
            right: 5px;
        }

        .panel-group .panel {
            margin-bottom: 0;
            border-radius: 3px;
        }

        .panel-group .panel + .panel {
            margin-top: 5px;
        }

        .panel-group .panel-heading + .panel-collapse > .panel-body {
            border-top: 0;
        }

        .panel-group .panel-footer {
            border-top: 0;
        }

        .panel-group .panel-footer + .panel-collapse .panel-body {
            border-bottom: 1px solid #eeeeee;
        }


        .media {
            color: #999999;
            font-weight: 600;
            margin-top: 15px;
        }

        .media:first-child {
            margin-top: 0;
        }

        .media-right,
        .media > .pull-right {
            padding-left: 10px;
        }

        .media-left,
        .media > .pull-left {
            padding-right: 10px;
        }

        .media-left,
        .media-right,
        .media-body {
            display: table-cell;
            vertical-align: top;
        }

        .media-middle {
            vertical-align: middle;
        }

        .media-bottom {
            vertical-align: bottom;
        }

        .media-heading {
            color: #555555;
            margin-top: 0;
            margin-bottom: 5px;
        }

        .media-list {
            padding-left: 0;
            list-style: none;
        }

        /*===============================================
          Tabs
        ================================================= */
        /* Tabs Wrapper */
        .tab-block {
            position: relative;
        }

        /* Tabs Content */
        .tab-block .tab-content {
            overflow: auto;
            position: relative;
            z-index: 10;
            min-height: 125px;
            padding: 16px 12px;
            border: 1px solid #e2e2e2;
            background-color: #FFF;
        }

        /*===============================================
          Tab Navigation
        ================================================= */
        .tab-block .nav-tabs {
            position: relative;
            border: 0;
        }

        /* nav tab item */
        .tab-block .nav-tabs > li {
            float: left;
            margin-bottom: -1px;
        }

        /* nav tab link */
        .tab-block .nav-tabs > li > a {
            z-index: 9;
            position: relative;
            color: #AAA;
            font-size: 14px;
            font-weight: 400;
            padding: 14px 20px;
            margin-right: -1px;
            border-color: #e2e2e2;
            border-radius: 0;
            background: #fafafa;
        }

        .tab-block .nav-tabs > li:first-child > a {
            margin-left: 0;
        }

        /* nav tab link:hover */
        .tab-block .nav-tabs > li > a:hover {
            background-color: #f4f4f4;
        }

        /* nav tab active link:focus:hover */
        .tab-block .nav-tabs > li.active > a,
        .tab-block .nav-tabs > li.active > a:hover,
        .tab-block .nav-tabs > li.active > a:focus {
            cursor: default;
            position: relative;
            z-index: 12;
            color: #555555;
            background: #FFF;
            border-color: #e2e2e2;
            border-bottom: 1px solid #FFF;
        }

        /*===============================================
          Tab Navigation - Tabs Left
        ================================================= */
        .tabs-left {
            float: left;
        }

        /* nav tab item */
        .tabs-left > li {
            float: none;
            margin: 0 -1px -1px 0;
        }

        /* nav tab item link */
        .tabs-left > li > a {
            padding: 14px 16px;
            color: #777;
            font-weight: 600;
            border: 1px solid transparent;
            border-color: #DDD;
            background: #fafafa;
        }

        /* nav tab link:hover */
        /* nav tab active link:focus:hover */
        .tab-block .tabs-left > li.active > a,
        .tab-block .tabs-left > li.active > a:hover,
        .tab-block .tabs-left > li.active > a:focus {
            color: #555;
            border-color: #DDD #FFF #DDD #DDD;
            cursor: default;
            position: relative;
            z-index: 12;
            background: #FFF;
        }

        /*===============================================
          Tab Navigation - Tabs Right
        ================================================= */
        .tabs-right {
            float: right;
        }

        /* nav tab item */
        .tabs-right > li {
            float: none;
            margin: 0 0 -1px -1px;
        }

        /* nav tab item link */
        .tabs-right > li > a {
            padding: 14px 16px;
            color: #777;
            font-weight: 600;
            border: 1px solid transparent;
            border-color: #DDD;
            background: #fafafa;
        }

        /* nav tab link:hover */
        /* nav tab active link:focus:hover */
        .tab-block .tabs-right > li.active > a,
        .tab-block .tabs-right > li.active > a:hover,
        .tab-block .tabs-right > li.active > a:focus {
            color: #555;
            border-color: #DDD #DDD #DDD #FFF;
            cursor: default;
            position: relative;
            z-index: 12;
            background: #FFF;
        }

        /*===============================================
          Tab Navigation - Tabs Right
        ================================================= */
        .tabs-below {
            position: relative;
        }

        /* nav tab item */
        .tabs-below > li {
            float: left;
            margin-top: -1px;
        }

        /* nav tab item link */
        .tabs-below > li > a {
            position: relative;
            z-index: 9;
            margin-right: -1px;
            padding: 11px 16px;
            color: #777;
            font-weight: 600;
            border: 1px solid #DDD;
            background: #fafafa;
        }

        /* nav tab link:hover */
        /* nav tab active link:focus:hover */
        .tab-block .tabs-below > li.active > a,
        .tab-block .tabs-below > li.active > a:hover,
        .tab-block .tabs-below > li.active > a:focus {
            cursor: default;
            position: relative;
            z-index: 12;
            color: #555555;
            background: #FFF;
            border-color: #DDD;
            border-top: 1px solid #FFF;
        }
    </style>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<section id="content" class="container">
    <!-- Begin .page-heading -->
    <div class="page-heading">
        <div class="media clearfix">
            <div class="media-left pr30">
                <img class="media-object mw150"
                     src="{{asset('adminlte/dist/img/LogoDaiHocDaLat.jpg')}}"
                     alt="..." style="height: 100px">
            </div>
            <div class="media-body va-m">
                <h2 class="media-heading">{{$user->FullName}}</h2>
                <h2><small> - Profile -</small></h2>
                {{--                <p class="lead">Lorem ipsum dolor sit amet ctetur adicing elit, sed do eiusmod tempor incididunt</p>--}}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="panel">
                <div class="panel-heading">
              <span class="panel-icon">
                <i class="fa fa-star"></i>
              </span>
                    <span class="panel-title"> Thông tin tác giả</span>
                </div>
                <div class="panel-body pn">
                    <table class="table mbn tc-icon-1 tc-med-2 tc-bold-last">
                        <tbody>
                        <tr>
                            <td>
                                <span class="fa fa-user text-primary"></span>
                            </td>
                            <td>Tên đầy đủ</td>
                            <td>
                                {{$user->FullName}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fa fa-envelope text-primary"></span>
                            </td>
                            <td>Email</td>
                            <td>
                                {{$user->email}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fa fa-certificate text-primary"></span>
                            </td>
                            <td>Học vị</td>
                            <td>
                                {{optional($user->certificate)->CertificateName}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fa fa-level-up text-primary"></span>
                            </td>
                            <td>Học hàm</td>
                            <td>
                                {{optional($user->level)->LevelName}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fa fa-sitemap text-primary"></span>
                            </td>
                            <td>Hội đồng</td>
                            <td>
                                {{optional($user->regent)->RegentName}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fa fa-location-arrow text-primary"></span>
                            </td>
                            <td>Địa chỉ</td>
                            <td>
                                {{$user->Address}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fa fa-phone text-primary"></span>
                            </td>
                            <td>Số điện thoại</td>
                            <td>
                                {{$user->Phone}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fa fa-sitemap text-primary"></span>
                            </td>
                            <td>Cơ quan/ tổ chức</td>
                            <td>
                                {{$user->Org}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fa fa-building text-primary"></span>
                            </td>
                            <td>Phòng ban</td>
                            <td>
                                {{$user->Office}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fa fa-building text-primary"></span>
                            </td>
                            <td>Vị trí công tác</td>
                            <td>
                                {{$user->Position}}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading">
              <span class="panel-icon">
                <i class="fa fa-trophy"></i>
              </span>
                    <span class="panel-title"> Vai trò</span>
                </div>
                <div class="panel-body pb5">
                    @foreach($user->roles as $roleItem)
                        <span class="label label-info mr5 mb10 ib lh15">{{optional($roleItem)->name}}</span>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-8">

            <div class="tab-block">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab1" data-toggle="tab">Tóm tắt</a>
                    </li>
                    <li>
                        <a href="#tab2" data-toggle="tab">Toàn văn</a>
                    </li>
                </ul>
                <div class="tab-content p30" style="height: 730px;">
                    <div id="tab1" class="tab-pane active">
                        <?php
                        $baseUrl ='http://localhost:8000';
                        ?>
                        @if($countReportFileTT != 0)
                            @foreach($reports as $report)
                                <div class="form-row">
                                    <label class="form-label">{{$report->ReportTitle}}</label>
                                    @foreach($reportFiles as $reportFile)
                                        @foreach($reportFile->where('Type', 1)->where('Report_id', $report->id) as $reportFileItem)
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td>{{$reportFileItem->FileName}}</td>
                                                    <td>{{$reportFileItem->DateSubmit}}</td>
                                                    <td>
                                                        @can('reportfile-delete')
                                                        <a href="{{route('reportfile.delete', ['id' => $reportFileItem->id])}}"
                                                           style="color: red; text-decoration: none"
                                                           class="fa fa-times action_delete"
                                                           data-url="{{route('reportfile.delete', ['id' => $reportFileItem->id])}}"></a>
                                                        @endcan
                                                        @can('reportfile-download')
                                                        <a href="{{$baseUrl . $reportFileItem->FilePath}}"
                                                           style="text-decoration: none"
                                                           class="fa fa-download">
                                                        </a>
                                                        @endcan
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        @endforeach
                                    @endforeach
                                </div>
                            @endforeach
                        @else
                            <div>Chưa có tập tin tóm tắt</div>
                        @endif
                    </div>
                    <div id="tab2" class="tab-pane">
                        @if($countReportFileTV != 0)
                            @foreach($reports as $report)
                                <div class="form-row">
                                    <label class="form-label">{{$report->ReportTitle}}</label>
                                    @foreach($reportFiles as $reportFile)
                                        @foreach($reportFile->where('Type', 2)->where('Report_id', $report->id) as $reportFileItem)
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td>{{$reportFileItem->FileName}}</td>
                                                    <td>{{$reportFileItem->DateSubmit}}</td>
                                                    <td>
                                                        @can('reportfile-delete')
                                                        <a href="{{route('reportfile.delete', ['id' => $reportFileItem->id])}}"
                                                           style="color: red; text-decoration: none"
                                                           class="fa fa-times action_delete"
                                                           data-url="{{route('reportfile.delete', ['id' => $reportFileItem->id])}}"></a>
                                                        @endcan
                                                            @can('reportfile-download')
                                                        <a href="{{$baseUrl . $reportFileItem->FilePath}}"
                                                           style="text-decoration: none"
                                                           class="fa fa-download">
                                                        </a>
                                                            @endcan
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        @endforeach
                                    @endforeach
                                </div>
                            @endforeach
                        @else
                            <div>Chưa có tập tin toàn văn</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{asset('vendor/sweetalert2/sweetalert2@10.js')}}"></script>
<script src="{{ asset('admins/main.js') }}"></script>
</body>
</html>
