import "chartjs-adapter-moment";
import { Chart, registerables } from "chart.js";
Chart.register(...registerables);
import { getThemeFromCookie } from "../utils/cookies";

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
    // Filtra os dados para os últimos 6 meses
    function generateDateArray(startDate, endDate) {
        const dateArray = [];
        let currentDate = new Date(startDate);

        while (currentDate <= endDate) {
            dateArray.push(new Date(currentDate));
            currentDate.setDate(currentDate.getDate() + 1);
        }

        return dateArray;
    }

    const today = new Date();
    const threeMonthsAgo = new Date(today);
    threeMonthsAgo.setMonth(today.getMonth() - 3);

    const datesArray = generateDateArray(threeMonthsAgo, today);

    console.log(datesArray);
    // Calculate the average of the received price data
    const averagePrice =
        closePrices.reduce((total, price) => total + price, 0) /
        closePrices.length;
    // Create a dataset for the average price line
    const averagePriceDataset = {
        label: "Average Price",
        data: Array(dates.length).fill(averagePrice),
        borderColor: "rgba(0, 0, 0, 1)", // Choose your desired color
        borderWidth: 1,
        borderDash: [5, 5], // Dashed line style
        fill: false,
        labels: dates,
    };

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

    const datasetRanges = [
        { label: "20", range: [0, 20] },
        { label: "40", range: [20, 40] },
        { label: "60", range: [40, 60] },
    ];

    const donchianDatasets = datasetRanges.map((range) => {
        const { max, min } = findMinMaxClosePrice(
            closePrices,
            range.range[0],
            range.range[1]
        );

        const upper = Array(range.range[1] - range.range[0] + 1).fill(null);
        const lower = Array(range.range[1] - range.range[0] + 1).fill(null);

        for (let i = range.range[0]; i <= range.range[1]; i++) {
            upper[i - range.range[0]] = max;
            lower[i - range.range[0]] = min;
        }

        return {
            upper,
            lower,
            label: `Donchian Bound (${range.label})`,
        };
    });

    donchianDatasets.forEach((dataset) => {
        dataset.backgroundColor = "rgba(200, 0, 0, 0.3)"; // Adjust color as needed
        dataset.borderColor = "transparent";
        dataset.borderWidth = 0;
        dataset.fill = true;
        dataset.labels = datesArray;
    });

    const donchianUpperBoundDatasets = donchianDatasets.map((dataset) => ({
        ...dataset,
        data: dataset.upper,
    }));

    const donchianLowerBoundDatasets = donchianDatasets.map((dataset) => ({
        ...dataset,
        data: dataset.lower,
    }));
    const allDonchianDatasets = donchianLowerBoundDatasets.concat(
        donchianUpperBoundDatasets
    );

    // Create the "Price" dataset using the filtered array
    const priceDataset = {
        label: "Price",
        data: closePrices,
        backgroundColor: "rgba(144,0,255, 0.2)",
        borderColor: "rgba(188, 102, 255, 1)",
        borderWidth: 1,
        labels: dates,
    };

    new Chart(ctxStock, {
        type: "line",
        data: {
            labels: dates,
            datasets: [
                ...allDonchianDatasets,
                priceDataset,
                averagePriceDataset,
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
