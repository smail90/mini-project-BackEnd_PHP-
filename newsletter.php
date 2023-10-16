<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive newsletter</title>
</head>
<body>
<section class="newsletter">
        <div class="container">
        <div class="row">
        <div class="col-sm-12">
          <div class="content">
            <h2>Subscribe to receive the latest tennis news</h2>
          <form action="Subsribe.php" method="post"> 
          <div class="input-group">
                 <input type="email" name="email" class="form-control" placeholder="Enter your email">
                 <span class="input-group-btn">
                 <button class="btn" type="submit" name="subscribe">Subscribe Now</button>
                 </span>
                  </div>
                </form>
          </div>
        </div>
        </div>
        </div>
        </section>
  
        <style>
         
         .newsletter {
    padding: 50px 0;
    background: #34495e;
    margin: 198px auto;
    }
    
    .newsletter .content {
    max-width: 650px;
    margin: 0 auto;
    text-align: center;
    position: relative;
    z-index: 2; }
    .newsletter .content h2 {
    color: white;
    margin-bottom: 40px; }
    .newsletter .content .form-control {
    height: 30px;
    border-color: #ffffff;
    border-radius:5px;
    width: 50%;
    }
    .newsletter .content.form-control:focus {
    box-shadow: none;
    border: 2px solid #243c4f;
    }
    .newsletter .content .btn {
    height: 40px; 
    border-radius:5px;
    background: #34495e;
    color: #fff;
    font-weight:600;
    }

        </style>
  
</body>
</html>