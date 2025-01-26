
    var players = [
    { name: "Player 1", skill: 80, position: "Batsman" },
    { name: "Player 2", skill: 90, position: "Bowler" },
    { name: "Player 3", skill: 85, position: "All-Rounder" },
    { name: "Player 4", skill: 95, position: "Batsman" },
    { name: "Player 5", skill: 75, position: "Wicket-Keeper" },
    // Add more players as needed
];

// Function to display the list of players
function displayPlayers() {
    var playersList = document.getElementById("players-list");
    playersList.innerHTML = "";

    players.forEach(function(player) {
        var playerInfo = document.createElement("div");
        playerInfo.innerHTML = "<strong>Name:</strong> " + player.name + ", <strong>Position:</strong> " + player.position + ", <strong>Skill:</strong> " + player.skill;
        playersList.appendChild(playerInfo);
    });
}

// Function to select 11 players
function selectPlayers() {
    var selectedPlayers = [];
    var selectedCount = 0;

    // Loop through checkboxes to check selected players
    players.forEach(function(player, index) {
        var checkbox = document.getElementById("player-" + index);
        if (checkbox.checked) {
            selectedPlayers.push(player);
            selectedCount++;
        }
    });

    // Check if exactly 11 players are selected
    if (selectedCount === 11) {
        // Display selected players
        console.log("Selected Players for the 11-member team:");
        selectedPlayers.forEach(function(player) {
            console.log(player.name + " - " + player.position + " (Skill: " + player.skill + ")");
        });
    } else {
        alert("Please select exactly 11 players.");
    }
}

// Display list of players when the page loads
window.onload = function() {
    displayPlayers();
};
