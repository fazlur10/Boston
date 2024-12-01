$(document).ready(function () {
    // Change navbar background color on scroll
    window.addEventListener('scroll', function () {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    $('.book-appointment-desktop-btn, .book-appointment-mobile-btn').on('click', function () {
        $('html, body').animate({
            scrollTop: $('#appointment-section').offset().top
        }, 1000);
    });

    disablePastDates();

    function disablePastDates() {
        var today = new Date().toISOString().split('T')[0];
        const inputDate = document.getElementById("inputDate");
        if (inputDate) {
            inputDate.setAttribute("min", today);
        }
    }

    $('#inputName, #inputPhone, #inputService, #inputDate, #inputTime, #inputMessage').on('input change', function() {
        validateField(this);
    });

    function validateField(field){
        const fieldValue = $(field).val();
        const fieldId = $(field).attr('id');
        let isValid = true;
        $(`#${fieldId}Error`).text('');

        if(fieldId === 'inputName'){
            const namePattern = /^[A-Za-z\s\-'`]+$|^[\u0621-\u064A\s]+$/;
            if(fieldValue.trim().length < 2){
                isValid = false;
                $('#nameError').text('Name Must be atleast 02 characters long');
            }
            else if(!namePattern.test(fieldValue)){
                isValid = false;
                $('#nameError').text('Name must contain only alphabetic charcters');
            }
            else{
                $('#nameError').text('');
            }
        }
        else if (fieldId === 'inputPhone'){
            const phonePattern = /^[+\d]?(?:[\d\s()-]{8,})$/;
            if(!phonePattern.test(fieldValue)){
                isValid = false;
                $('#phoneError').text('Phone number must be at least 8 digits and contain only numbers')
            }
            else{
                $('#phoneError').text('');
            }
        }
        else if( fieldId === 'inputService'){
            if(!fieldValue){
                isValid = false;
                $('#serviceError').text('Please select a service');
            }
            else{
                $('#serviceError').text('');
            }
        }
        else if( fieldId === 'inputDate'){
            if(!fieldValue){
                isValid = false;
                $('#dateError').text('Please select a Date');
            }
            else{
                $('#dateError').text('');
            }
        }
        else if( fieldId === 'inputTime'){
            if(!fieldValue){
                isValid = false;
                $('#timeError').text('Please select a Time');
            }
            else{
                $('#timeError').text('');
            }
        }
        else if( fieldId === 'inputMessage'){
            if(fieldValue.length > 500){
                isValid = false;
                $('#messageError').text('Message cannot exceed 500 characters');
            }
            else{
                $('#mesageError').text('');
            }
        }
        console.log(isValid);
        return isValid;
    }

    $('#appointmentForm').on('submit', function(event) {
        event.preventDefault();
    
        let isValidForm = true;
        $('#inputName, #inputPhone, #inputService, #inputDate, #inputTime, #inputMessage').each(function() {
            const isFieldValid = validateField(this);
            if (!isFieldValid) {
                isValidForm = false;
            }
        });
    
        if (isValidForm) {
            const formData = {
                inputName: $('#inputName').val(),
                inputPhone: $('#inputPhone').val(),
                inputService: $('#inputService').val(),
                inputDate: $('#inputDate').val(),
                inputTime: $('#inputTime').val(),
                inputMessage: $('#inputMessage').val(),
            };
    
            let url = 'appointment/book';
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                success: function(response) {
                    if (response.success) {
                        $('#formMessage').text('Appointment booked successfully!');
                    } else {
                        $('#formMessage').text('Appointment booked, but there was an issue sending the email.');
                    }
                },
                error: function() {
                    $('#formMessage').text('An error occurred. Please try again.');
                }
            });
        } else {
            $('#formMessage').text('Please fill in all the fields correctly.');
        }
    });
    
});
