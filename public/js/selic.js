document.addEventListener("DOMContentLoaded", () => {
    handleFormSubmit();

    async function handleFormSubmit() {
        const data = await fetchStockData();
        const selicData = data["prime-rate"][0];
        const selicPrice = selicData.value;

        console.log(`Preço SELIC: ${selicPrice}`);
    }

    async function fetchStockData() {
        const response = await fetch("brapi.dev/api/v2/prime-rate/");
        return await response.json();
    }
});
