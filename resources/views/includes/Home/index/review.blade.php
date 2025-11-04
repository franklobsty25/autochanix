@php
$reviews = [
    [
        'img' => 'assets/img/team-1.jpg', 
        'name' => 'Mark Jevenue',
        'title' => 'CEO of Addle',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.',
    ],
    [
        'img' => 'assets/img/team-2.jpg', 
        'name' => 'Henna Bajaj',
        'title' => 'Aqua Founder',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.',
    ],
    [
        'img' => 'assets/img/team-3.jpg', 
        'name' => 'John Cenna',
        'title' => 'CEO of Plike',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.',
    ],
    [
        'img' => 'assets/img/team-4.jpg', 
        'name' => 'Madhu Sharma',
        'title' => 'Team Manager',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.',
    ]
];
@endphp

@foreach ($reviews as $item)
    <div class="single_review">
        <div class="sng_rev_thumb"><figure><img src="{{ asset($item['img']) }}" class="img-fluid circle" alt="" /></figure></div>
        <div class="sng_rev_caption text-center">
            <div class="rev_desc mb-4">
                <p class="fs-md">{{ $item['desc'] }}</p>
            </div>
            <div class="rev_author">
                <h4 class="mb-0">{{ $item['name'] }}</h4>
                <span class="fs-sm">{{ $item['title'] }}</span>
            </div>
        </div>
    </div>
@endforeach