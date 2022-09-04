const form = document.getElementById("form");
const username = document.getElementById("username");
const email = document.getElementById("email");
const senha = document.getElementById("senha");
const passwordConfirmation = document.getElementById("password-confirmation");
const cep = document.getElementById("cep");
const cidade = document.getElementById("cidade");
const estado = document.getElementById("estado");

form.addEventListener("input", (e) => {
    checkInputs();
    e.preventDefault();
});

function checkInputs() {
    const usernameValue = username.value;
    const emailValue = email.value;
    const passwordValue = senha.value;
    const passwordConfirmationValue = passwordConfirmation.value;
    const cepValue = cep.value;
    const cidadeValue = cidade.value;
    const estadoValue = estado.value;

    if (usernameValue === "") {
        setErrorFor(username, "O nome de usuário é obrigatório.");
    } else {
        setSuccessFor(username);
    }

    if (emailValue === "") {
        setErrorFor(email, "O email é obrigatório.");
    } else if (!checkEmail(emailValue)) {
        setErrorFor(email, "Por favor, insira um email válido.");
    } else {
        setSuccessFor(email);
    }

    if (passwordValue === "") {
        setErrorFor(senha, "A senha é obrigatória.");
    } else if (senha.length < 7) {
        setErrorFor(senha, "A senha precisa ter no mínimo 7 caracteres.");
    } else {
        setSuccessFor(senha);
    }

    if (passwordConfirmationValue === "") {
        setErrorFor(passwordConfirmation, "A confirmação de senha é obrigatória.");
    } else if (passwordConfirmationValue !== passwordValue) {
        setErrorFor(passwordConfirmation, "As senhas não conferem.");
    } else {
        setSuccessFor(passwordConfirmation);
    }

    if (cepValue === "") {
        setErrorFor(cep, "O CEP é obrigatório");
    } else {
        setSuccessFor(cep);
    }

    if (cidadeValue === "") {
        setErrorFor(cidade, "A cidade é obrigatória");
    } else {
        setSuccessFor(cidade);
    }

    if (estadoValue === "") {
        setErrorFor(estado, "O estado é obrigatório");
    } else {
        setSuccessFor(estado);
    }

    const formControls = form.querySelectorAll(".form-control");

    const formIsValid = [...formControls].every((formControl) => {
        return formControl.className === "form-control success";
    });

    if (formIsValid) {
        console.log("O formulário está 100% válido!");
    }
}

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector("small");

    // Adiciona a mensagem de erro
    small.innerText = message;

    // Adiciona a classe de erro
    formControl.className = "form-control error";
}

function setSuccessFor(input) {
    const formControl = input.parentElement;

    // Adicionar a classe de sucesso
    formControl.className = "form-control success";
}

function checkEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
        email
    );
}