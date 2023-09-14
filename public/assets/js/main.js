document.getElementById('show-pos-neg-btn').addEventListener('click', function () {
    let myDiv = document.getElementById('show-pos-neg-div');
    let bsCollapse = new bootstrap.Collapse(myDiv, {
        toggle: true
    });
});

async function getImage(code, id) {
    const imgCont = document.getElementById('imageContainer');
    const loader = document.querySelector('.banter-loader');

    imgCont.innerHTML = "";  // Clear previous images
    loader.style.display = 'block';  // Show loader

    try {
        const response = await fetch(`/cn-images/${code}`);

        if (response.ok) {
            const data = await response.json();

            data.forEach(element => {
                const img = document.createElement('img');
                img.classList = 'img-responsive viewableImage';
                const imgUrl = element.image.replace(/\\/g, "/");
                img.src = `/storage/${imgUrl}`;
                imgCont.appendChild(img);
            });

            const myModal = new bootstrap.Modal(document.getElementById('imageModel'));
            myModal.show();  // Display modal after successfully receiving images

        } else {
            console.error('Failed to fetch images:', response.statusText);
        }
    } catch (error) {
        console.error('Error fetching images:', error);
    } finally {
        loader.style.display = 'none';  // Hide loader
    }
}


document.addEventListener('DOMContentLoaded', () => {

    const closeModalBtn = document.querySelector('.modal-footer .btn-secondary');
    closeModalBtn.addEventListener('click', () => {
        myModal.hide();
    });
});