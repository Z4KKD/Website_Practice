const randomNumber = Math.floor(Math.random() * 100) + 1;
let remainingGuesses = 5;

const guessInput = document.getElementById('guess');
const submitButton = document.getElementById('submit');
const resultOutput = document.getElementById('result');

submitButton.addEventListener('click', () => {
  const guess = Number(guessInput.value);
  if (guess && guess > 0 && guess <= 100) {
    remainingGuesses--;
    if (guess === randomNumber) {
      resultOutput.textContent = `Congratulations! You guessed the number in ${5 - remainingGuesses} tries.`;
      submitButton.disabled = true;
    } else if (guess < randomNumber) {
      resultOutput.textContent = `Too low. You have ${remainingGuesses} guesses left.`;
    } else {
      resultOutput.textContent = `Too high. You have ${remainingGuesses} guesses left.`;
    }

    if (remainingGuesses === 0) {
      resultOutput.textContent = `Sorry, you ran out of guesses. The number was ${randomNumber}.`;
      submitButton.disabled = true;
    }
  }
  guessInput.value = '';
});
