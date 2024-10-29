$(document).ready(function () {
    // Elements for warnings
    const warningModal = $('#warning-modal'); // Assuming #warning-modal exists in HTML for warnings
    const warningMessage = $('#warning-message'); // Element to display specific warning message

    // Hamburger menu
    $('#hamburger').click(function () {
        $('#mobile-menu')
            .removeClass('hidden opacity-0 pointer-events-none')
            .addClass('flex opacity-100 pointer-events-auto');
    });

    $('#close-menu').click(function () {
        $('#mobile-menu')
            .removeClass('flex opacity-100 pointer-events-auto')
            .addClass('hidden opacity-0 pointer-events-none');
    });

    $('#trailer-button').click(function () {
        $('#trailer-modal').removeClass('hidden');
    });

    $('#close-modal').click(function () {
        closeModal();
    });

    $('#cancel-button').click(function () {
        closeModal();
    });

    // Close warning modal function
    $('#close-warning-modal').click(function () {
        warningModal.addClass('hidden');
    });

    $('#trailer-modal').click(function (event) {
        if ($(event.target).closest('.overflow-hidden').length === 0) {
            closeModal();
        }
    });

    // Close modal function
    function closeModal() {
        $('#trailer-modal').addClass('hidden');
        $('#confirm-modal').addClass('hidden');
        $('#warning-modal').addClass('hidden');
    }

    // Display confirm modal and update values
    $('#order-button').click(function (event) {
        event.preventDefault(); // Prevent form submission on button click

        // Check if all inputs are filled
        const totalAdult = parseInt($('#adult-input').val() || 0);
        const totalChild = parseInt($('#child-input').val() || 0);
        const selectedDate = $('input[name="date-opt"]:checked');
        const selectedTime = $('input[name="time"]:checked');

        if (totalAdult === 0 && totalChild === 0) {
            warningMessage.text('Please enter the number of tickets for Adult or Child.');
            warningModal.removeClass('hidden');
            return;
        }

        if (!selectedDate.length) {
            warningMessage.text('Please select a show date.');
            warningModal.removeClass('hidden');
            return;
        }

        if (!selectedTime.length) {
            warningMessage.text('Please select a show time.');
            warningModal.removeClass('hidden');
            return;
        }

        // Set up prices and counts if validation passes
        let priceAdult = 50000; // Harga tiket dewasa
        let priceChild = 30000; // Harga tiket anak

        let totalAdultPrice = totalAdult * priceAdult;
        let totalChildPrice = totalChild * priceChild;
        let totalBeforeDiscount = totalAdultPrice + totalChildPrice;

        // Calculate discount
        let discountPercentage = totalBeforeDiscount > 150000 ? 10 : 0;
        let discountAmount = (totalBeforeDiscount * discountPercentage) / 100;
        let totalAfterDiscount = totalBeforeDiscount - discountAmount;

        // Update modal with calculated values
        $('#total-adult').text(totalAdult);
        $('#adult-price').text(totalAdultPrice);
        $('#total-child').text(totalChild);
        $('#child-price').text(totalChildPrice);
        $('#total-price').text(totalAfterDiscount);
        $('#total-discount').text(discountAmount);
        $('#checked-date').text(selectedDate.val());
        $('#checked-time').text(selectedTime.val());

        // Show confirm modal
        $('#confirm-modal').removeClass('hidden');
    });
});

function changeValue(inputId, increment) {
    let input = document.getElementById(inputId);
    let currentValue = parseInt(input.value) || 0;
    let newValue = currentValue + increment;
    input.value = newValue < 0 ? 0 : newValue;
}