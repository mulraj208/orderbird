window.addEventListener('DOMContentLoaded', function () {
    const leadForm = document.querySelector('.lead-form');

    if (leadForm) {
        function getLeadFormData () {
            const firstName = leadForm.querySelector('#firstName').value;
            const lastName = leadForm.querySelector('#lastName').value;
            const email = leadForm.querySelector('#email').value;
            const phoneNumber = leadForm.querySelector('#phoneNumber').value;

            return { firstName, lastName, email, phoneNumber };
        }

        leadForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = getLeadFormData();
            window.axios.post('/', formData)
                .then(res => {
                    console.log(res);
                })
                .catch(error => {
                    console.log(error.response.data);
                });
        });
    }
});
