const options = ['rock', 'paper', 'scissors'];
let userSelection;

function computerSelection() {
    return options[Math.floor(Math.random() * 3)];
  }

  function playGame() {
    const computer = computerSelection();
  
    if (userSelection === computer) {
      return 'It\'s a tie!';
    } else if (
      (userSelection === 'rock' && computer === 'scissors') ||
      (userSelection === 'paper' && computer === 'rock') ||
      (userSelection === 'scissors' && computer === 'paper')
    ) {
      return 'You win!';
    } else {
      return 'Computer wins!';
    }
  }

  document.getElementById('rock').addEventListener('click', function() {
    userSelection = 'rock';
    document.getElementById('result').innerHTML = playGame();
  });
  
  document.getElementById('paper').addEventListener('click', function() {
    userSelection = 'paper';
    document.getElementById('result').innerHTML = playGame();
  });
  
  document.getElementById('scissors').addEventListener('click', function() {
    userSelection = 'scissors';
    document.getElementById('result').innerHTML = playGame();
  });

  