<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conatct Us</title>
</head>
<body>

<section class="contact-form">
      <div class="row">
        <div class="col-lg-6">
          <h3>Contact Form</h3>
          <form id="contactForm"  action="contactUs.php" method="post">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="message">Message:</label>
              <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </section>


    <style>
     
 
.contact-form {
  background-color: #34495e;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}



.col-lg-6 {
  background-color: #34495e;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Style the form heading */
h3 {
  font-size: 24px;
  margin-bottom: 20px;
  color: white;
  text-align: center;
  text-decoration: underline;
}

/* Style form labels */
label {
  font-weight: bold;
  color: white;
 
}

/* Style form input and textarea */
.form-control {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
  transition: border-color 0.2s;
}

.form-control:focus {
  border-color: #007bff;
}

/* Style the submit button */
.btn-primary {
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 8px;
  padding: 10px 20px;
  cursor: pointer;
  text-align: center;
}

.btn-primary:hover {
  background-color: #007bff;
}

/* Add some spacing between form groups */
.form-group {
  margin-bottom: 20px;
}


  </style>
    
</body>
</html>