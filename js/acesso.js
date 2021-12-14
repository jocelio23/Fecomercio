function acesso(form) {

    /*checagem de nome e senha, nome e senha devem ser minusculas*/

    form.nome.value = form.nome.value.toLowerCase()
    form.senha.value = form.senha.value.toLowerCase()

    if (form.nome.value == "jocelio" && form.senha.value == '123') {
        location = "index.html"
    } else {
        form.nome.value = ""
        form.senha.value = ""
        alert("Dados Inválidos")
    }
}