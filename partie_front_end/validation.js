// function vlidationcontact(){
//     //                 var vaEmail = /^(([^<>()[]\.,;:\s@"]+(.[^<>()[]\.,;:\s@"]+)*)|(".+"))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,3}))$/;

//     var vaEmail=/^[a-zA-Z0-9.-]+[a-zA-Z0-9]+@[a-z]+.[a-z]{2,3}$/;

// console.log(document.forms["inscription"]["email"]);


document.querySelector("#password-confirmation").addEventListener("input", function () {



    if (document.querySelector("#password-confirmation").value != document.querySelector("#password").value) {
        document.querySelector("#error").innerHTML = "les password ne correspondent pas";

    } else {
        document.querySelector("#error").innerHTML = "";

    }


})

document.querySelector("#password").addEventListener("input", function () {

    var password = document.querySelector("#password").value;

    if (password.length < 6) {
        document.querySelector("#error").innerHTML = "saisir un password supérieur à 6";
        return false;

    } else {
        document.querySelector("#error").innerHTML = "";

    }

})

document.querySelector("#username").addEventListener("input", function (e) {

    var username = document.querySelector("#username").value;
    if (username.length < 4) {
        document.querySelector("#error").innerHTML = "saisir un username supérieur à 4";
        return false;

    } else if (username.length > 8) {
        document.querySelector("#error").innerHTML = "saisir un username inférieur à 8";
        return false;

    } else {
        document.querySelector("#error").innerHTML = "";

    }



})

document.querySelector("#email").addEventListener("input", function () {
    var vaEmail = /^[a-zA-Z0-9.-]+[a-zA-Z0-9]+@[a-z]+.[a-z]{2,3}$/;
    if (!(vaEmail.test(email))) {
        document.querySelector("#error").innerHTML = "entrer email sous form Exemple@exemple.ex !!!";
        return false;
    } else {
        document.querySelector("#error").innerHTML = "";

    }
})


document.forms["inscription"].addEventListener("submit", function (e) {
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
        document.querySelector("#error").innerHTML = erreur;
        return false;
    } else {
        alert('votre inscription est envoyer');
    }



})