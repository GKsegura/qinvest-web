@include('layouts.header')
@vite(['resources/js/api.js'])
<div class="container">
    <form id="stockForm" class="form" method="get">
        <label class="label" for="tickers">Tickers:</label>
        <input type="text" id="tickers" name="tickers" class="input" required>

        <label class="label" for="period">Period:</label>
        <select id="period">
            <option value="3mo">3 meses</option>
            <option value="6mo">6 meses</option>
            <option value="1mo">1 mês</option>
            <option value="1y">1 ano</option>
            <option value="5y">5 anos</option>
        </select>

        <button type="submit" class="button">Fetch Data</button>
    </form>
    <div id="stockDiv">
        <canvas id="stockChart" class="chart-canvas"></canvas>
    </div>
</div>
@include('layouts.footer')