<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <title>PHP Madlib</title>

    <!--reducing the width of the form on desktop-->
    <style type="text/css">
      form {
        max-width: 450px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Madlib</h1>
      <form name="myform" method="post" action="madlib.php">
        <div class="form-group">
          <label for="firstname">First Name</label>
          <input
            type="text"
            class="form-control"
            name="username"
            placeholder="Enter firstname here"
          />
        </div>
        <div class="form-group">
          <label for="lastname">Last Name</label>
          <input
            type="text"
            class="form-control"
            name="username"
            placeholder="Enter lastname here"
          />
        </div>
        
        <div class="form-group">
          <label for="gender">Gender</label>
          <!--<div class="form-check">
            <input class="form-check-input" type="radio" name="gender" />
            <label class="form-check-label" for="gender"> Male </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" />
            <label class="form-check-label" for="gender"> Female </label>
          </div>-->
          Male:
          <input
            type="radio"
            class="custom-control-label"
            name="gender"
            value="Male"
            checked
          />
          Female:
          <input
            type="radio"
            class="custom-control-label"
            name="gender"
            value="Female"
          />
        </div>
    
        <div class="form-group">
          <label for="color">Favorite Color</label>
          <select class="form-control" name="color">
            <option value="">Select color...</option>
            <!--this serve as the placeholder-->
            <option>blue</option>
            <option>red</option>
            <option>aquamarine</option>
            <option >teal</option>
            <option >salmon</option>
            <option >jungle pink</option>
          </select>
        </div>
        <div class="form-group">
          <label for="garment">Garment</label>
          <select class="form-control" name="garment">
            <option value="">Select garment...</option>
            <!--this serve as the placeholder-->
            <option>thong monokini</option>
            <option>comfortable but ragged hipster sweater</option>
            <option>gap sprint catalog vest</option>
            <option >pair of Value Village special plaid pants</option>
            <option >pair of hand-me-down overalls</option>
            <option >pair of fisherman's wader</option>
          </select>
        </div>

        <button type="submit" name="mysubmit" class="btn btn-primary mb-2">
          Submit
        </button>
      </form>
    </div>
    <!--end of container class-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
