<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Services\MailService;

class HomeController extends Controller
{
    protected $mailService;


    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }

    public function getIndex(Request $request)
    {
        $apiList = [
            [
                'id' => 'api-p1',
                'title' => 'دریافت لیست فیلم‌ها',
                'description' => 'با استفاده از این متد می‌توانید لیست فیلم‌های موجود در این وب‌سرویس را دریافت کنید. (فیلم‌های ثبت شده توسط کاربران وب‌سرویس در این لیست حضور ندارند)',
                'method' => 'GET',
                'url' => '/api/v1/movies?page={page}',
                'params' => [
                    [
                        'mandatory' => '<span class="label label-success">دلخواه</span>',
                        'name' => 'page',
                        'type' => 'query-عدد',
                        'description' => 'شماره صفحه‌ی اطلاعات'
                    ]
                ],
                'response' => '{"data":[{"id":1,"title":"The Shawshank Redemption","poster":"http://moviesapi.ir/images/tt0111161_poster.jpg","genres":["Crime","Drama"],"images":["http://moviesapi.ir/images/tt0111161_screenshot1.jpg","http://moviesapi.ir/images/tt0111161_screenshot2.jpg","http://moviesapi.ir/images/tt0111161_screenshot3.jpg"]},{"id":2,"title":"The Godfather","poster":"http://moviesapi.ir/images/tt0068646_poster.jpg","genres":["Crime","Drama"],"images":["http://moviesapi.ir/images/tt0068646_screenshot1.jpg","http://moviesapi.ir/images/tt0068646_screenshot2.jpg","http://moviesapi.ir/images/tt0068646_screenshot3.jpg"]}],"metadata":{"current_page":1,"per_page":2,"page_count":25,"total_count":250}}'
            ],
            [
                'id' => 'api-p2',
                'title' => 'جستجوی فیلم براساس نام',
                'description' => 'با استفاده از این متد می‌توانید در بین فیلم‌های وب‌سرویس و فیلم‌های ثبت‌شده توسط کاربران وب‌سرویس جستجو کنید.',
                'method' => 'GET',
                'url' => '/api/v1/movies?q={name}&page={page}',
                'params' => [
                    [
                        'mandatory' => '<span class="label label-warning">اجباری</span>',
                        'name' => 'q',
                        'type' => 'query-رشته',
                        'description' => 'نام فیلم'
                    ],
                    [
                        'mandatory' => '<span class="label label-success">دلخواه</span>',
                        'name' => 'page',
                        'type' => 'query-عدد',
                        'description' => 'شماره صفحه‌ی اطلاعات'
                    ]
                ],
                'response' => '{"data":[{"id":1,"title":"The Shawshank Redemption","poster":"http://moviesapi.ir/images/tt0111161_poster.jpg","genres":["Crime","Drama"],"images":["http://moviesapi.ir/images/tt0111161_screenshot1.jpg","http://moviesapi.ir/images/tt0111161_screenshot2.jpg","http://moviesapi.ir/images/tt0111161_screenshot3.jpg"]},{"id":2,"title":"The Godfather","poster":"http://moviesapi.ir/images/tt0068646_poster.jpg","genres":["Crime","Drama"],"images":["http://moviesapi.ir/images/tt0068646_screenshot1.jpg","http://moviesapi.ir/images/tt0068646_screenshot2.jpg","http://moviesapi.ir/images/tt0068646_screenshot3.jpg"]}],"metadata":{"current_page":1,"per_page":2,"page_count":25,"total_count":250}}'
            ],
            [
                'id' => 'api-p3',
                'title' => 'ثبت فیلم جدید(ارسال تصویر بصورت Base64)',
                'description' => 'با استفاده از این متد می‌توانید یک فیلم جدید در وب‌سرویس ثبت کنید.',
                'method' => 'POST',
                'url' => '/api/v1/movies',
                'params' => [
                    [
                        'mandatory' => '<span class="label label-warning">اجباری</span>',
                        'name' => 'title',
                        'type' => 'body-رشته',
                        'description' => 'نام فیلم'
                    ],
                    [
                        'mandatory' => '<span class="label label-warning">اجباری</span>',
                        'name' => 'imdb_id',
                        'type' => 'body-رشته',
                        'description' => 'شناسه‌ی فیلم در سایت IMDB'
                    ],
                    [
                        'mandatory' => '<span class="label label-warning">اجباری</span>',
                        'name' => 'country',
                        'type' => 'body-رشته',
                        'description' => 'کشور سازنده‌ی فیلم'
                    ],
                    [
                        'mandatory' => '<span class="label label-warning">اجباری</span>',
                        'name' => 'year',
                        'type' => 'body-عدد',
                        'description' => 'سال ساخت فیلم'
                    ],
                    [
                        'mandatory' => '<span class="label label-success">دلخواه</span>',
                        'name' => 'director',
                        'type' => 'body-رشته',
                        'description' => 'نام کارگردان فیلم'
                    ],
                    [
                        'mandatory' => '<span class="label label-success">دلخواه</span>',
                        'name' => 'imdb_rating',
                        'type' => 'body-رشته',
                        'description' => 'درجه‌ی فیلم در سایت IMDB'
                    ],
                    [
                        'mandatory' => '<span class="label label-success">دلخواه</span>',
                        'name' => 'imdb_votes',
                        'type' => 'body-رشته',
                        'description' => 'تعداد رای‌ فیلم در سایت IMDB'
                    ],
                    [
                        'mandatory' => '<span class="label label-success">دلخواه</span>',
                        'name' => 'poster',
                        'type' => 'body-رشته',
                        'description' => 'تصویر پوستر فیلم که به رشته‌ی Base64 تبدیل شده است'
                    ]
                ],
                'response' => '{"id":270,"title":"Arrival","poster":"http://moviesapi.ir/images/user-184725432658c47c82f1dde4.966303841489271938-poster.png","year":2016,"director":"","country":"USA","imdb_rating":"8.1","imdb_votes":"204,081","imdb_id":"tt2543164"}'
            ],
            [
                'id' => 'api-p4',
                'title' => 'ثبت فیلم جدید(ارسال تصویر بصورت درخواست Multipart)',
                'description' => 'با استفاده از این متد می‌توانید یک فیلم جدید در وب‌سرویس ثبت کنید.',
                'method' => 'POST',
                'url' => '/api/v1/movies/multi',
                'params' => [
                    [
                        'mandatory' => '<span class="label label-warning">اجباری</span>',
                        'name' => 'title',
                        'type' => 'رشته',
                        'description' => 'نام فیلم'
                    ],
                    [
                        'mandatory' => '<span class="label label-warning">اجباری</span>',
                        'name' => 'imdb_id',
                        'type' => 'رشته',
                        'description' => 'شناسه‌ی فیلم در سایت IMDB'
                    ],
                    [
                        'mandatory' => '<span class="label label-warning">اجباری</span>',
                        'name' => 'country',
                        'type' => 'رشته',
                        'description' => 'کشور سازنده‌ی فیلم'
                    ],
                    [
                        'mandatory' => '<span class="label label-warning">اجباری</span>',
                        'name' => 'year',
                        'type' => 'عدد',
                        'description' => 'سال ساخت فیلم'
                    ],
                    [
                        'mandatory' => '<span class="label label-success">دلخواه</span>',
                        'name' => 'director',
                        'type' => 'رشته',
                        'description' => 'نام کارگردان فیلم'
                    ],
                    [
                        'mandatory' => '<span class="label label-success">دلخواه</span>',
                        'name' => 'imdb_rating',
                        'type' => 'رشته',
                        'description' => 'درجه‌ی فیلم در سایت IMDB'
                    ],
                    [
                        'mandatory' => '<span class="label label-success">دلخواه</span>',
                        'name' => 'imdb_votes',
                        'type' => 'رشته',
                        'description' => 'تعداد رای‌ فیلم در سایت IMDB'
                    ],
                    [
                        'mandatory' => '<span class="label label-success">دلخواه</span>',
                        'name' => 'poster',
                        'type' => 'فایل',
                        'description' => 'تصویر پوستر فیلم'
                    ]
                ],
                'response' => '{"id":270,"title":"Arrival","poster":"http://moviesapi.ir/images/user-184725432658c47c82f1dde4.966303841489271938-poster.png","year":2016,"director":"","country":"USA","imdb_rating":"8.1","imdb_votes":"204,081","imdb_id":"tt2543164"}'
            ],
            [
                'id' => 'api-p5',
                'title' => 'دریافت اطلاعات یک فیلم',
                'description' => 'با استفاده از این متد و شناسه‌ی فیلم، می توانید تمامی اطلاعات موجود در رابطه با یک فیلم را دریافت کنید.',
                'method' => 'GET',
                'url' => '/api/v1/movies/{movie_id}',
                'params' => [
                    [
                        'mandatory' => '<span class="label label-warning">اجباری</span>',
                        'name' => 'movie_id',
                        'type' => 'path-عدد',
                        'description' => 'شناسه‌ی فیلم'
                    ]
                ],
                'response' => '{"id":1,"title":"The Shawshank Redemption","poster":"tt0111161_poster.jpg","year":"1994","rated":"R","released":"14 Oct 1994","runtime":"142 min","director":"Frank Darabont","writer":"Stephen King (short story \"Rita Hayworth and Shawshank Redemption\"), Frank Darabont (screenplay)","actors":"Tim Robbins, Morgan Freeman, Bob Gunton, William Sadler","plot":"Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.","country":"USA","awards":"Nominated for 7 Oscars. Another 19 wins & 30 nominations.","metascore":"80","imdb_rating":"9.3","imdb_votes":"1,738,596","imdb_id":"tt0111161","type":"movie","genres":["Crime","Drama"],"images":["http://moviesapi.ir/images/tt0111161_screenshot1.jpg","http://moviesapi.ir/images/tt0111161_screenshot2.jpg","http://moviesapi.ir/images/tt0111161_screenshot3.jpg"]}'
            ],
            [
                'id' => 'api-p6',
                'title' => 'دریافت لیست ژانرها',
                'description' => 'با استفاده از این متد می‌توانید لیست همه ژانرهای موجود در وب‌سرویس را دریافت کنید.',
                'method' => 'GET',
                'url' => '/api/v1/genres',
                'params' => [],
                'response' => '[{"id":1,"name":"Crime"},{"id":2,"name":"Drama"}]'
            ],
            [
                'id' => 'api-p7',
                'title' => 'دریافت لیست فیلم‌های یک ژانر خاص',
                'description' => 'با استفاده از شناسه‌ی یک ژانر می‌توانید لیست فیلم‌هایی که در آن ژانر قرار دارند را دریافت کنید.',
                'method' => 'GET',
                'url' => '/api/v1/genres/{genre_id}/movies?page={page}',
                'params' => [
                    [
                        'mandatory' => '<span class="label label-warning">اجباری</span>',
                        'name' => 'genre_id',
                        'type' => 'path-عدد',
                        'description' => 'شناسه‌ی ژانر'
                    ],
                    [
                        'mandatory' => '<span class="label label-success">دلخواه</span>',
                        'name' => 'page',
                        'type' => 'query-عدد',
                        'description' => 'شماره صفحه‌ی اطلاعات'
                    ]
                ],
                'response' => '{"data":[{"id":1,"title":"The Shawshank Redemption","poster":"http://moviesapi.ir/images/tt0111161_poster.jpg","genres":["Crime","Drama"],"images":["http://moviesapi.ir/images/tt0111161_screenshot1.jpg","http://moviesapi.ir/images/tt0111161_screenshot2.jpg","http://moviesapi.ir/images/tt0111161_screenshot3.jpg"]},{"id":2,"title":"The Godfather","poster":"http://moviesapi.ir/images/tt0068646_poster.jpg","genres":["Crime","Drama"],"images":["http://moviesapi.ir/images/tt0068646_screenshot1.jpg","http://moviesapi.ir/images/tt0068646_screenshot2.jpg","http://moviesapi.ir/images/tt0068646_screenshot3.jpg"]}],"metadata":{"current_page":1,"per_page":2,"page_count":25,"total_count":250}}'
            ],
            [
                'id' => 'api-p8',
                'title' => 'ثبت کاربر جدید',
                'description' => 'با استفاده از این متد می‌توانید یک کاربر جدید جدید در وب‌سرویس ثبت‌نام کنید. اطلاعات کاربر (نام، ایمیل و پسورد) باید با فرمت Json در ‌Body درخواست ارسال شوند.',
                'method' => 'POST',
                'url' => '/api/v1/register',
                'params' => [
                    [
                        'mandatory' => '<span class="label label-warning">اجباری</span>',
                        'name' => 'email',
                        'type' => 'رشته',
                        'description' => 'پست الکترونیکی کاربر'
                    ],
                    [
                        'mandatory' => '<span class="label label-warning">اجباری</span>',
                        'name' => 'password',
                        'type' => 'رشته',
                        'description' => 'رمز عبور'
                    ],
                    [
                        'mandatory' => '<span class="label label-warning">اجباری</span>',
                        'name' => 'name',
                        'type' => 'رشته',
                        'description' => 'نام کاربر'
                    ]
                ],
                'response' => '{"id":23,"name":"Abbas Ov","email":"abbas@oveissi.ir","created_at":"2020-10-10 12:12:23","updated_at":"2020-10-10 12:12:23"}'
            ],
            [
                'id' => 'api-p9',
                'title' => 'لاگین و دریافت توکن',
                'description' => 'با استفاده از این متد می‌توانید در سیستم لاگین کرده و با دریافت توکن، از متدهایی که به توکن نیاز دارند استفاده کنید. توجه کنید اطلاعات بصورت form-data به وب‌سرویس ارسال شوند.',
                'method' => 'POST',
                'url' => '/oauth/token',
                'params' => [
                    [
                        'mandatory' => '<span class="label label-warning">اجباری</span>',
                        'name' => 'grant_type',
                        'type' => 'رشته',
                        'description' => 'از عبارت password برای این فیلد استفاده کنید'
                    ],
                    [
                        'mandatory' => '<span class="label label-warning">اجباری</span>',
                        'name' => 'username',
                        'type' => 'رشته',
                        'description' => 'نام کاربری'
                    ],
                    [
                        'mandatory' => '<span class="label label-warning">اجباری</span>',
                        'name' => 'password',
                        'type' => 'رشته',
                        'description' => 'رمز عبور'
                    ]
                ],
                'response' => '{"token_type":"Bearer","expries_in":16537295,"access_token":"NJhsHG6TFC5kdTEM34cMzAxFtfs34x...","refresh_token":"eNUSyyhn3kmIJ64jnUH56DMsfNUhN4..."}'
            ],
            [
                'id' => 'api-p10',
                'title' => 'رفرش کردن توکن',
                'description' => 'متد لاگین به شما access_token و refresh_token میده. برای درخواست‌هایی که نیاز به توکن دارند باید از access_token استفاده کنید. هر access_token بعد ۵ دقیقه منقضی می‌شود. برای دریافت توکن جدید باید از این متد و refresh_token استفاده کنید تا access_token جدید بگیرید.',
                'method' => 'POST',
                'url' => '/oauth/token',
                'params' => [
                    [
                        'mandatory' => '<span class="label label-warning">اجباری</span>',
                        'name' => 'grant_type',
                        'type' => 'رشته',
                        'description' => 'از عبارت refresh_token برای این فیلد استفاده کنید'
                    ],
                    [
                        'mandatory' => '<span class="label label-warning">اجباری</span>',
                        'name' => 'refresh_token',
                        'type' => 'رشته',
                        'description' => 'رفرش توکن'
                    ]
                ],
                'response' => '{"token_type":"Bearer","expries_in":16537295,"access_token":"NJhsHG6TFC5kdTEM34cMzAxFtfs34x...","refresh_token":"eNUSyyhn3kmIJ64jnUH56DMsfNUhN4..."}'
            ],
            [
                'id' => 'api-p11',
                'title' => 'گرفتن اطلاعات کاربر (نیاز به توکن دارد)',
                'description' => 'با این متد می‌توانید اطلاعات کاربر را مشاهد کنید، این متد نیاز به توکن دارد که برای بدست آوردن آن باید از متد لاگین استفاده کنید.',
                'method' => 'POST',
                'url' => '/api/user',
                'params' => [
                    [
                        'mandatory' => '<span class="label label-warning">اجباری</span>',
                        'name' => 'authorization',
                        'type' => 'header-رشته',
                        'description' => 'وقتی توکن رو توی Header میذارید، اون Bearer اولش یادتون نداره.'
                    ],
                    [
                        'mandatory' => '<span class="label label-success">دلخواه</span>',
                        'name' => 'accept',
                        'type' => 'header-رشته',
                        'description' => 'همیشه مقدار را application/json بذارید تا اگر خطایی رخ داد وب سرویس با فرمت Json پاسخ دهد.'
                    ]
                ],
                'response' => '{"id":23,"name":"Abbas Ov","email":"abbas@oveissi.ir","created_at":"2020-10-10 12:12:23","updated_at":"2020-10-10 12:12:23"}'
            ]
        ];
        $projects = [
            [
                'url'=>'https://github.com/abbas-oveissi/SearchMovies',
                'title'=>'SearchMovies (Android)',
                'description'=>'This project is an example of MVP architecture pattern.'
            ]
        ];
        return view('welcome', compact('apiList', 'projects'));

    }

    public function postIndex(Request $request)
    {
        $formContact = new \stdClass();
        $formContact->name = $request->input('name');
        $formContact->email = $request->input('email');
        $formContact->subject = $request->input('subject');
        $formContact->message = $request->input('message');
        $this->mailService->sendMail($formContact, 'emails.contact');
        return view('welcome', ['mailState' => 'پیام شما ارسال شد.']);
    }

}
