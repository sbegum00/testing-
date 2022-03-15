<!DOCTYPE html>
<html>
    <head>
        <title>My website</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  
</head>

<body id="body">
<section class="my-5">
    <div class="text-center">
    <h1>SUBMIT FORM </h1>
    </div>
</section>


<div  class="w-50 m-auto ">   
    
    <form action="info.php" method="post">
    
        <div class="form-row">
            <div class="form-group col-md-6">
            <label >First name</label>
            <input type="text" name="firstname" class="form-control" placeholder="First name">
            </div>
            <div class="form-group col-md-6">
            <label >Last name</label>
            <input type="text" name="lastname" class="form-control" placeholder="Last name">
            </div>
    </div>
    <div class="form-row">
            <div class="form-group col-md-6">
            <label >Email</label>
            <input type="email" class="form-control" name="email"  placeholder="Email">
            </div>
            <div class="form-group col-md-6">
            <label >Password</label>
            <input type="password" class="form-control" name="password"  placeholder="Password">
            </div>
    </div>
    <div class="form-group">
        <label >Address</label>
        <input type="text" class="form-control" name="Address1" placeholder="1234 Main St">
    </div>
    <div class="form-group">
        <label >Address 2</label>
        <input type="text" class="form-control" name="Address2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="form-row">
            <div class="form-group col-md-6">
            <label >City</label>
            <input type="text" class="form-control" name="City">
            </div>
            <div class="form-group col-md-4">
            <label >State</label>
            <select class="form-control" name="state">
                <option selected>Choose...</option>
                <option value="AK">Alaska</option>
                <option value="AL">Alabama</option>
                <option value="AR">Arkansas</option>
                <option value="AZ">Arizona</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DC">District of Columbia</option>
                <option value="DE">Delaware</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="IA">Iowa</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="MA">Massachusetts</option>
                <option value="MD">Maryland</option>
                <option value="ME">Maine</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MO">Missouri</option>
                <option value="MS">Mississippi</option>
                <option value="MT">Montana</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="NE">Nebraska</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NV">Nevada</option>
                <option value="NY">New York</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="PR">Puerto Rico</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VA">Virginia</option>
                <option value="VT">Vermont</option>
                <option value="WA">Washington</option>
                <option value="WI">Wisconsin</option>
                <option value="WV">West Virginia</option>
                <option value="WY">Wyoming</option>
            </select>
            </div>
            <div class="form-group col-md-2">
            <label >Zip</label>
            <input type="text" class="form-control" name="Zip">
            </div>
    </div>
    <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox"  id="gridCheck" required>
            <label class="form-check-label" for="gridCheck">
            I Agree :)
            </label>
            </div>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
    <a class="btn btn-secondary btn-md" href="product.php" role="button">Link</a>

  

    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>


