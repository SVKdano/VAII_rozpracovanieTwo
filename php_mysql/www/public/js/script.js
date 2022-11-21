function validateTeamName() {
    let teamName = document.forms['formName']['teamName'].value;

    if (!teamName.match("^[A-Za-z]")) {
        alert("Zle meno timu");
        return false;
    }
    return true;
}