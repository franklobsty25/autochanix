@php
$reviews = [
    [
        'img' => 'assets/img/team-1.jpg',
        'name' => 'Daniel Rajdesh', 
        'date' => '30 jul 2025', 
        'desc' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum',
        'style' => 'single_rev d-flex align-items-start br-bottom py-3',
    ],
    [
        'img' => 'assets/img/team-2.jpg',
        'name' => 'Seema Gupta', 
        'date' => '30 Aug 2025', 
        'desc' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum',
        'style' => 'single_rev d-flex align-items-start br-bottom py-3',
    ],
    [
        'img' => 'assets/img/team-3.jpg',
        'name' => 'Mark Jugermi', 
        'date' => '10 Oct 2025', 
        'desc' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum',
        'style' => 'single_rev d-flex align-items-start br-bottom py-3',
    ],
    [
        'img' => 'assets/img/team-4.jpg',
        'name' => 'Meena Rajpoot', 
        'date' => '17 Dec 2025', 
        'desc' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum',
        'style' => 'single_rev d-flex align-items-start py-3',
    ]
];
@endphp

@foreach ($reviews as $item)
    <div class="{{ $item['style'] }}">
        <div class="single_rev_thumb"><img src="{{ asset($item['img']) }}" class="img-fluid circle" width="90" alt="" /></div>
        <div class="single_rev_caption d-flex align-items-start ps-3">
            <div class="single_capt_left">
                <h5 class="mb-0 fs-md ft-medium lh-1">{{ $item['name'] }}</h5>
                <span class="small">{{ $item['date'] }}</span>
                <p>{{ $item['desc'] }}</p>
            </div>
            <div class="single_capt_right">
                <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                </div>
            </div>
        </div>
    </div>
@endforeach