document.addEventListener("DOMContentLoaded", () => {
    const selicPriceElement = document.getElementById("selicPrice");

    async function fetchSelicData() {
        try {
            const currentDate = new Date();
            const day = String(currentDate.getDate()).padStart(2, "0");
            const month = String(currentDate.getMonth() + 1).padStart(2, "0");
            const year = currentDate.getFullYear();
            const formattedDate = `${day}/${month}/${year}`;

            const apiUrl = `https://brapi.dev/api/v2/prime-rate?country=brazil&start=${formattedDate}&end=${formattedDate}`;

            const response = await fetch(apiUrl);
            if (!response.ok) {
                throw new Error(`Erro na solicitação: ${response.statusText}`);
            }

            return await response.json();
        } catch (error) {
            throw error;
        }
    }

    async function updateSelicPrice() {
        try {
            const data = await fetchSelicData();
            const selicPrice = parseFloat(data["prime-rate"][0]["value"]);
            const formattedSelicPrice = selicPrice.toFixed(2);
            selicPriceElement.textContent = `Cotação: `;
            const priceSpan = document.createElement("span");
            priceSpan.textContent = `${formattedSelicPrice}%`;
            priceSpan.style.color = "#a600ff"; // Defina a cor aqui
            selicPriceElement.appendChild(priceSpan);
        } catch (error) {
            console.error("Ocorreu um erro ao obter a taxa SELIC:", error);
            selicPriceElement.textContent = "Erro ao obter a taxa SELIC";
        }
    }

    // Função para atualizar a data e hora
    function updateDateTime() {
        const currentDate = new Date();
        const day = String(currentDate.getDate()).padStart(2, "0");
        const month = String(currentDate.getMonth() + 1).padStart(2, "0");
        const year = currentDate.getFullYear();
        const hours = currentDate.getHours();
        const minutes = String(currentDate.getMinutes()).padStart(2, "0");

        const formattedDateTime = `${day}/${month}/${year} ${hours}:${minutes}`;
        document.getElementById("currentDateTime").textContent =
            formattedDateTime;
    }

    // Chama a função para atualizar a data e hora quando a página carrega
    updateDateTime();

    // Chama a função para atualizar a taxa SELIC quando a página carrega
    updateSelicPrice();

    // Atualiza a taxa SELIC periodicamente (por exemplo, a cada minuto)
    setInterval(updateSelicPrice, 60000);
});
