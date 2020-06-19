<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <body>
        <div class="container">

           <div class="header">
               <div><img class="logo" src="assets/images/hng-logo.jpg"></div>
               <h2 class="title">HNG Airtime Vending Dashboard</h2>
           </div> 

           <form action="sendAirtime.php" class="form" id="form" method="post">

               <fieldset class="fieldset">
                  <div id="fields">
                    <div class="form-group form-row">
                      <div class="col-sm-4">
                          <label for="phoneNumber">Phone Number</label>
                          <input type="text" placeholder="Phone Number +234 *****" id="phoneNumber" name="phone0" class="form-control" required>
                      </div>
                      <div class="col-sm-4">
                          <label for="amount">Amount</label>
                          <input type="text" placeholder="Airtime Amount e.g #100" id="amount" name="amount0" class="form-control" required>      
                      </div>
                      <div class="col-sm-4">
                          <label for="select">Select Network</label>
                          <select name="network0" id="select" required>
                              <option value="mtn">MTN</option>
                              <option value="airtel">Airtel</option>
                              <option value="etisalat">Etisalat</option>
                              <option value="glo">Glo</option>
                          </select>                       
                      </div>
                    </div>
                  </div>   
                  <input type="text" name="total" id="total" value="0" hidden>

                    <div class="form-group">
                      <button id='button' class="send"  type="submit">Send</button>
                    </div>
               
               </fieldset>
                
           </form>
           <div>
              <button class="btn btn-info" id="add">Add recipients</button>
            </div>
        </div>
<script type="text/javascript">
  $(document).ready(function(){
    var i = 1;
    $("#add").click(function(e){
      e.preventDefault();
      $("#fields").append(`
          <div class="form-group form-row">
            <div class="col-sm-4">
                <label for="phoneNumber">Phone Number</label>
                <input type="text" placeholder="Phone Number +234 *****" id="phoneNumber" name="phone${i}" class="form-control" required>
            </div>
            <div class="col-sm-4">
                <label for="amount">Amount</label>
                <input type="text" placeholder="Airtime Amount e.g #100" id="amount" name="amount${i}" class="form-control" required>      
            </div>
            <div class="col-sm-4">
                <label for="select">Select Network</label>
                <select name="network${i}" id="select" required>
                    <option value="mtn">MTN</option>
                    <option value="airtel">Airtel</option>
                    <option value="etisalat">Etisalat</option>
                    <option value="glo">Glo</option>
                </select>                       
            </div>
          </div>
        `

        );
      $("#total").val(i);
      i++;
    });
  });
</script>   
</body>
</html>