import { createFetchError } from "./createFetchError";

const API_URL = "/api/stock/";

/**
 *
 * @param {RequestInfo} input
 * @param {RequestInit} init
 */
export const fetchAPI = async (input, init = undefined) => {
    const requestURL = `${API_URL}${input}`;

    console.log(requestURL.toString());

    const response = await fetch(requestURL.toString(), {
        ...init,
        headers: {
            accept: "application/json",
            "Content-Type": "application/json",
            ...init?.headers,
        },
        ...(init?.body ? { body: JSON.stringify(init.body) } : {}),
    });

    const status = response.status;

    if (status !== 200 && status !== 201 && status !== 204) {
        const error = await createFetchError(response);
        throw error;
    }

    if (status === 204) {
        return { response };
    }

    const data = await response.json();

    return { data, response };
};
