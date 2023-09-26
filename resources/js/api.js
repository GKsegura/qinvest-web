import { fetchAPI } from "../utils/fetchApi";

export const stockData = async (tickers, period) =>
    fetchAPI(`${tickers}/${period}`);
