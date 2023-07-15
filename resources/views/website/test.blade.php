<!DOCTYPE html>
<html>

<head>

    <title> Change Browser URL Without Refreshing Page </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description"
        content="How to change browser URL without refreshing page using jQuery and HTML5.You have seen in many dynamic website when you request new page they dont redirect you to new page they simply change the URL and get that page using Ajax to save time and bandwidth that's what we were going to do in this tutorial ">

    <meta name="author" content="Code With Mark">
    <meta name="authorUrl" content="http://codewithmark.com">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <button class="toggleButton" data-state="off">Off</button>
                <button class="toggleButton" data-state="on">On</button>


            </div>
        </div>
    </div>
    <script>
// Get all buttons
const buttons = document.querySelectorAll(".toggleButton");

// Add click event listener to each button
buttons.forEach(function(button) {
  button.addEventListener("click", function() {
    // Remove the class from all buttons
    buttons.forEach(function(btn) {
      btn.classList.remove("active");
    });

    // Add the class to the clicked button
    button.classList.add("active");
  });
});


    </script>
</body>

</html>

