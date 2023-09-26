export class fetchError extends Error {
    name;
    status;
    data;

    constructor(response, data) {
        super(
            `Failed to request "${response.url}" with status: "${response.status}"`
        );

        this.name = "fetchError";
        this.status = response.status;
        this.data = data;
    }
}
