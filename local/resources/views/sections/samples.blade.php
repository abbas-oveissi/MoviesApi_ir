<section id="samples">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>نمونه پروژه ها</h2>
                <hr class="star-primary">
            </div>
        </div>
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
</section>
