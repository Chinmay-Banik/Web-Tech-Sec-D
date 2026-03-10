const cell = document.querySelectorAll('.cell');
const statusText = document.getElementById('status');
const reset = document.getElementById('reset');

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

initializeGame();

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
    let roundWon = false;
    for (let i = 0; i < winningConditions.length; i++) {
        const winCondition = winningConditions[i];
        const a = board[winCondition[0]];
        const b = board[winCondition[1]];
        const c = board[winCondition[2]];
        if (a === '' || b === '' || c === '') {
            continue;
        }
        if (a === b && b === c) {
            roundWon = true;

            const index1 = winCondition[0];
            const index2 = winCondition[1];
            const index3 = winCondition[2];

            cell[index1].classList.add('win');
            cell[index2].classList.add('win');
            cell[index3].classList.add('win');

            break;
        }
    }
    if (roundWon) {
        statusText.textContent = `Player ${currentPlayer} wins!`;
        gameActive = false;
        return;
    }
    else if (!board.includes("")) {
        statusText.textContent = `Game ended in a draw!`;
        gameActive = false;
        return;
    }
    else {
        changePlayer();
    }
}
function resetGame() {
    currentPlayer = 'X';
    gameActive = true;
    board = ["", "", "", "", "", "", "", "", ""];
    cell.forEach(cell => {
        cell.textContent = "";
        cell.classList.remove("win");
    });
    statusText.textContent = `Player ${currentPlayer}'s turn`;

}