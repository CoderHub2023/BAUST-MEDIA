function EducationValidationChecker() {
    const institution = document.getElementById("institution");
    const subject = document.getElementById("subject");
    if (!institution.checkValidity()) {
        document.getElementById("institutionErr").innerHTML = institution.validationMessage;
    }
    if (!subject.checkValidity()) {
        document.getElementById("subjectErr").innerHTML = subject.validationMessage;
    }
}
function WorkValidationChecker(){
    const work = document.getElementById("work");
    const position = document.getElementById("position");
    if (!work.checkValidity()) {
        document.getElementById("workErr").innerHTML = work.validationMessage;
    }
    if (!position.checkValidity()) {
        document.getElementById("positionErr").innerHTML = position.validationMessage;
    }
}


function AboutValidationChecker(){
    const about = document.getElementById("about");
    if (!about.checkValidity()) {
        document.getElementById("aboutErr").innerHTML = about.validationMessage;
    }
}