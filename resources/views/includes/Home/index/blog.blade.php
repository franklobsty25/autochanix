@php
$blogs = [
    [
        'id' => 1,
        'img' => 'assets/img/bl-1.png',
        'date' => '26 Sep 2025',
        'title' => "Let's start bring sale on this saummer vacation.",
        'desc' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis",
    ],
    [
        'id' => 2,
        'img' => 'assets/img/bl-2.png',
        'date' => '17 July 2025',
        'title' => "collect moments, not things",
        'desc' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis",
    ],
    [
        'id' => 3,
        'img' => 'assets/img/bl-3.png',
        'date' => '10 Aug 2025',
        'title' => "Always take the scenic route",
        'desc' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis",
    ]
];
@endphp

@foreach ($blogs as $item)
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <div class="_blog_wrap">
            <div class="_blog_thumb mb-2">
                <a href="{{ route('blog-detail', ['title' => Str::slug($item['title'])]) }}" class="d-block"><img src="{{ asset($item['img']) }}" class="img-fluid rounded" alt="" /></a>
            </div>
            <div class="_blog_caption">
                <span class="text-muted">{{ $item['date'] }}</span>
                <h5 class="bl_title lh-1"><a href="{{ route('blog-detail', ['title' => Str::slug($item['title'])]) }}">{{ $item['title'] }}</a></h5>
                <p>{{ $item['desc'] }}</p>
                <a href="{{ route('blog-detail', ['title' => Str::slug($item['title'])]) }}" class="text-dark fs-sm">Continue Reading..</a>
            </div>
        </div>
    </div>
@endforeach