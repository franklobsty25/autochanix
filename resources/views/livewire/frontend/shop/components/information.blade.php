<div>
    @foreach ($informations as $item)
        <tr>
            <th class="ft-medium text-dark">{{ $item['name'] }}</th>
            <td>{{ $item['title'] }}</td>
        </tr>
    @endforeach
</div>
