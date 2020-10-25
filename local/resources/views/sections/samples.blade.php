<section id="samples">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2>نمونه پروژه ها</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">
                <div class="row">
                    @foreach($projects as $project)
                    <div class="col-md-4 pull-right">
                        <a class="sample-box" href="{{ $project['url'] }}" target="_blank">
                            <h3 class="sample-title">{{ $project['title'] }}</h3>
                            <p class="sample-description">{{ $project['description'] }}</p>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
