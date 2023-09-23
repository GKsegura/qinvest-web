import { getThemeFromCookie } from "./cookies";

const createCharts = (data, tickers) => {
    const findMovingAverage = (closePrices, start, end, period) => {
        let sum = 0;
        const actualPeriod = Math.min(period, end - start + 1);
        for (let i = end; i > end - actualPeriod; i--) {
            sum += closePrices[i];
        }
        const average = sum / actualPeriod;

        return { avg: average };
    };

    const theme = getThemeFromCookie();
    let chartFontColor = "#d7d7d7";
    if (theme == "light") {
        chartFontColor = "#121927";
    } else {
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
        label: "Média Móvel",
        data: movingAverageDatasets,
        borderColor: "rgba(73, 255, 0, 1)",
        borderWidth: 2,
        fill: false,
        pointRadius: 0,
    };
    const inter = 20;
    const intervals = Math.floor(dates.length / inter);

    const findIntervals = () => {
        const datasetRanges = [];
        let number = 0;

        for (let i = 0; i < intervals + 1; i++) {
            const range = [number, number + inter];
            datasetRanges.push({ label: `${number}-${number + inter}`, range });
            number += inter;
        }

        return datasetRanges;
    };

    const findMinMaxClosePrice = (closePrices, start, end) => {
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
    };
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
        label: `Canal Donchian`,
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
        label: "Preço",
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
                        color: "#a600ff",
                    },
                    ticks: {
                        color: "#a600ff",
                    },
                },
                y: {
                    title: {
                        display: true,
                        text: "Price",
                        color: "#a600ff",
                    },
                    ticks: {
                        color: "#a600ff",
                    },
                },
            },
            plugins: {
                title: {
                    display: true,
                    text: "Gráfico de Preços", // Adicione o título desejado aqui
                    font: {
                        size: 25,
                        weight: "bold",
                    },
                    color: "#a600ff",
                },
                legend: {
                    labels: {
                        filter: (item) => item.text !== "",
                        color: "#a600ff",
                    },
                },
            },
        },
    });
};

export default createCharts;
