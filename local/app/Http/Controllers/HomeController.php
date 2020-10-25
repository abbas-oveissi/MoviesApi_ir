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
            ]
        ];
        return view('welcome', compact('apiList'));
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
