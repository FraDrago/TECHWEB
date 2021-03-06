function deleteImage() {

    res = false;
    if (confirm('Eliminare l\'imamgine selezionata?')) {
        res = true;
    }
    if (!res) {
        event.stopPropagation();
        event.preventDefault();
    }
    return res;
}

function checkSize(max_img_size) {
    message = ""
    var input = document.getElementById("fileToUpload");
    // check for browser support (may need to be modified)
    if (input.files && input.files.length == 1) {
        if (input.files[0].size > max_img_size) {
            message = "L'immagine deve essere più piccola di  " + (max_img_size / 1024 / 1024) + "MB";

        }
    }

    return message;
}

function validateForm() {

    var alt = document.getElementById("alt").value;
    var descrizione = document.getElementById("descrizione").value;

    message = ""


    if (alt == "" || alt == undefined || alt == null) {
        message += "Il campo Alt è obbligatorio.<br/>";
        document.getElementById("alt").focus();

    }
    if (descrizione == "" || descrizione == undefined || descrizione == null || descrizione.length > 45) {
        message += "Il campo descrizione non deve essere vuoto o più lungo di 45 caratteri.<br/>";
        document.getElementById("descrizione").focus();

    }

    return message;
}

function validateFoto() {

    message = ""
    var file = document.getElementById("fileToUpload").value;
    if (file == "" || file == undefined || file == null) {
        message += "Deve essere caricata una foto.<br/>";
        document.getElementById("fileToUpload").focus();
        result = false;
    }

    return message;
}


function validateInsertForm() {

    result = true;
    mess1 = checkSize(2097152)
    mess2 = validateForm()
    mess3 = validateFoto()

    mess = ""
    if (mess1 != "") {

        mess += mess1 + "<br/>"
    }
    if (mess2 != "") {

        mess += mess2 + "<br/>"
    }
    if (mess3 != "") {

        mess += mess3 + "<br/>"
    }


    var element = document.getElementById("errorAdd");
    if (mess != "") {
        result = false;

        if (element) {
            element.innerHTML = mess;
            document.getElementById('errorAdd').style.display = 'block';
        }

    } else {

        if (element) {
            document.getElementById('errorAdd').style.display = 'none';
            element.innerHTML = "";
        }
    }

    return result;
}

function validateMod() {
    result = true;
    mess1 = ""
    mess2 = ""
    var alt = document.getElementById("alt").value;
    var descrizione = document.getElementById("descrizione").value;

    mess = ""


    if (alt == "" || alt == undefined || alt == null) {
        mess1 += "Il campo Alt è obbligatorio.\n";
        document.getElementById("alt").focus();

    }
    if (descrizione == "" || descrizione == undefined || descrizione == null || descrizione.length > 45) {
        mess2 += "Il campo descrizione non deve essere vuoto o più lungo di 45 caratteri.\n";
        document.getElementById("descrizione").focus();

    }
    if (mess1 != "") {

        mess += mess1 + "<br/>"
    }
    if (mess2 != "") {

        mess += mess2 + "<br/>"
    }

    var element = document.getElementById("errorMod");
    if (mess != "") {
        result = false;

        if (element) {
            element.innerHTML = mess;
            document.getElementById('errorMod').style.display = 'block';
        }

    } else {

        if (element) {
            document.getElementById('errorMod').style.display = 'none';
            element.innerHTML = "";
        }
    }

    return result;
}