@include('layouts.header')
@vite(['resources/js/api.js'])
<div class="container">
    <form id="stockForm" class="form" method="get">
        <label class="label" for="tickers">Tickers:</label>
        <input type="text" id="tickers" name="tickers" class="input" required>

        <label class="label" for="period">Period:</label>
        <input type="text" id="period" name="period" class="input" required>

        <button type="submit" class="button">Fetch Data</button>
    </form>


    <div id="stockData">
        <ul id="stockList"></ul>
    </div>
    <div>
        <canvas id="stockChart" class="chart-canvas"></canvas>
    </div>

    <div>
        <canvas id="profitChart" class="chart-canvas"></canvas>

    </div>
</div>
@include('layouts.footer')