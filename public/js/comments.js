"use strict";

const sendCommentButton = document.getElementById("send-comment-button");
const addCommentButton = document.getElementById("add-comment-button");

window.onload = _ => {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });

    sendCommentButton.setAttribute(
        "data-work-id",
        addCommentButton.getAttribute("data-work-id")
    );
    sendCommentButton.setAttribute("data-reload", "1");
};
