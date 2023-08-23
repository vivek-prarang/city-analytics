const heiToggleButton = document.getElementById('heiToggleButton');
const heiContentDiv = document.getElementById('heiContentDiv');

heiToggleButton.addEventListener('click', () => {
    if (heiContentDiv.style.display === 'none') {
        heiContentDiv.style.display = 'block';
        heiContentDiv.style.height = '0';
        setTimeout(() => {
            heiContentDiv.style.height = 'auto';
        }, 10);
    } else {
        heiContentDiv.style.height = '0';
        setTimeout(() => {
            heiContentDiv.style.display = 'none';
        }, 300);
    }
});