"use strict";

const sendAnswerButton = document.getElementById("send-answer-button");
const addAnswerButton = document.getElementById("add-answer-button");

window.onload = _ => {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });

    sendAnswerButton.setAttribute(
        "data-question-id",
        addAnswerButton.getAttribute("data-question-id")
    );
};
