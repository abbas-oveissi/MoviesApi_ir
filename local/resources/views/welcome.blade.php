<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@abbas_oveissi" />
    <meta name="twitter:title" content="وب‌سرویس فیلم‌ها" />
    <meta name="twitter:description" content="وب‌سرویس آموزشی که اطلاعات فیلم‌های برتر تاریخ در آن قرار دارد." />
    <meta name="twitter:image" content="http://moviesapi.ir/freemoviefeat.jpg" />

    <title>وب‌سرویس فیلم‌ها</title>

    <link rel="icon" href="http://moviesapi.ir/favicon.png">
    <link href="{{url('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('/vendor/vazirfont/vazir.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('/vendor/beautify-json/jquery.json-browse.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('/css/freelancer.min.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">
<!-- Navigation -->
@include('sections.navigation')

<!-- Header -->
@include('sections.header')

<!-- Portfolio Grid Section -->
<section id="api">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>راهنمای وب سرویس</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-xs-12 api-box">

                    <p>

                        این وب‌سرویس دارای متدهای گوناگون برای دریافت و ثبت اطلاعات است، در زمان استفاده از این متدها باید به پارامترهای مشخص شده در راهنما توجه کنید.
                        در این وب‌سرویس چهارنوع پارامتر وجود دارد:
                        <br>۱- Header- این پارامترها به هدر درخواست اضافه می‌شوند.
                        <br>۲- Query- پارامترهای کوئری در ادامه‌ی آدرس و بعد از علامت '?' قرار می‌گیرند.
                        <br>۳- Path- در بخشی از آدرس قرار می‌گیرند.
                        <br>۴- Body- این نوع از پارامترها به عنوان یک خصوصیت در یک شیء Json داخل body درخواست قرار می‌گیرند.
                    </p>


                <p>برای استفاده از این وب‌سرویس نیاز به دریافت هیچگونه api_key ندارید اما توجه داشته باشید که اطلاعات ثبت شده توسط شما در این وب‌سرویس، بعد از 10 دقیقه از روی آن پاک می‌شود. البته برای اینکه توسعه‌دهندگان، تجربه‌ی کار با متدهایی که نیاز به Authentication دارند رو هم بدست بیارن، یکی از متدها که برای دریافت اطلاعات کاربر هست نیاز به توکن JWT دارد که باید بعد از ثبت‌نام کاربر جدید از متد لاگین بگیرید.</p>

                <p>لیست متدهای این وب‌سرویس به شرح زیر می باشد:</p>
                <ul class="api-list">
                    @foreach($apiList as $api)
                    <li class="page-scroll"><a href="#{{$api['id']}}"> <i class="fa fa-square"></i>{{$api['title']}}</a></li>
                    @endforeach
                </ul>
            </div>
            @foreach($apiList as $api)
            <div id="{{$api['id']}}" class="col-md-10 col-md-offset-1 col-xs-12 api-box">
                <h3>{{$api['title']}}</h3>
                <p>{{$api['description']}}</p>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#{{$api['id']}}-acc" data-toggle="collapse" data-parent="#accordion" aria-expanded="true">
                                <span class="method">{{$api['method']}}</span>
                                <span class="url"> {{$api['url']}}</span>
                            </a>
                            <button class="copy-btn" data-toggle="popover" data-container="body" data-content="آدرس در کلیپ بورد ذخیره شد" data-placement="left" rel-data="{{url($api['url'])}}">کپی URL</button>
                        </h4>
                    </div>
                    <div id="{{$api['id']}}-acc" class="panel-collapse collapse in" aria-expanded="true">
                        <div class="panel-body">
                            @if($api['params'])
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th width="100">&nbsp;</th>
                                        <th width="100">نام پارامتر</th>
                                        <th width="100">نوع پارامتر</th>
                                        <th>توضیحات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($api['params'] as $apiParam)
                                        <tr>
                                            <td>{!! $apiParam['mandatory'] !!}</td>
                                            <td>{{$apiParam['name']}}</td>
                                            <td>{{$apiParam['type']}}</td>
                                            <td>{{$apiParam['description']}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @endif
                            <div class="separator"></div>
                            <p>نمونه جواب این متد به شکل زیر می باشد:</p>
                            <pre class="prettyprint">{{ $api['response'] }}</pre>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- About Section -->
@include('sections.goal')

<!-- Samples Section -->
@include('sections.samples')

<!-- Contact Section -->
@include('sections.contact')

<!-- Footer -->
@include('sections.footer')

<script src="{{ url('/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ url('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="{{ url('/vendor/beautify-json/jquery.json-browse.js') }}"></script>
<script src="{{ url('/js/freelancer.min.js') }}"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-38597786-3', 'auto');
    ga('send', 'pageview');

</script>
</body>

</html>
