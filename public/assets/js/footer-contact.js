document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contact-form');
    const submitBtn = document.getElementById('submit-btn');
    const successBox = document.getElementById('form-success-msg');

    if (!form) return;

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(form);
        const url = form.action;

        // Disable the button and show loading text
        submitBtn.disabled = true;
        submitBtn.innerText = 'Please wait...';

        // Clear old error messages
        document.querySelectorAll('.error').forEach(el => el.innerText = '');
        successBox.style.display = 'none';
        successBox.innerText = '';

        fetch(url, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            },
            body: formData
        })
        .then(async (response) => {
            if (response.status === 422) {
                const data = await response.json();
                for (const [field, messages] of Object.entries(data.errors)) {
                    const errorEl = document.querySelector(`.error[data-error="${field}"]`);
                    if (errorEl) {
                        errorEl.innerText = messages[0];
                    }
                }
                throw new Error("Validation failed");
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                successBox.innerText = data.success;
                successBox.style.display = 'block';
                form.reset();

                setTimeout(() => {
                    successBox.style.display = 'none';
                    successBox.innerText = '';
                }, 3000);
            }
        })
        .catch(error => {
            console.error(error);
            if (error.message !== "Validation failed") {
                alert("Something went wrong. Please try again later.");
            }
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.innerText = 'Get Support';
        });
    });
});
