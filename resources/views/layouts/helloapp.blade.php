<html>
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
    <style>
        body{
            font-size: 16pt;
            color: #999;
            margin: 5px;
        }
        h1{
            font-size: 50pt;
            text-align: right;
            color: #f6f6f6;
            margin: -20px 0px -30px 0px;
            letter-spacing: -4pt;
        }
        ul{
            font-size: 12pt;
        }
        hr{
            margin: 25px 100px;
            border-top: 1px dashed #ddd; 
        }
        .menutitle{
            font-size: 14pt;
            font-weight: bold;
            margin: 0px;
        }
        .content{
            margin: 10px;
        }
        .footer{
            text-align: right;
            font-size: 10pt;
            margin: 10px;
            border-bottom: solid 1px #ccc;
            color: #ccc;
        }
        th{
            background-color: #999;
            color: #fff;
            padding:5px 10px;
        }
        td{
            border: solid 1px #aaa;
            color: #999;
            padding: 5px 10px;
        }

    </style>
</head>
<body>
    <h1>@yield('title')</h1>
    @section('menubar')
    <h2 class="menutitle">※メニュー</h2>
    <ul>
        <li>@show</li>
    </ul>
    <hr size="1">

    <nav>
        <ul>
            <li><a href="{{ url('user/add') }}">利用者登録</a></li>
            <li><a href="{{ url('reservation/add') }}">予約</a></li>
            <li><a href="{{ url('user') }}">利用者一覧</a></li>
            <li><a href="{{ url('reservation') }}">予約一覧</a></li>
            <li><a href="{{ url('reservation_detail') }}">予約詳細一覧</a></li>
            <li><a href="{{ url('user/list') }}">利用者／予約一覧</a></li>
            <li><a href="{{ url('reservation/list') }}">予約／利用者一覧</a></li>
            <li><a href="{{ url('reservation/list2') }}">予約／部屋一覧（多対多）</a></li>
            <li><a href="{{ url('room') }}">部屋一覧</a></li>
            <li><a href="{{ url('room_type') }}">部屋種別一覧</a></li>
            <li><a href="{{ url('room_type/list') }}">部屋種別／部屋一覧</a></li>
            <li><a href="{{ url('room/find') }}">空室検索</a></li>
            <li><a href="{{ url('room/find2') }}">空室検索2</a></li>
            <li><a href="{{ url('room/list') }}">空室一覧</a></li>          
        </ul>
    </nav>

    <div class="content">
    @yield('content')
    </div>
    <div class="footer">
        @yield('footer')
        </div>
</body>
</html>