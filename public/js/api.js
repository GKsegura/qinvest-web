document.addEventListener("DOMContentLoaded", () => {
    const stockForm = document.getElementById("stockForm");

    stockForm.addEventListener("submit", handleFormSubmit);

    async function handleFormSubmit(event) {
        event.preventDefault();

        const tickers = document.getElementById("tickers").value;
        const data = await fetchStockData(tickers);

        displayStockData(data);
    }

    async function fetchStockData(tickers) {
        const response = await fetch(`/api/stock/${tickers}`);
        return await response.json();
    }

    function displayStockData(data) {
        const historicalData = data.results[0].historicalDataPrice;
        const stockList = document.getElementById("stockList");
        stockList.innerHTML = ""; // Limpar a lista anterior

        historicalData.forEach((stock) => {
            const listItem = document.createElement("li");
            const date = new Date(stock.date * 1000).toLocaleDateString();
            const close = `R$ ${stock.close.toFixed(2)}`; // Adicionar "R$" e limitar a duas casas decimais
            listItem.textContent = `Date: ${date}, Close: ${close}`;
            stockList.appendChild(listItem);
        });
    }
});
