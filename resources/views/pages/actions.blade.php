@include('layouts.header')
@vite(['resources/js/api.js'])

<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    margin-top: 20px;
}

form {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
}

label {
    font-weight: bold;
}

input[type="text"] {
    padding: 5px;
    margin-right: 10px;
    width: 200px;
}

button {
    padding: 5px 10px;
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
</style>
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
        <canvas id="stockChart"></canvas>
    </div>

    <div>
        <canvas id="profitChart"></canvas>
    </div>

</div>
@include('layouts.footer')