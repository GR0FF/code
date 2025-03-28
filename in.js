function runLoveCheck() {
  // Prompt the user for input with suggestions
  let response = prompt("Hello, do you love me? (Suggested: Yes or No)", "Yes or No");

  // Process the user's response
  if (response) {
    response = response.trim().toLowerCase(); // Normalize the response

    if (response === "yes") {
      // If the user responds with "Yes"
      alert("I love you too... ❤️ Heart ❤️ Heart ❤️ Heart!\nSee you later!");
    } else if (response === "no") {
      // If the user responds with "No"
      alert("But I still love you... 😢 Cry 😢 Cry 😢\nAnyway, take care!");
    } else {
      // If the user enters anything else
      alert(`You entered: "${response}"\nI still care about you... Think more clearly next time!`);
    }
  } else {
    // If the user closes the prompt or enters nothing
    alert("You didn't answer, but I still care about you! ❤️");
  }
}