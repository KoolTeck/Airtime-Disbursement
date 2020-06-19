<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <body>
        <div class="container">

           <div class="header">
               <div class="logo"></div>
               <h2 class="title">HNG Airtime Vending Dashboard</h2>
           </div> 

           <form action="sendAirtime.php" class="form" id="form" method="post">

               <fieldset class="fieldset">
                <legend class="legend"><img src="assets/images/hiclipart.com.png" alt=""></legend>
                    <label for="phoneNumber">Phone Number</label>
                    <input type="text" placeholder="Phone Number +234 *****" id="phoneNumber" name="phone">

                    <label for="amount">Amount</label>
                    <input type="text" placeholder="Airtime Amount e.g #100" id="amount" name="amount">

                    <label for="select">Select Network</label>
                    <select name="network" id="select">
                        <option value="mtn">MTN</option>
                        <option value="airtel">Airtel</option>
                        <option value="etisalat">Etisalat</option>
                        <option value="glo">Glo</option>
                    </select>

                    <button id='button'  type="submit">Send</button>

               
               </fieldset>
                
           </form>
        </div>
        
</body>
</html>