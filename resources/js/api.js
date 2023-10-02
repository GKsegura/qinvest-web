import { fetchAPI } from "../utils/fetchApi";

export const stockData = async (tickers, period) =>
    fetchAPI(
        `${tickers}?token=wF3GuTVktd3VnEZmbp1Ynh&range=${period}&interval=1d&fundamental=false&dividends=false`
    );
