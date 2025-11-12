@php
$informations = [
    [
        'name' => 'ID', 
        'title' => '#1253458', 
    ],
    [
        'name' => 'SKU', 
        'title' => 'KUM125896', 
    ],
    [
        'name' => 'Color', 
        'title' => 'Sky Blue', 
    ],
    [
        'name' => 'Size', 
        'title' => 'Xl, 42', 
    ],
    [
        'name' => 'Weight', 
        'title' => '450 Gr', 
    ]
];
@endphp

@foreach ($informations as $item)
    <tr>
        <th class="ft-medium text-dark">{{ $item['name'] }}</th>
        <td>{{ $item['title'] }}</td>
    </tr>
@endforeach