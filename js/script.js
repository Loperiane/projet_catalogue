var resumeCase = document.getElementById("resume-case"),
    imgCase = document.getElementById("img-case");

function caseHover(x) {
    x.style.backgroundColor = "rgba(0, 0, 0, 0.5)";
    resumeCase.style.color = "white";
    imgCase.style.opacity = ".2";
}

function normalCase(x) {
    x.style.backgroundColor = "transparent";
    resumeCase.style.color = "transparent";
    imgCase.style.opacity = "1";
}
