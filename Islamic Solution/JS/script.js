document.addEventListener("DOMContentLoaded", function() {
    var popupContainer = document.getElementById("popup-container");
    var closeButton = document.getElementById("close-popup");

    // Function to open the popup
    function openPopup(title, text) {
        var popupTitle = document.getElementById("popup-title");
        var popupText = document.getElementById("popup-text");
        popupTitle.textContent = title;
        popupText.textContent = text;
        popupContainer.style.display = "flex";
    }

    // Function to close the popup
    function closePopup() {
        popupContainer.style.display = "none";
    }

    // Close popup when close button is clicked
    closeButton.addEventListener("click", closePopup);

    // Add event listeners to tafsir buttons
    var tafsirButtons = document.querySelectorAll(".tafsir-button");
    tafsirButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            var title = this.dataset.title;
            var text = this.dataset.text;
            openPopup(title, text);
        });
    });

    // Add event listeners to tatbhiq buttons
    var tatbhiqButtons = document.querySelectorAll(".tatbhiq-button");
    tatbhiqButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            var title = this.dataset.title;
            var text = this.dataset.text;
            openPopup(title, text);
        });
    });
});
