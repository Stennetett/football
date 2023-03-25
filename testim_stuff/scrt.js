// Create a new XMLHttpRequest object
var xhttp = new XMLHttpRequest();

// Define the function to be executed when the request is successful
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        // Parse the JSON response
        var data = JSON.parse(this.responseText);

        // Use the data in your JavaScript code
        console.log(data);
    }
};

// Open a new request to the getData.php file
xhttp.open("GET", "getData.php", true);

// Send the request
xhttp.send();