document.addEventListener('DOMContentLoaded', function () {
    const forms = document.querySelectorAll('.ajax-contact-form');

    forms.forEach(form => {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(form);
            const url = form.dataset.route;
            const submitBtn = form.querySelector('button[type="submit"]');
            const successBox = form.querySelector('.form-success-msg');
            const errorBox = form.querySelector('.error-box');

            // Reset error display
            form.querySelectorAll('.form-control').forEach(input => {
                input.classList.remove('is-invalid');
            });
            form.querySelectorAll('.invalid-feedback').forEach(el => el.innerText = '');
            if (errorBox) {
                errorBox.style.display = 'none';
                errorBox.innerHTML = '';
            }

            submitBtn.disabled = true;
            submitBtn.innerText = 'Please wait...';

            fetch(url, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value
                },
                body: formData
            })
            .then(response => {
                if (response.status === 422) {
                    return response.json().then(data => {
                        let html = '<ul class="mb-0">';
                        for (const [field, messages] of Object.entries(data.errors)) {
                            const input = form.querySelector(`[name="${field}"]`);
                            if (input) {
                                input.classList.add('is-invalid');
                                const feedback = input.parentElement.querySelector('.invalid-feedback');
                                if (feedback) {
                                    feedback.innerText = messages[0];
                                }
                            }
                            html += `<li>${messages[0]}</li>`;
                        }
                        html += '</ul>';
                        if (errorBox) {
                            errorBox.innerHTML = html;
                            errorBox.style.display = 'block';
                        }
                        throw new Error("Validation failed");
                    });
                }
                return response.json();
            })
            .then(data => {
                if (data.success || data.message) {
                    if (successBox) {
                        successBox.innerText = data.message || 'Form submitted successfully!';
                        successBox.style.display = 'block';
                        setTimeout(() => {
                            successBox.style.display = 'none';
                        }, 3000);
                    }
                    form.reset();
                }
            })
            .catch(error => {
                console.error("AJAX Error:", error);
                if (error.message !== "Validation failed") {
                    if (errorBox) {
                        errorBox.innerText = 'Something went wrong. Please try again.';
                        errorBox.style.display = 'block';
                    }
                }
            })
            .finally(() => {
                submitBtn.disabled = false;
                submitBtn.innerText = 'Get Support';
            });
        });
    });
});
