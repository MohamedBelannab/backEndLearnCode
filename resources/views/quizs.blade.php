<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <title>Responsive Quiz</title>
  <style>
    body {
      background-color: #f8f9fa;
    }
    .container {
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-top: 100px;
      max-width: 500px; /* Adjust this value as needed */
      margin-left: auto;
      margin-right: auto;
    }
	.custom-control {
		margin-top: 10px;
	}

    h2 {
      text-align: center;
      color: #007bff;
    }
	.flex{
		display: flex;
		justify-content: space-between;
	}

    label {
      font-weight: bold;
    }

    .btn-primary {
      background-color: #007bff;
      border: none;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    #result {
      text-align: center;
      margin-top: 20px;
      font-weight: bold;
    }
  </style>
</head>

<body>

  <div class="container">
    <h2 class="mt-1 mb-2">HTML Quiz</h2>
	<hr>
    <form id="quizForm">
      
      <!-- Question 1 -->
      <div class="form-group">
        <label for="q1" style="color: #007bff;">Who is making the Web standards?</label><br>
        <!-- <label for="title">Title:</label>
       <input type="text" class="form-control" id="title" placeholder="Enter title"> -->

        <div class="custom-control custom-radio">
          <input type="radio" id="q1a" name="q1" class="custom-control-input" value="a">
          <label class="custom-control-label" for="q1a">A) Googel</label>
        </div>

        <div class="custom-control custom-radio">
          <input type="radio" id="q1b" name="q1" class="custom-control-input" value="b">
          <label class="custom-control-label" for="q1b">B) Microsoft</label>
        </div>

		<div class="custom-control custom-radio">
          <input type="radio" id="q1b" name="q1" class="custom-control-input" value="b">
          <label class="custom-control-label" for="q1b">C) Wide Web</label>
        </div>

		<div class="custom-control custom-radio">
          <input type="radio" id="q1b" name="q1" class="custom-control-input" value="b">
          <label class="custom-control-label" for="q1b">D)Mozilla</label>
        </div>
      </div>


      <!-- Add more questions as needed -->
    	<hr>
		<div class="flex">
		<p>Question 1 of 7</p>
		<button type="button" class="btn btn-primary" >Next</button>
		</div>
    </form>



    <!-- <div id="result" class="mt-4"></div> -->
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



</body>

</html>
