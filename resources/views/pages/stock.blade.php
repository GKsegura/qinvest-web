@include('layouts.header')
@vite(['resources/js/api.js'])

<div class="container">
    <h1>Stock Data</h1>
    <form id="stockForm">
        <label for="tickers">Tickers:</label>
        <input type="text" id="tickers" name="tickers" required>
        <button type="submit">Fetch Data</button>
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