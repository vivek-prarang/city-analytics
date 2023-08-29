const heiToggleButton = document.getElementById('heiToggleButton');
const heiContentDiv = document.getElementById('heiContentDiv');

heiToggleButton.addEventListener('click', () => {
    if (heiContentDiv.style.display === 'none') {
        heiContentDiv.style.display = 'block';
        heiContentDiv.style.height = '0';
        setTimeout(() => {
            heiContentDiv.style.height = '68vh';
        }, 10);
    } else {
        heiContentDiv.style.height = '0';
        setTimeout(() => {
            heiContentDiv.style.display = 'none';
        }, 300);
    }
});

const heinToggleButton = document.getElementById('heinToggleButton');
const heinContentDiv = document.getElementById('heinContentDiv');

heinToggleButton.addEventListener('click', () => {
    if (heinContentDiv.style.display === 'none') {
        heinContentDiv.style.display = 'block';
        heinContentDiv.style.height = '0';
        setTimeout(() => {
            heinContentDiv.style.height = '68vh';
        }, 10);
    } else {
        heinContentDiv.style.height = '0';
        setTimeout(() => {
            heinContentDiv.style.display = 'none';
        }, 300);
    }
});