"use strict";

const mainTitle = document.getElementById("main-title");
const downArrowImage = document.getElementById("down-arrow-image");
const downArrowLabel = document.getElementById("down-arrow-label");
const controlButton = document.getElementById("control-button");
const controlQuestionsButton = document.getElementById("control-questions");
const controlMenu = document.getElementById("control-menu");
const contentSections = [
    { object: document.getElementById("header-section"), isCurrent: true },
    { object: document.getElementById("section-0"), isCurrent: false },
    { object: document.getElementById("section-1"), isCurrent: false },
    { object: document.getElementById("section-2"), isCurrent: false },
    { object: document.getElementById("section-3"), isCurrent: false },
    { object: document.getElementById("section-4"), isCurrent: false },
    { object: document.getElementById("section-5"), isCurrent: false }
];

// Loading window:
window.onload = _ => {
    for (let section of contentSections) {
        section.object.style.overflow = "hidden";
        if (section.isCurrent) section.object.style.height = "100%";
        else section.object.style.height = "0%";
    }
    window.scrollTo({ top: 0, behavior: "smooth" });
    let bodyOpacity = 0;
    const changeBodyOpacity = _ => {
        const bodyOpacityInterval = setInterval(_ => {
            console.log(document.body.style.opacity);
            if (bodyOpacity >= 1) clearInterval(bodyOpacityInterval);
            bodyOpacity += 0.05;
            document.body.style.opacity = bodyOpacity;
        }, 15);
    };
    changeBodyOpacity();

    // Show main title with fading animation:
    let mainTitleOpacity = 0;
    let letterSpacing = 1;
    let finished = [false, false];
    const showMainTitleFade = setInterval(_ => {
        if (mainTitleOpacity >= 1) finished[0] = true;
        else mainTitle.style.opacity = mainTitleOpacity += 0.01;
        if (letterSpacing <= 0.2) finished[1] = true;
        else mainTitle.style.letterSpacing = `${(letterSpacing -= 0.02)}em`;
        if (finished.find(v => v == false) === undefined)
            clearInterval(showMainTitleFade);
    }, 15);

    // Display down arrow with fading animation:
    let downArrow = {
        opacity: 0.5,
        currentDirection: true,
        getIncrementSign() {
            return this.currentDirection ? 1 : -1;
        }
    };
    var arrowImageInterval;
    let startArrowImageInterval = _ => {
        arrowImageInterval = setInterval(_ => {
            if (downArrow.opacity <= 0.4) downArrow.currentDirection = true;
            else if (downArrow.opacity >= 1) downArrow.currentDirection = false;
            downArrowImage.style.opacity = downArrow.opacity +=
                downArrow.getIncrementSign() * 0.02;
        }, 50);
    };
    startArrowImageInterval();

    // Change content on scroll:
    let isBeingScrolled = false;
    document.body.onwheel = e => {
        let direction = e.deltaY > 0 ? 1 : -1;
        if (isBeingScrolled) return;
        let currentSection = contentSections.find(v => v.isCurrent === true);
        let nextSection = contentSections.find((_, i, a) => {
            if (i - direction < 0 || i - direction >= a.length) return false;
            return a[i - direction] === currentSection;
        });
        const scrollPage = _ => {
            if (controlMenu.style.display !== "none") {
                controlMenu.style.display = "none";
            } else if (controlButton.style.display !== "none") {
                controlButton.style.display = "none";
            }
            controlQuestionsButton.style.display = "none";
            let distanceScrolled = 0;
            const scrollPage = setInterval(_ => {
                if (distanceScrolled >= 100) {
                    currentSection.isCurrent = false;
                    nextSection.isCurrent = true;
                    if (
                        nextSection.object !==
                            document.getElementById("header-section") &&
                        nextSection.object !==
                            document.getElementById("section-0")
                    ) {
                        controlButton.style.display = "block";
                    }
                    if (
                        nextSection.object ===
                        document.getElementById("section-5")
                    ) {
                        clearInterval(arrowImageInterval);
                        downArrowImage.style.opacity = 0;
                        downArrowLabel.style.display = "none";
                    } else if (downArrowLabel.style.display === "none") {
                        downArrowImage.style.display = "block";
                        downArrowLabel.style.display = "inline";
                        startArrowImageInterval();
                    }
                    controlQuestionsButton.style.display = "inline-block";
                    isBeingScrolled = false;
                    clearInterval(scrollPage);
                }
                distanceScrolled += 1;
                currentSection.object.style.height = `${100 -
                    distanceScrolled}%`;
                currentSection.object.style.opacity = `${(100 -
                    distanceScrolled) /
                    100}`;
                nextSection.object.style.height = `${distanceScrolled}%`;
                nextSection.object.style.opacity = `${distanceScrolled / 100}`;
            }, 5);
        };
        if (nextSection === undefined) return;
        else {
            isBeingScrolled = true;
            scrollPage();
        }
    };
};
