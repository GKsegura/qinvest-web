// fazer verificação dos dados e aviso se os dados não forem retornado, de forma a mostrar que ocorreu algum erro, para que não impossibilite no dia da apresentação

import createCharts from "../lib/chart";
import { stockData } from "./api";

const stockDiv = document.getElementById("stockDiv");

document.addEventListener("DOMContentLoaded", () => {
    const stockForm = document.getElementById("stockForm");
    const periodSelect = document.getElementById("period"); // Seleciona o elemento <select>

    const tickersInput = document.getElementById("tickers");
    const submitButton = document.querySelector(".button");

    
    const currentDate = new Date();
    const currentMonth = currentDate.toLocaleString('default', { month: 'long' }).charAt(0).toUpperCase() + currentDate.toLocaleString('default', { month: 'long' }).slice(1);

    const recommendationLabel = document.getElementById("recommendationLabel");
    recommendationLabel.textContent = `Ações recomendadas de ${currentMonth}:`;

    // Adicione um evento de escuta à entrada de tickers
    tickersInput.addEventListener("input", () => {
        if (tickersInput.value.trim() !== "") {
            // Habilitar o botão de envio se houver algo escrito em tickers
            submitButton.removeAttribute("disabled");
        } else {
            // Desabilitar o botão de envio se tickers estiver vazio
            submitButton.setAttribute("disabled", "true");
        }
    });
    const recommendationButtons = document.querySelectorAll(
        ".recommendation-card"
    );

    periodSelect.addEventListener("keydown", (event) => {
        if (event.key === "Enter") {
            event.preventDefault();
            stockForm.dispatchEvent(new Event("submit")); // Dispatch a submit event on the form
        }
    });

    const handleFormSubmit = async (event) => {
        stockDiv.style.visibility = "visible";

        // Exibe o cursor de carregamento
        const smoothLoader = document.querySelector(".smooth");
        smoothLoader.style.visibility = "visible";

        event.preventDefault();

        const tickersInput = document.getElementById("tickers");
        const tickers = tickersInput.value;
        const period = document.getElementById("period").value;

        try {
            const data = await fetchStockData(tickers, period);
            console.log(data);
            displayStockData(data, tickers);
        } catch (err) {
            console.log(err);
        } finally {
            // Após a conclusão do carregamento (bem-sucedido ou com erro), oculta o cursor de carregamento
            smoothLoader.style.visibility = "hidden";
        }
    };

    stockForm.addEventListener("submit", handleFormSubmit);

    const fetchStockData = async (tickers, period) => {
        try {
            // const apiURL = `/api/stock/${tickers}/${period}`;
            // console.log(apiURL);
            // const response = await fetch(apiURL, {
            //     headers: {
            //         accept: "application/json",
            //         "Content-Type": "application/json",
            //     },
            // });

            const response = await stockData(tickers, period);

            console.log(response.data);
            return response.data;
        } catch (error) {
            console.error(error);
        }
    };

    

    const handleRecommendationButtonClick = async (event) => {
        const clickedButton = event.currentTarget;
        const tickerFromButton = clickedButton.getAttribute("data-ticker");
        const period = document.getElementById("period").value;

        // Se o ticker do botão estiver presente, usá-lo; caso contrário, usar o valor do input
        // const tickerInput = document.getElementById("tickers");
        const ticker = tickerFromButton;
        console.log(tickerFromButton);
        stockDiv.style.visibility = "visible";

        // Exibe o cursor de carregamento
        const smoothLoader = document.querySelector(".smooth");
        smoothLoader.style.visibility = "visible";

        event.preventDefault();

        try {
            const data = await fetchStockData(ticker, period);
            console.log(data);
            displayStockData(data, ticker);
        } catch (err) {
            console.log(err);
        } finally {
            // Após a conclusão do carregamento (bem-sucedido ou com erro), oculta o cursor de carregamento
            smoothLoader.style.visibility = "hidden";
        }
    };


    recommendationButtons.forEach((button) => {
        button.addEventListener("click", (event) => {
            tickersInput.value = "";
            event.preventDefault();
            handleRecommendationButtonClick(event);
        });
    });

    const setCurrentDate = () => {
        try {
            const currentDate = new Date();
            const day = currentDate.getDate().toString().padStart(2, "0");
            const month = (currentDate.getMonth() + 1)
                .toString()
                .padStart(2, "0");
            const year = currentDate.getFullYear();
            const hours = currentDate.getHours().toString().padStart(2, "0");
            const minutes = currentDate
                .getMinutes()
                .toString()
                .padStart(2, "0");

            const formattedDate = `Atualizado em: ${day}/${month}/${year} ${hours}:${minutes}`;

            const stockDayElement = document.getElementById("stockDay");
            stockDayElement.textContent = formattedDate;
        } catch (error) {
            console.error(error);
        }
    };

    const calculateCurrentPriceAndProfit = (data) => {
        if (
            !data ||
            !data.results ||
            !Array.isArray(data.results) ||
            data.results.length === 0
        ) {
            console.error(
                "Dados ausentes ou em formato incorreto na resposta da API."
            );
            return;
        }

        const historicalData = data.results[0].historicalDataPrice;

        if (!Array.isArray(historicalData) || historicalData.length < 2) {
            console.error(
                "Dados históricos ausentes ou em formato incorreto na resposta da API."
            );
            return;
        }

        const currentClosePrice =
            historicalData[historicalData.length - 1].close;
        const previousClosePrice =
            historicalData[historicalData.length - 2].close;

        const profit = currentClosePrice - previousClosePrice;
        const profitPercentage = ((profit / previousClosePrice) * 100).toFixed(
            2
        );

        const stockPriceProfitElement =
            document.getElementById("stockPriceProfit");

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
    };

    // Call these functions in your displayStockData function
    const displayStockData = (data, tickers) => {
        try {
            const stockTitle = document.getElementById("stockTitle");
            stockTitle.textContent = `${tickers.toUpperCase()}`;

            setCurrentDate();
            calculateCurrentPriceAndProfit(data);

            createCharts(data, tickers);
        } catch (error) {
            console.log(error);
        }
    };
});

// chart
