class Notification {
    success({ message }) {
        new Noty({
            type: "success",
            layout: "topRight",
            text: message || "Successfully done!.",
            timeout: 1000
        }).show();
    }

    cart_success() {
        new Noty({
            type: "success",
            layout: "topRight",
            text: "Successfully Added !",
            timeout: 1000
        }).show();
    }

    alert({ message }) {
        new Noty({
            type: "alert",
            layout: "topRight",
            text: message || "Are you sure ?",
            timeout: 1000
        }).show();
    }

    error({ message }) {
        new Noty({
            type: "error",
            layout: "topRight",
            text: message || "Something went wrong !",
            timeout: 1000
        }).show();
    }

    warning({ message }) {
        new Noty({
            type: "warning",
            layout: "topRight",
            text: message || "Oops! Wrong",
            timeout: 1000
        }).show();
    }

    image_validation() {
        new Noty({
            type: "error",
            layout: "topRight",
            text: "Image should be less than 1MB",
            timeout: 1000
        }).show();
    }
}

export default Notification = new Notification();
