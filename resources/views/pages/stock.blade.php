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
    </form>
    <div id="stockDiv">
        <div id="stockInfo">
            <img src="assets/deola.jpg" alt="Logo" id="theme-logo" class="stockLogo">
        <div id="stockInfotxt">
        <h3 id="stockTitle"></h3>
        <p id="stockPriceProfit" class="stockText"></p>
        <p id="stockDay" class="stockText"></p>
        </div>
        </div>
        <canvas id="stockChart" class="chart-canvas"></canvas>
        <a class="stockLearn" href="./education">Aprenda mais sobre o gráfico</a>
        <br>
        <img src="assets/deola.jpg" alt="Logo" id="stockLogoSm">
    </div>
</div>
@include('layouts.footer')