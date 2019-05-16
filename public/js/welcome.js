"use strict";

const mainTitle = document.getElementById("main-title");
const downArrowImage = document.getElementById("down-arrow-image");
const contentSections = [
    { object: document.getElementById("header-section"), isCurrent: true },
    { object: document.getElementById("section-0"), isCurrent: false },
    { object: document.getElementById("section-1"), isCurrent: false },
    { object: document.getElementById("section-2"), isCurrent: false }
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
    setInterval(_ => {
        if (downArrow.opacity <= 0.4) downArrow.currentDirection = true;
        else if (downArrow.opacity >= 1) downArrow.currentDirection = false;
        downArrowImage.style.opacity = downArrow.opacity +=
            downArrow.getIncrementSign() * 0.02;
    }, 50);

    // Change content on scroll:
    let isBeingScrolled = false;
    document.body.onwheel = e => {
        let direction = e.deltaY > 0 ? 1 : -1;
        if (isBeingScrolled) return;
        console.log("scrolls");
        let currentSection = contentSections.find(v => v.isCurrent === true);
        let nextSection = contentSections.find((_, i, a) => {
            if (i - direction < 0 || i - direction >= a.length) return false;
            return a[i - direction] === currentSection;
        });
        const scrollPage = _ => {
            let distanceScrolled = 0;
            const scrollPage = setInterval(_ => {
                if (distanceScrolled >= 100) {
                    currentSection.isCurrent = false;
                    nextSection.isCurrent = true;
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
