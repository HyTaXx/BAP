const constraints = {
    prenom: {
        presence: { allowEmpty: false }
    },
    nom: {
        presence: { allowEmpty: false }
    },
    telephone: {
        presence: { allowEmpty: false }
    },
    email: {
        presence: { allowEmpty: false },
        email: true
    },
    interet: {
        presence: { allowEmpty: false }
    },
};

const form = document.getElementById('contact-form');
form.addEventListener('submit', function (event) {

    const formValues = {
        prenom: form.elements.prenom.value,
        nom: form.elements.nom.value,
        telephone: form.elements.telephone.value,
        email: form.elements.email.value,
        interet: form.elements.interet.value,
    };


    const errors = validate(formValues, constraints);
    if (errors) {
        event.preventDefault();
        const errorMessage = Object
            .values(errors)
            .map(function (fieldValues) {
                return fieldValues.join(', ')
            })
            .join("\n");

        alert(errorMessage);
    }
}, false);