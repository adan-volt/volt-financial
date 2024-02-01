const fileInput = document.getElementById("fileInput");
const fileNameInput = document.getElementById("fileName");

fileInput.addEventListener("change", function() {
const file = this.files[0];
if (file) {
    fileNameInput.value = file.name;
    fileNameInput.style.display = "inline-block"; // Mostrar el nombre del archivo
} else {
    fileNameInput.value = "";
    fileNameInput.style.display = "none"; // Ocultar el nombre del archivo
}
});
