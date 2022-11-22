function validateTeamName() {
    let teamName = document.forms['formName']['teamName'].value;

    if (!teamName.match("{0-9}") || teamName === "" ) {
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
    if ((validateLeague() === false || validateTeamName() === false))
    {
        alert ("Chybne vyplnene pole");
        return false;
    }

    return true;
}