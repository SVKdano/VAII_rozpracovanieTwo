function validateTeamName() {
    let teamName = document.forms['formName']['teamName'].value;

    if (!teamName.match("^[A-Za-z]")) {
        alert("Zle meno timu");
        return false;
    }
    return true;
}

function validateLeague() {
    let league = document.forms['formName']['league'].value;

    if ((league < 5 || league > 7)) {
        alert("Neplatna liga");
        return false;
    }
    return true;
}

function validateAll() {
    if (!(validateLeague() && validateTeamName()))
    {
        alert ("Chybne vyplnene pole");
    }
}