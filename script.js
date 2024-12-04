// Menambahkan event listener untuk window load
window.onload = function() {
    document.body.classList.add('loaded'); // Tambahkan kelas 'loaded' setelah halaman dimuat
};

// Get the modal
var modal = document.getElementById("myModal");

// Get the images and bind click events
var images = document.querySelectorAll(".gallery img");
images.forEach(function(img) {
    img.onclick = function() {
        modal.style.display = "block";
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}