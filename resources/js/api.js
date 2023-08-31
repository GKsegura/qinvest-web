import "chartjs-adapter-moment";
import { Chart, registerables } from "chart.js";
Chart.register(...registerables);
import { getThemeFromCookie } from "../utils/cookies";

const stockDiv = document.getElementById("stockDiv");

document.addEventListener("DOMContentLoaded", () => {
    const stockForm = document.getElementById("stockForm");
    const periodSelect = document.getElementById("period"); // Seleciona o elemento <select>
    
    stockForm.addEventListener("submit", handleFormSubmit);
    periodSelect.addEventListener("keydown", (event) => {
        if (event.key === "Enter") {
            event.preventDefault();
            stockForm.dispatchEvent(new Event("submit")); // Dispatch a submit event on the form
        }
    });
    async function handleFormSubmit(event) {
        stockDiv.style.visibility = "visible";
        event.preventDefault();
    
        const tickersInput = document.getElementById("tickers"); // Obter o elemento input
        const tickers = tickersInput.value; // Extrair o valor do campo de input
        const period = document.getElementById("period").value;
    
        const data = await fetchStockData(tickers, period);
        displayStockData(data, tickers);
    }
    

    async function fetchStockData(tickers, period) {
        const response = await fetch(`/api/stock/${tickers}/${period}`);
        return await response.json();
    }

   
    
});
function setCurrentDate() {
    const currentDate = new Date();
    const day = currentDate.getDate().toString().padStart(2, '0');
    const month = (currentDate.getMonth() + 1).toString().padStart(2, '0');
    const year = currentDate.getFullYear();
    const hours = currentDate.getHours().toString().padStart(2, '0');
    const minutes = currentDate.getMinutes().toString().padStart(2, '0');

    const formattedDate = `Atualizado em: ${day}/${month}/${year} ${hours}:${minutes}`;
    
    const stockDayElement = document.getElementById("stockDay");
    stockDayElement.textContent = formattedDate;
}


function calculateCurrentPriceAndProfit(data) {
    const historicalData = data.results[0].historicalDataPrice;
    const currentClosePrice = historicalData[historicalData.length - 1].close;
    const previousClosePrice = historicalData[historicalData.length - 2].close;

    const profit = currentClosePrice - previousClosePrice;
    const profitPercentage = ((profit / previousClosePrice) * 100).toFixed(2);

    const stockPriceProfitElement = document.getElementById("stockPriceProfit");

    const currentPriceText = `${currentClosePrice.toFixed(2)} BRL`;

    let profitText;
    let profitClass;

    if (profit > 0) {
        profitText = `+${profit.toFixed(2)}`;
        profitClass = "positive";
    } else if (profit < 0) {
        profitText = `${profit.toFixed(2)}`;
        profitClass = "negative";
    } else {
        profitText = "0.00";
        profitClass = ""; // No class needed for zero profit
    }

    const profitPercentageText = `(${profitPercentage}%)`;
    const profitPercentageClass = profit >= 0 ? "positive" : "negative";

    stockPriceProfitElement.innerHTML = `${currentPriceText} <span class="${profitClass}">${profitText}</span> <span class="${profitPercentageClass}">${profitPercentageText}</span>`;
}


// Call these functions in your displayStockData function
function displayStockData(data, tickers) {
    const stockTitle = document.getElementById("stockTitle");
    stockTitle.textContent = `${tickers.toUpperCase()}`;

    setCurrentDate();
    calculateCurrentPriceAndProfit(data);

    createCharts(data, tickers);
}

const createCharts = (data, tickers) => {
    const theme = getThemeFromCookie();
    let chartFontColor = "#d7d7d7";
    if(theme == "light"){
    chartFontColor = "#121927";
    }
    else{
        chartFontColor = "#ffffff";
    }

    const stockTitle = document.getElementById("stockTitle");
    stockTitle.textContent = `${tickers.toUpperCase()}`;
    
    const historicalData = data.results[0].historicalDataPrice;
    const dates = historicalData.map((stock) => new Date(stock.date * 1000));
    const closePrices = historicalData.map((stock) => stock.close);

    const ctxStock = document.getElementById("stockChart").getContext("2d");

    const existingChartStock = Chart.getChart(ctxStock);
    if (existingChartStock) {
        existingChartStock.destroy();
    }
    function findMovingAverage(closePrices, start, end, period) {
        let sum = 0;
        const actualPeriod = Math.min(period, end - start + 1);
        for (let i = end; i > end - actualPeriod; i--) {
            sum += closePrices[i];
        }
        const average = sum / actualPeriod;

        return { avg: average };
    }

    const movingAveragePeriod = 5;
    const movingAverageDatasets = [];
    for (let i = movingAveragePeriod - 1; i < closePrices.length; i++) {
        const { avg } = findMovingAverage(
            closePrices,
            i - movingAveragePeriod + 1,
            i,
            movingAveragePeriod
        );
        movingAverageDatasets.push(avg);
    }

    const movingAveragePriceDataset = {
        label: "Moving Average Price",
        data: movingAverageDatasets,
        borderColor: "rgba(73, 255, 0, 1)",
        borderWidth: 1,
        fill: false,
        pointRadius: 0,
    };
    const inter = 20;
    const intervals = Math.floor(dates.length / inter);
    function findIntervals() {
        const datasetRanges = [];
        let number = 0;

        for (let i = 0; i < intervals + 1; i++) {
            const range = [number, number + inter];
            datasetRanges.push({ label: `${number}-${number + inter}`, range });
            number += inter;
        }

        return datasetRanges;
    }

    function findMinMaxClosePrice(closePrices, start, end) {
        let maxPrice = closePrices[start];
        let minPrice = closePrices[start];

        for (let i = start; i <= end; i++) {
            const currentPrice = closePrices[i];

            if (currentPrice > maxPrice) {
                maxPrice = currentPrice;
            } else if (currentPrice < minPrice) {
                minPrice = currentPrice;
            }
        }

        return { max: maxPrice, min: minPrice };
    }

    const datasetRanges = findIntervals();

    let additionalLength = 0;
    const upper = [];
    const lower = [];
    const donchianDatasets = datasetRanges.map((range) => {
        const { max, min } = findMinMaxClosePrice(
            closePrices,
            range.range[0],
            range.range[1]
        );
        for (let i = additionalLength; i < additionalLength + inter; i++) {
            upper[i] = max;
            lower[i] = min;
        }
        additionalLength += inter;

        return {
            upper,
            lower,
            range: range,
        };
    });
    const donchianUpperBoundDatasets = donchianDatasets.map((dataset) => ({
        ...dataset,
        data: dataset.upper,
        label: "",
    }));

    const donchianLowerBoundDatasets = donchianDatasets.map((dataset) => ({
        ...dataset,
        data: dataset.lower,
        label: `Donchian Channel`,
    }));
    const inter2 = inter + inter;
    let rangL = `${inter}-${inter2}`;
    const allDonchianDatasets = [
        ...donchianLowerBoundDatasets,
        ...donchianUpperBoundDatasets,
    ];
    allDonchianDatasets.forEach((dataset) => {
        if (dataset.range.label == rangL) {
            dataset.backgroundColor = "rgba(121, 0, 255, 0.2)";
            dataset.borderColor = "rgba(121, 0, 255, 1)";
            dataset.borderWidth = 0.5;
            dataset.fill = 1;
            dataset.hidden = false;
            dataset.pointRadius = 0;
        } else {
            dataset.pointRadius = 0;
            dataset.borderWidth = 0;
            dataset.label = "";
        }
    });

    const priceDataset = {
        label: "Price",
        data: closePrices,
        backgroundColor: "rgba(121, 0, 255, 0.2)",
        borderColor: "rgba(188, 102, 255, 1)",
        borderWidth: 1,
        labels: dates,
    };

    var currentDate = new Date();

    new Chart(ctxStock, {
        type: "line",
        data: {
            labels: dates,
            datasets: [
                ...allDonchianDatasets,
                priceDataset,
                movingAveragePriceDataset,
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
                        color: '#EC78FF',
                    },
                    ticks: {
                        color: '#EC78FF',
                    },
                },
                y: {
                    title: {
                        display: true,
                        text: "Price",
                        color: '#EC78FF',
                    },
                    ticks: {
                        color: '#EC78FF',
                    },
                },
            },
            plugins: {
                title: {
                    display: true,
                    text: "Gráfico de Preços", // Adicione o título desejado aqui
                    font: {
                        size: 25,
                        weight: 'bold',
                    },
                    color: 'purple',
                },
                legend: {
                    labels: {
                        filter: (item) => item.text !== "",
                        color: 'purple',
                    },
                },
            },
        },
    });
};
