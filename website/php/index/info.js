var slides = document.querySelectorAll('.slideshow img');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide, 2000);

function nextSlide() {
    slides[currentSlide].className = '';
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].className = 'active';
}

const biddingTable = document.getElementById('biddingTable');
const biddingForm = document.getElementById('biddingForm');

biddingForm.addEventListener('submit', function (event) {
    event.preventDefault();

    const playerNameInput = document.getElementById('playerName');
    const bidAmountInput = document.getElementById('bidAmount');

    const playerName = playerNameInput.value;
    const bidAmount = bidAmountInput.value;

    if (playerName && bidAmount) {
        const newRow = document.createElement('tr');
        const playerCell = document.createElement('td');
        playerCell.textContent = playerName;
        const bidCell = document.createElement('td');
        bidCell.textContent = bidAmount;

        newRow.appendChild(playerCell);
        newRow.appendChild(bidCell);
        biddingTable.appendChild(newRow);

        playerNameInput.value = '';
        bidAmountInput.value = '';
    }
});
