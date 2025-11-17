<div>
    <div class="p-4 bg-white rounded-lg shadow">
        <h2 class="text-lg font-semibold text-gray-800">Sales Report</h2>
        <div class="mt-4">
            <p class="text-gray-600">Total sales for this month:</p>
            <p class="text-2xl font-bold text-gray-900">${{ number_format($totalSales, 2) }}</p>
        </div>
        <div class="mt-8">
            <canvas id="salesChart"></canvas>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('livewire:load', function () {
            const ctx = document.getElementById('salesChart').getContext('2d');
            const salesChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: @json($salesByMonth->pluck('month')->map(fn($month) => \Carbon\Carbon::create()->month($month)->format('F'))),
                    datasets: [{
                        label: 'Sales',
                        data: @json($salesByMonth->pluck('total')),
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
    @endpush
</div>
