document.addEventListener('DOMContentLoaded', () => {
    // Get all the images with the viewableImage class
    const images = document.querySelectorAll('.viewableImage');

    images.forEach(image => {
        image.addEventListener('click', function () {
            // Set the src for the fullscreen image
            document.getElementById('fullImage').src = this.src;

            // Show the modal
            var myModal = new bootstrap.Modal(document.getElementById('imageModal'), {});
            myModal.show();
        });
    });
});