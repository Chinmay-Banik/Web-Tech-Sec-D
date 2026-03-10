const cell = document.querySelectorAll('.cell');
const statusText = document.getElementById('status');
const reset = document.getElementById('restartBtn');

let currentPlayer = 'X';
let gameActive = true;

let board = ["", "", "", "", "", "", "", "", ""];

const winningConditions = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6]
];

function initializeGame() {
    cell.forEach(cell => cell.addEventListener('click', cellclicked));
    reset.addEventListener('click', resetGame);
    statusText.textContent = `Player ${currentPlayer}'s turn`;
}
function cellclicked() {
    const cellIndex = this.getAttribute('cellIndex');
    if (board[cellIndex] !== "" || !gameActive) {
        return;
    }
    board[cellIndex] = currentPlayer;
    updateBoard(this, cellIndex);
    checkWin();
}
function updateBoard(cell, cellIndex) {
    board[cellIndex] = currentPlayer;
    cell.textContent = board[cellIndex];

}

function changePlayer() {
    currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
    statusText.textContent = `Player ${currentPlayer}'s turn`;

}


function checkWin() {

}


function resetGame() {

}