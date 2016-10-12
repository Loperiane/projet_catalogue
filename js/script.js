var resumeCase = document.getElementById("resume-case"),
    imgCase = document.getElementById("img-case");

function caseHover(x) {
    x.style.background = "grey";
    x.style.boxShadow = "inset 0 0 60px 2px rgba(0, 0, 0, 0.2), inset 0 0 10px 2px rgba(0, 0, 0, 0.2)";
    resumeCase.style.color = "white";
    imgCase.style.opacity = ".2";
}

function normalCase(x) {
    x.style.background = "linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0))";
    x.style.boxShadow = "none";
    resumeCase.style.color = "transparent";
    imgCase.style.opacity = "1";
}
