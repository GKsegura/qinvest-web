import "chartjs-adapter-moment"; // Importe o plugin
import { Chart } from "chart.js"; // Importe o módulo Chart

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

        // Chamar a função para criar o gráfico
        createChart(data);
    }
});

function createChart(data) {
    const historicalData = data.results[0].historicalDataPrice;
    const dates = historicalData.map((stock) => stock.date * 1000); // Mantenha em milissegundos
    const closePrices = historicalData.map((stock) => stock.close);

    const ctx = document.getElementById("stockChart").getContext("2d");
    new Chart(ctx, {
        type: "line",
        data: {
            labels: dates,
            datasets: [
                {
                    label: "Close Prices",
                    data: closePrices,
                    backgroundColor: "rgba(75, 192, 192, 0.2)",
                    borderColor: "rgba(75, 192, 192, 1)",
                    borderWidth: 1,
                },
            ],
        },
        options: {
            scales: {
                x: {
                    type: "linear", // Use "linear" para escalas numéricas
                    title: {
                        display: true,
                        text: "Date",
                    },
                },
                y: {
                    title: {
                        display: true,
                        text: "Close Price (R$)",
                    },
                },
            },
        },
    });
}
