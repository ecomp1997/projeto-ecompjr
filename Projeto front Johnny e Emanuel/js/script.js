function mostraOculta(ID) {
    if (document.getElementById(ID).style.display == "block") {
        mostra(ID);
    } else {
        esconde(ID);
    }

}

function mostra(TD) {
    document.getElementById(TD).style.display = "none";
}

function esconde(TD) {
    document.getElementById(TD).style.display = "block";
}

function exibe(id) {
    if (document.getElementById(id).style.display == "none") {
        document.getElementById(id).style.display = "inline";
    } else {
        document.getElementById(id).style.display = "none";
    }
}