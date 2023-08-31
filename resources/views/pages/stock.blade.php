@include('layouts.header')
@vite(['resources/js/api.js'])
<div class="container">
    <form id="stockForm" class="form" method="get">
        
        <label class="label" for="tickers">Tickers:</label>
        <br>
        <input type="text" id="tickers" name="tickers" class="input" placeholder="Exemplo: PETR4" required>
        <button type="submit" class="button"><i class="fa-solid fa-arrow-right fa-beat-fade"></i></button> 
        <br>
        <br>
        <label class="label" for="period">Period:</label>
        <br>
        <select id="period">
            <option value="3mo">3 meses</option>
            <option value="6mo">6 meses</option>
            <option value="1mo">1 mês</option>
            <option value="1y">1 ano</option>
            <option value="5y">5 anos</option>
        </select>
        <br>
        <!-- <button type="submit" class="button">Fetch Data</button> -->
    </form>
    <div id="stockDiv">
        <div id="stockInfo">
            <img src="assets/logo.svg" alt="Logo" class="stockLogo">
        <h3 id="stockTitle"></h3>
        <p id="stockDay" class="stockText"></p>
        <p id="stockPriceProfit" class="stockText"></p>
        </div>
        <canvas id="stockChart" class="chart-canvas"></canvas>
        <a class="stockLearn" href="./education">Aprenda mais sobre o gráfico</a>
    </div>
</div>
@include('layouts.footer')