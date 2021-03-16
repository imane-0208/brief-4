// console.log(document.forms["login"]["email"]);
document.querySelector("#email").addEventListener("input", function () {
    var vaEmail = /^[a-zA-Z0-9.-]+[a-zA-Z0-9]+@[a-z]+.[a-z]{2,3}$/;
    if (!(vaEmail.test(email))) {
        document.querySelector("#error2").innerHTML = "entrer email sous form Exemple@exemple.ex !!!";
        return false;
    } else {
        document.querySelector("#error2").innerHTML = "";

    }
})


document.forms["login"].addEventListener("submit", function (e) {
    var erreur;
    var inputs = this.getElementsByTagName("input");



    for (var i = 0; i < inputs.length; i++) {
        if (!inputs[i].value) {
            erreur = "Veuillez renseigner tous les champs";
            break;
        }

    }

    if (erreur) {
        e.preventDefault();
        document.querySelector("#error2").innerHTML = erreur;
        return false;
    } else {
        alert('votre identifiant est valider');
    }



})