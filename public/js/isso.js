document.addEventListener("DOMContentLoaded", function() {
    var popupContainer = document.getElementById("popup-container");
    var closeButton = document.getElementById("close-popup");

    function openPopup(title, text) {
        var popupTitle = document.getElementById("popup-title");
        var popupText = document.getElementById("popup-text");
        popupTitle.textContent = title;
        popupText.textContent = text;
        popupContainer.style.display = "flex";
    }

    function closePopup() {
        popupContainer.style.display = "none";
    }

    closeButton.addEventListener("click", closePopup);

    var tafsirButtons = document.querySelectorAll(".tafsir-button");
    tafsirButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            var title = this.dataset.title;
            var text = this.dataset.text;
            openPopup(title, text);
        });
    });

    var tatbhiqButtons = document.querySelectorAll(".tatbhiq-button");
    tatbhiqButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            var title = this.dataset.title;
            var text = this.dataset.text;
            openPopup(title, text);
        });
    });
});
