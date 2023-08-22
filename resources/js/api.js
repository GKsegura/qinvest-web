import "chartjs-adapter-moment";
import { Chart, registerables } from "chart.js";
Chart.register(...registerables);
import { getThemeFromCookie } from "../utils/cookies";

// Função para calcular a média dos preços nos últimos 6 meses
function calculateAveragePrice(historicalData) {
    const closePrices = historicalData.map((stock) => stock.close);
    const sum = closePrices.reduce((total, price) => total + price, 0);
    return sum / closePrices.length;
}

// Função para calcular a porcentagem de lucro entre dois preços
function calculateProfitPercentage(previousClose, currentClose) {
    return ((currentClose - previousClose) / previousClose) * 100;
}

// Função para calcular as porcentagens de lucro para cada período
function calculateProfitPercentages(closePrices) {
    const profitPercentages = [];

    for (let i = 0; i < closePrices.length; i++) {
        if (i === 0) {
            profitPercentages.push(null);
        } else {
            const profitPercentage = calculateProfitPercentage(
                closePrices[i - 1],
                closePrices[i]
            );
            profitPercentages.push(profitPercentage);
        }
    }
    return profitPercentages;
}

// Função para criar os gráficos
const createCharts = (data) => {
    const theme = getThemeFromCookie();
    let chartFontColor;
    theme == "light"
        ? (chartFontColor = "#121927")
        : (chartFontColor = "#ffffff");

    const historicalData = data.results[0].historicalDataPrice;

    // Filtra os dados para os últimos 6 meses
    const currentDate = new Date();
    const sixMonthsAgo = new Date(
        currentDate.getTime() - 180 * 24 * 60 * 60 * 1000
    ); // 180 dias (aproximadamente 6 meses)
    const filteredHistoricalData6Months = historicalData.filter(
        (stock) => new Date(stock.date * 1000) >= sixMonthsAgo
    );

    // Calcula a média dos preços nos últimos 6 meses
    const averagePrice6Months = calculateAveragePrice(
        filteredHistoricalData6Months
    );

    console.log(
        `Média dos Preços nos últimos 6 meses: ${averagePrice6Months.toFixed(
            2
        )}`
    );

    const dates = filteredHistoricalData6Months.map(
        (stock) => new Date(stock.date * 1000)
    );
    const closePrices = filteredHistoricalData6Months.map(
        (stock) => stock.close
    );
    const profitPercentages = calculateProfitPercentages(closePrices);

    const ctxStock = document.getElementById("stockChart").getContext("2d");
    const ctxProfit = document.getElementById("profitChart").getContext("2d");

    const existingChartStock = Chart.getChart(ctxStock);
    if (existingChartStock) {
        existingChartStock.destroy();
    }

    const existingChartProfit = Chart.getChart(ctxProfit);
    if (existingChartProfit) {
        existingChartProfit.destroy();
    }
    new Chart(ctxStock, {
        type: "line",
        data: {
            labels: dates,
            datasets: [
                {
                    label: "Price",
                    data: closePrices,
                    backgroundColor: "rgba(144,0,255, 0.2)",
                    borderColor: "rgba(188, 102, 255, 1)",
                    borderWidth: 1,
                },
            ],
        },
        options: {
            animation: {
                duration: 1500,
                easing: "linear",
            },
            scales: {
                x: {
                    type: "time",
                    time: {
                        tooltipFormat: "DD/MM/YYYY",
                        displayFormats: {
                            day: "DD/MM/YYYY",
                        },
                        unit: "day",
                        stepSize: 1,
                    },
                    title: {
                        display: true,
                        text: "Date",
                        color: chartFontColor,
                    },
                    ticks: {
                        color: chartFontColor,
                    },
                },
                y: {
                    title: {
                        display: true,
                        text: "Price",
                        color: chartFontColor,
                    },
                    ticks: {
                        color: chartFontColor,
                    },
                },
            },
        },
    });

    new Chart(ctxProfit, {
        type: "line",
        data: {
            labels: dates,
            datasets: [
                {
                    label: "Profit Percentage",
                    data: profitPercentages,
                    backgroundColor: "rgba(255,99,132, 0.2)",
                    borderColor: "rgba(255, 0, 0, 1)",
                    borderWidth: 1,
                    fill: false,
                },
            ],
        },
        options: {
            animation: {
                duration: 1500,
                easing: "linear",
            },
            scales: {
                x: {
                    type: "time",
                    time: {
                        tooltipFormat: "DD/MM/YYYY",
                        displayFormats: {
                            day: "DD/MM/YYYY",
                        },
                    },
                    title: {
                        display: true,
                        text: "Date",
                        color: chartFontColor,
                    },
                    ticks: {
                        color: chartFontColor,
                    },
                },
                y: {
                    title: {
                        display: true,
                        text: "Profit Percentage (%)",
                        color: chartFontColor,
                    },
                    ticks: {
                        color: chartFontColor,
                    },
                },
            },
        },
    });
};

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
        createCharts(data);
    }
});
