import "chartjs-adapter-moment";
import { Chart, registerables } from "chart.js";
import zoomPlugin from "chartjs-plugin-zoom";
Chart.register(...registerables, zoomPlugin);
import { getThemeFromCookie } from "../utils/cookies";

function calculateProfitPercentage(previousClose, currentClose) {
    return ((currentClose - previousClose) / previousClose) * 100;
}

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

const createCharts = (data) => {
    const theme = getThemeFromCookie();
    let chartFontColor;
    theme == "light"
        ? (chartFontColor = "#121927")
        : (chartFontColor = "#ffffff");

    const historicalData = data.results[0].historicalDataPrice;
    const dates = historicalData.map((stock) => new Date(stock.date * 1000));
    const closePrices = historicalData.map((stock) => stock.close);
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
        borderColor: "rgba(255, 165, 0, 1)",
        borderWidth: 1,
        fill: false,
        pointRadius: 0,
        hidden: true,
    };
    const inter = 10;
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
            dataset.backgroundColor = "rgba(153, 51, 100, 0.2)";
            dataset.borderColor = "transparent";
            dataset.borderWidth = 0;
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
        backgroundColor: "rgba(144,0,255, 0.2)",
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
            plugins: {
                legend: {
                    labels: {
                        filter: (item) => item.text !== "",
                    },
                },
                zoom: {
                    zoom: {
                        wheel: {
                            enabled: true,
                        },
                        pinch: {
                            enabled: true,
                        },
                        mode: "x",
                    },

                    pan: {
                        enabled: true,
                        mode: "x", // Enable panning in both directions
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
        const period = document.getElementById("period").value;

        const data = await fetchStockData(tickers, period);
        displayStockData(data);
    }

    async function fetchStockData(tickers, period) {
        const response = await fetch(`/api/stock/${tickers}/${period}`);
        return await response.json();
    }

    function displayStockData(data) {
        createCharts(data);
    }
});
