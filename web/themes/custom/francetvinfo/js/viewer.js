// Zoom every image on click
window.addEventListener('DOMContentLoaded', (event) => {
    Array.from(document.getElementsByTagName('img')).forEach(img => {
        img.onclick = function(){
            if(this.style.transform === 'scale(0.75)') {
                this.style.transform = 'scale(1)';
            } else {
                this.style.transform = 'scale(0.75)';
            }
        }
    });
});