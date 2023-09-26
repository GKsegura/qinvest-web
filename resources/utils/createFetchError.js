import { fetchError } from "./fetchError";

export const createFetchErrorData = async (response) => {
    const type = response.headers.get("content-type");

    if (
        type &&
        typeof type === "string" &&
        type.indexOf("application/json") > -1
    ) {
        const body = await response.json();

        return {
            type: "application/json",
            body,
        };
    }

    const body = await response.text();

    return {
        type: "plain",
        body,
    };
};

export const createFetchError = async (response) => {
    const data = await createFetchErrorData(response);

    return new fetchError(response, data);
};
