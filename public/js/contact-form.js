const toggleSubmitBtn = (formId) => {
    const form = document.getElementById(formId);
    if (!form) return;

    const termCheckbox = document.getElementById(`${formId}-terms-check`);
    const submitButton = form.querySelector(".btn-submit");

    if (!termCheckbox || !submitButton) return;

    // ustaw stan początkowy
    submitButton.disabled = !termCheckbox.checked;

    // reaguj tylko na zmianę checkboxa
    termCheckbox.addEventListener("change", () => {
        submitButton.disabled = !termCheckbox.checked;
    });
};

// FOOTER FORM
const footerContactForm = document.getElementById("contact-form");
if (footerContactForm) {
    toggleSubmitBtn("contact-form");
}

// MODAL FORM
const modalContactForm = document.getElementById("modal-contact-form");
if (modalContactForm) {
    toggleSubmitBtn("modal-contact-form");
}



