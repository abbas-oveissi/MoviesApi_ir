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
    <link href="{{ url('/css/freelancer.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">
<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <a href="https://github.com/abbas-oveissi/MoviesApi_ir"><img style="position: absolute;z-index: 9999; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/652c5b9acfaddf3a9c326fa6bde407b87f7be0f4/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6f72616e67655f6666373630302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png"></a>

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#page-top">وب‌سرویس فیلم‌ها</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#api">راهنمای وب‌سرویس</a>
                </li>
                <li class="page-scroll">
                    <a href="#about">هدف پروژه</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact">تماس با ما</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="img/profile.png" alt="">
                <div class="intro-text">
                    <span class="name">وب‌سرویس فیلم‌ها (آزمایشی)</span>
                    <hr class="star-light">
                    <span class="skills">این وب‌سرویس برای ارائه‌ی اطلاعات درباره‌ی فیلم‌های برتر تاریخ است که با هدف آموزشی طراحی شده است.</span>
                </div>
            </div>
        </div>
    </div>
</header>

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


                <p>برای استفاده از این وب‌سرویس نیاز به دریافت هیچگونه api_key یا token ندارید اما توجه داشته باشید که اطلاعات ثبت شده توسط شما در این وب‌سرویس، بعد از 10 دقیقه از روی آن پاک می‌شود.</p>

                <p>لیست متدهای این وب‌سرویس به شرح زیر می باشد:</p>
                <ul>
                    <li class="page-scroll"><a href="#api-p1"> <i class="fa fa-square"></i>دریافت لیست فیلم‌ها</a></li>
                    <li class="page-scroll"><a href="#api-p2"> <i class="fa fa-square"></i>جستجوی فیلم براساس نام</a></li>
                    <li class="page-scroll"><a href="#api-p3"> <i class="fa fa-square"></i>ثبت فیلم جدید(ارسال تصویر بصورت Base64)</a></li>
                    <li class="page-scroll"><a href="#api-p4"> <i class="fa fa-square"></i>ثبت فیلم جدید(ارسال تصویر بصورت درخواست multipart)</a></li>
                    <li class="page-scroll"><a href="#api-p5"> <i class="fa fa-square"></i>دریافت اطلاعات یک فیلم</a></li>
                    <li class="page-scroll"><a href="#api-p6"> <i class="fa fa-square"></i>دریافت لیست ژانرها</a></li>
                    <li class="page-scroll"><a href="#api-p7"> <i class="fa fa-square"></i>دریافت لیست فیلم‌های یک ژانر خاص</a></li>
                </ul>
            </div>
            <div id="api-p1" class="col-md-10 col-md-offset-1 col-xs-12 api-box">
                <h3>دریافت لیست فیلم‌ها</h3>
                <p>با استفاده از این متد می‌توانید لیست فیلم‌های موجود در این وب‌سرویس را دریافت کنید. (فیلم‌های ثبت شده توسط کاربران وب‌سرویس در این لیست حضور ندارند)</p>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#api1" data-toggle="collapse" data-parent="#accordion" aria-expanded="true">
                                <span class="method">GET</span>
                                <span class="url"> /api/v1/movies?page={page}</span>
                            </a>
                        </h4>
                    </div>
                    <div id="api1" class="panel-collapse collapse in" aria-expanded="true">
                        <div class="panel-body">
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
                                <tr>
                                    <td><span class="label label-success">دلخواه</span></td>
                                    <td>page</td>
                                    <td>query-عدد</td>
                                    <td>شماره صفحه‌ی اطلاعات</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="separator"></div>
                            <p>نمونه جواب این متد به شکل زیر می باشد:</p>
                <pre>
{
  "data": [
    {
      "id": 1,
      "title": "The Shawshank Redemption",
      "poster": "http://moviesapi.ir/images/tt0111161_poster.jpg",
      "genres": [
        "Crime",
        "Drama"
      ],
      "images": [
        "http://moviesapi.ir/images/tt0111161_screenshot1.jpg",
        "http://moviesapi.ir/images/tt0111161_screenshot2.jpg",
        "http://moviesapi.ir/images/tt0111161_screenshot3.jpg"
      ]
    },
    {
      "id": 2,
      "title": "The Godfather",
      "poster": "http://moviesapi.ir/images/tt0068646_poster.jpg",
      "genres": [
        "Crime",
        "Drama"
      ],
      "images": [
        "http://moviesapi.ir/images/tt0068646_screenshot1.jpg",
        "http://moviesapi.ir/images/tt0068646_screenshot2.jpg",
        "http://moviesapi.ir/images/tt0068646_screenshot3.jpg"
      ]
    }
  ],
  "metadata": {
    "current_page": 1,
    "per_page": 2,
    "page_count": 25,
    "total_count": 250
  }
}
                </pre>
                        </div>
                    </div>
                </div>

            </div>
            <div id="api-p2" class="col-md-10 col-md-offset-1 col-xs-12 api-box">
                <h3>جستجوی فیلم براساس نام</h3>
                <p>با استفاده از این متد می‌توانید در بین فیلم‌های وب‌سرویس و فیلم‌های ثبت‌شده توسط کاربران وب‌سرویس جستجو کنید.</p>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#api2" data-toggle="collapse" data-parent="#accordion" aria-expanded="true">
                                <span class="method">GET</span>
                                <span class="url"> /api/v1/movies?q={name}&page={page}</span>
                            </a>
                        </h4>
                    </div>
                    <div id="api2" class="panel-collapse collapse in" aria-expanded="true">
                        <div class="panel-body">
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
                                <tr>
                                    <td><span class="label label-warning">اجباری</span></td>
                                    <td>q</td>
                                    <td>query-رشته</td>
                                    <td>نام فیلم</td>
                                </tr>
                                <tr>
                                    <td><span class="label label-success">دلخواه</span></td>
                                    <td>page</td>
                                    <td>query-عدد</td>
                                    <td>شماره صفحه‌ی اطلاعات</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="separator"></div>
                            <p>نمونه جواب این متد به شکل زیر می‌باشد:</p>
                            <pre>
{
  "data": [
    {
      "id": 1,
      "title": "The Shawshank Redemption",
      "poster": "http://moviesapi.ir/images/tt0111161_poster.jpg",
      "genres": [
        "Crime",
        "Drama"
      ],
      "images": [
        "http://moviesapi.ir/images/tt0111161_screenshot1.jpg",
        "http://moviesapi.ir/images/tt0111161_screenshot2.jpg",
        "http://moviesapi.ir/images/tt0111161_screenshot3.jpg"
      ]
    },
    {
      "id": 2,
      "title": "The Godfather",
      "poster": "http://moviesapi.ir/images/tt0068646_poster.jpg",
      "genres": [
        "Crime",
        "Drama"
      ],
      "images": [
        "http://moviesapi.ir/images/tt0068646_screenshot1.jpg",
        "http://moviesapi.ir/images/tt0068646_screenshot2.jpg",
        "http://moviesapi.ir/images/tt0068646_screenshot3.jpg"
      ]
    }
  ],
  "metadata": {
    "current_page": 1,
    "per_page": 2,
    "page_count": 25,
    "total_count": 250
  }
}
                            </pre>
                        </div>
                    </div>
                </div>

            </div>

            <div id="api-p3" class="col-md-10 col-md-offset-1 col-xs-12 api-box">
                <h3>ثبت فیلم جدید(ارسال تصویر بصورت Base64)</h3>
                <p>با استفاده از این متد می‌توانید یک فیلم جدید در وب‌سرویس ثبت کنید.</p>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#api3" data-toggle="collapse" data-parent="#accordion" aria-expanded="true">
                                <span class="method">POST</span>
                                <span class="url"> /api/v1/movies</span>
                            </a>
                        </h4>
                    </div>
                    <div id="api3" class="panel-collapse collapse in" aria-expanded="true">
                        <div class="panel-body">
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
                                <tr>
                                    <td><span class="label label-warning">اجباری</span></td>
                                    <td>title</td>
                                    <td>body-رشته</td>
                                    <td>نام فیلم</td>
                                </tr>
                                <tr>
                                    <td><span class="label label-warning">اجباری</span></td>
                                    <td>imdb_id</td>
                                    <td>body-رشته</td>
                                    <td>شناسه‌ی فیلم در سایت IMDB</td>
                                </tr>


                                <tr>
                                    <td><span class="label label-warning">اجباری</span></td>
                                    <td>country</td>
                                    <td>body-رشته</td>
                                    <td>کشور سازنده‌ی فیلم</td>
                                </tr>
                                <tr>
                                    <td><span class="label label-warning">اجباری</span></td>
                                    <td>year</td>
                                    <td>body-عدد</td>
                                    <td>سال ساخت فیلم</td>
                                </tr>
                                <tr>
                                    <td><span class="label label-success">دلخواه</span></td>
                                    <td>director</td>
                                    <td>body-رشته</td>
                                    <td>نام کارگردان فیلم</td>
                                </tr>
                                <tr>
                                    <td><span class="label label-success">دلخواه</span></td>
                                    <td>imdb_rating</td>
                                    <td>body-رشته</td>
                                    <td>درجه‌ی فیلم در سایت IMDB</td>
                                </tr>
                                <tr>
                                    <td><span class="label label-success">دلخواه</span></td>
                                    <td>imdb_votes</td>
                                    <td>body-رشته</td>
                                    <td>تعداد رای‌ فیلم در سایت IMDB</td>
                                </tr>
                                <tr>
                                    <td><span class="label label-success">دلخواه</span></td>
                                    <td>poster</td>
                                    <td>body-رشته</td>
                                    <td>تصویر پوستر فیلم که به رشته‌ی Base64 تبدیل شده است</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="separator"></div>
                            <p>نمونه جواب این متد به شکل زیر می‌باشد:</p>
                            <pre>
{
  "id": 270,
  "title": "Arrival",
  "poster": "http://moviesapi.ir/images/user-184725432658c47c82f1dde4.966303841489271938-poster.png",
  "year": 2016,
  "director": "",
  "country": "USA",
  "imdb_rating": "8.1",
  "imdb_votes": "204,081",
  "imdb_id": "tt2543164"
}
                </pre>
                        </div>
                    </div>
                </div>

            </div>



            <div id="api-p4" class="col-md-10 col-md-offset-1 col-xs-12 api-box">
                <h3>ثبت فیلم جدید(ارسال تصویر بصورت درخواست Multipart)</h3>
                <p>با استفاده از این متد می‌توانید یک فیلم جدید در وب‌سرویس ثبت کنید.</p>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#api4" data-toggle="collapse" data-parent="#accordion" aria-expanded="true">
                                <span class="method">POST</span>
                                <span class="url"> /api/v1/movies/multi</span>
                            </a>
                        </h4>
                    </div>
                    <div id="api4" class="panel-collapse collapse in" aria-expanded="true">
                        <div class="panel-body">
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
                                <tr>
                                    <td><span class="label label-warning">اجباری</span></td>
                                    <td>title</td>
                                    <td>رشته</td>
                                    <td>نام فیلم</td>
                                </tr>
                                <tr>
                                    <td><span class="label label-warning">اجباری</span></td>
                                    <td>imdb_id</td>
                                    <td>رشته</td>
                                    <td>شناسه‌ی فیلم در سایت IMDB</td>
                                </tr>


                                <tr>
                                    <td><span class="label label-warning">اجباری</span></td>
                                    <td>country</td>
                                    <td>رشته</td>
                                    <td>کشور سازنده‌ی فیلم</td>
                                </tr>
                                <tr>
                                    <td><span class="label label-warning">اجباری</span></td>
                                    <td>year</td>
                                    <td>عدد</td>
                                    <td>سال ساخت فیلم</td>
                                </tr>
                                <tr>
                                    <td><span class="label label-success">دلخواه</span></td>
                                    <td>director</td>
                                    <td>رشته</td>
                                    <td>نام کارگردان فیلم</td>
                                </tr>
                                <tr>
                                    <td><span class="label label-success">دلخواه</span></td>
                                    <td>imdb_rating</td>
                                    <td>رشته</td>
                                    <td>درجه‌ی فیلم در سایت IMDB</td>
                                </tr>
                                <tr>
                                    <td><span class="label label-success">دلخواه</span></td>
                                    <td>imdb_votes</td>
                                    <td>رشته</td>
                                    <td>تعداد رای‌ فیلم در سایت IMDB</td>
                                </tr>
                                <tr>
                                    <td><span class="label label-success">دلخواه</span></td>
                                    <td>poster</td>
                                    <td>فایل</td>
                                    <td>تصویر پوستر فیلم</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="separator"></div>
                            <p>نمونه جواب این متد به شکل زیر می‌باشد:</p>
                            <pre>
{
  "id": 270,
  "title": "Arrival",
  "poster": "http://moviesapi.ir/images/user-184725432658c47c82f1dde4.966303841489271938-poster.png",
  "year": 2016,
  "director": "",
  "country": "USA",
  "imdb_rating": "8.1",
  "imdb_votes": "204,081",
  "imdb_id": "tt2543164"
}
                </pre>
                        </div>
                    </div>
                </div>

            </div>


            <div id="api-p5" class="col-md-10 col-md-offset-1 col-xs-12 api-box">
                <h3>دریافت اطلاعات یک فیلم</h3>
                <p>با استفاده از این متد و شناسه‌ی فیلم، می توانید تمامی اطلاعات موجود در رابطه با یک فیلم را دریافت کنید.                </p>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#api5" data-toggle="collapse" data-parent="#accordion" aria-expanded="true">
                                <span class="method">GET</span>
                                <span class="url"> /api/v1/movies/{movie_id}</span>
                            </a>
                        </h4>
                    </div>
                    <div id="api5" class="panel-collapse collapse in" aria-expanded="true">
                        <div class="panel-body">
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
                                <tr>
                                    <td><span class="label label-warning">اجباری</span></td>
                                    <td>movie_id</td>
                                    <td>path-عدد</td>
                                    <td>شناسه‌ی فیلم</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="separator"></div>
                            <p>نمونه جواب این متد به شکل زیر می‌باشد:</p>
                <pre>
{
  "id": 1,
  "title": "The Shawshank Redemption",
  "poster": "tt0111161_poster.jpg",
  "year": "1994",
  "rated": "R",
  "released": "14 Oct 1994",
  "runtime": "142 min",
  "director": "Frank Darabont",
  "writer": "Stephen King (short story \"Rita Hayworth and Shawshank Redemption\"), Frank Darabont (screenplay)",
  "actors": "Tim Robbins, Morgan Freeman, Bob Gunton, William Sadler",
  "plot": "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.",
  "country": "USA",
  "awards": "Nominated for 7 Oscars. Another 19 wins & 30 nominations.",
  "metascore": "80",
  "imdb_rating": "9.3",
  "imdb_votes": "1,738,596",
  "imdb_id": "tt0111161",
  "type": "movie",
  "genres": [
    "Crime",
    "Drama"
  ],
  "images": [
    "http://moviesapi.ir/images/tt0111161_screenshot1.jpg",
    "http://moviesapi.ir/images/tt0111161_screenshot2.jpg",
    "http://moviesapi.ir/images/tt0111161_screenshot3.jpg"
  ]
}
                </pre>
                        </div>
                    </div>
                </div>

            </div>
            <div id="api-p6" class="col-md-10 col-md-offset-1 col-xs-12 api-box">
                <h3>دریافت لیست ژانرها</h3>
                <p>با استفاده از این متد می‌توانید لیست همه ژانرهای موجود در وب‌سرویس را دریافت کنید.</p>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#api6" data-toggle="collapse" data-parent="#accordion" aria-expanded="true">
                                <span class="method">GET</span>
                                <span class="url"> /api/v1/genres</span>
                            </a>
                        </h4>
                    </div>
                    <div id="api6" class="panel-collapse collapse in" aria-expanded="true">
                        <div class="panel-body">
                            <p>نمونه جواب این متد به شکل زیر می‌باشد:</p>
                    <pre>
[
  {
    "id": 1,
    "name": "Crime"
  },
  {
    "id": 2,
    "name": "Drama"
  }
]
                    </pre>
                        </div>
                    </div>
                </div>

            </div>
            <div id="api-p7" class="col-md-10 col-md-offset-1 col-xs-12 api-box">
                <h3>دریافت لیست فیلم‌های یک ژانر خاص</h3>
                <p>با استفاده از شناسه‌ی یک ژانر می‌توانید لیست فیلم‌هایی که در آن ژانر قرار دارند را دریافت کنید.</p>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#api7" data-toggle="collapse" data-parent="#accordion" aria-expanded="true">
                                <span class="method">GET</span>
                                <span class="url"> /api/v1/genres/{genre_id}/movies?page={page}</span>
                            </a>
                        </h4>
                    </div>
                    <div id="api7" class="panel-collapse collapse in" aria-expanded="true">
                        <div class="panel-body">
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
                                <tr>
                                    <td><span class="label label-warning">اجباری</span></td>
                                    <td>genre_id</td>
                                    <td>path-عدد</td>
                                    <td>شناسه‌ی ژانر</td>
                                </tr>
                                <tr>
                                    <td><span class="label label-success">دلخواه</span></td>
                                    <td>page</td>
                                    <td>query-عدد</td>
                                    <td>شماره صفحه‌ی اطلاعات</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="separator"></div>
                            <p>نمونه جواب این متد به شکل زیر می‌باشد:</p>
                <pre>
{
  "data": [
    {
      "id": 1,
      "title": "The Shawshank Redemption",
      "poster": "http://moviesapi.ir/images/tt0111161_poster.jpg",
      "genres": [
        "Crime",
        "Drama"
      ],
      "images": [
        "http://moviesapi.ir/images/tt0111161_screenshot1.jpg",
        "http://moviesapi.ir/images/tt0111161_screenshot2.jpg",
        "http://moviesapi.ir/images/tt0111161_screenshot3.jpg"
      ]
    },
    {
      "id": 2,
      "title": "The Godfather",
      "poster": "http://moviesapi.ir/images/tt0068646_poster.jpg",
      "genres": [
        "Crime",
        "Drama"
      ],
      "images": [
        "http://moviesapi.ir/images/tt0068646_screenshot1.jpg",
        "http://moviesapi.ir/images/tt0068646_screenshot2.jpg",
        "http://moviesapi.ir/images/tt0068646_screenshot3.jpg"
      ]
    }
  ],
  "metadata": {
    "current_page": 1,
    "per_page": 2,
    "page_count": 25,
    "total_count": 250
  }
}
                </pre>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="success" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>هدف پروژه</h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-xs-12 api-box text-justify">
                <p>«فیلم‌ها‌» برای حل مشکل دو گروه از توسعه‌دهندگان به وجود آماده است. گروه اول کسانی هستند که به تازگی یادگیری یک زبان جدید مثل android یا ios را شروع کرده‌اند و برای تمرین نیاز به یک وب سرویس کامل و بدون پیچیدگی‌های رایج (مثل  اجباری بودن api_key و … )  دارند. گروه دوم توسعه‌دهندگان حرفه‌ای می‌باشند که برای مقاله‌های آموزشی و یا آزمودن روش‌های مختلف نیاز به یک وب سرویس کامل دارند، البته این گروه توانایی رفع نیازشان را دارند اما با استفاده از «فیلم‌ها» می‌توانند در وقت خود صرفه‌جویی کنند.</p>
                <p>در آینده‌‌ی نزدیک متدهای بیشتری به این وب سرویس اضافه می‌شود و حتی توسعه‌دهندگان می‌توانند روش‌های authentication مثل jwt را امتحان کنند. این پروژه متن‌باز هست و از همکاری توسعه‌دهنگان استقبال می‌شود.</p>
            </div>

        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>تماس با ما</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">



            @if (isset($mailState))
                    <div class="alert alert-success">
                        <strong>{{  $mailState }}</strong>
                    </div>
            @endif


                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form name="sentMessage" id="contactForm" method="post" novalidate>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>نام</label>
                            <input type="text" class="form-control" placeholder="نام" name="name" id="name" required data-validation-required-message="لطفا نام خود را وارد کنید.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>ایمیل</label>
                            <input type="email" class="form-control" placeholder="ایمیل"  name="email" id="email" required data-validation-required-message="لطفا ایمیل خود را وارد کنید.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>موضوع</label>
                            <input type="tel" class="form-control" placeholder="موضوع" name="subject" id="subject" required data-validation-required-message="لطفا موضوع پیام را وارد کنید.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>پیام</label>
                            <textarea rows="5" class="form-control" placeholder="پیام" name="message" id="message" required data-validation-required-message="لطفا متن پیام را وارد کنید."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-success btn-lg">ارسال</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">

                <div class="footer-col col-xs-12">
                    <h4>در شبکه های اجتماعی ما را دنبال کنید</h4>
                    <ul class="list-inline">
                        <li>
                            <a href="https://twitter.com/abbas_oveissi" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/abbas-oveissi-839a0849" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="http://abbas.oveissi.ir" class="btn-social btn-outline"><i class="fa fa-fw fa-wordpress"></i></a>
                        </li>
                        <li>
                            <a href="https://github.com/abbas-oveissi/" class="btn-social btn-outline"><i class="fa fa-fw fa-github"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    تمام حقوق مادی و معنوی این سایت متعلق به عباس اویسی می باشد.
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ url('/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ url('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
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
