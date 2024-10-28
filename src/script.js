$(document).ready(function () {
    // hamburger menu
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

    $('#trailer-modal').click(function (event) {
        if ($(event.target).closest('.overflow-hidden').length === 0) {
            closeModal();
        }
    });

    // close model
    function closeModal() {
        // reset video when started
        const videoFrame = $('#trailer-video')[0];

        // pause and reset video
        if (videoFrame && videoFrame.contentWindow) {
            videoFrame.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
            videoFrame.contentWindow.postMessage('{"event":"command","func":"seekTo","args":[0]}', '*');
        }

        // hide modal
        $('#trailer-modal').addClass('hidden');

        $('#confirm-modal').addClass('hidden');
    }

    $('#order-button').click(function () {
        $('#confirm-modal').removeClass('hidden');
    });
});

