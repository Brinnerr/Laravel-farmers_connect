<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
          background-image: url();
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            
            
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(233, 222, 222, 0.1);
            padding: 20px;
            width: 600px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
           border-color:#37880b;
           border-width: 2px; 
            border-style: solid;
            

           
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        .flex{
            display: flex;
            
            
        }
        h1{
            margin-top: 150px;
        }
    </style>
</head>
<body>

    <form>
        <div class="page-header">
            <label>
                
                <h1> <span style="color: #161613;">Farmer Registration Form</span></h1>
            </label>
        </div>

        <!-- Personal Information -->
        <div class="name">
            <div>
                <label for="fullName">Name:</label>
            </div>
            <div class="flex">
                <input type="text" id="fullName" placeholder="First" required>
                <input type="text" id="fullName" name="fullName"placeholder="Last" required>
            </div>
        </div>

        <div class="email">
            <label>Email</label>
            <div class="page-content">
             <input type="email">
            </div>
        </div>

         <!-- Farm Details -->
        <div>
            <label for="typeOfFarming">Type of Farming:</label>
        <select id="typeOfFarming" name="typeOfFarming" required>
            <option value="cropCultivation">Crop Cultivation</option>
            <option value="livestock">Livestock</option>
            <option value="poultry">Poultry</option>
            <option value="other">Other</option>
        </select>
            </div>
            <div>
                <label for="crop">Select crop:</label>
            <select id="crop" name="crop" required>
                <option value="maize">maize</option>
                <option value="beans">beans</option>
                <option value="">potatoes</option>
                <option value="other">Other</option>
            </select>
                </div>
        </div>

        <div>
            <label for="farmName">Farm Name:</label>
            <input type="text" id="farmName" name="farmName" required>
        </div>

        <div> 
        <label for="phoneNumber">Phone Number:</label>
        <input type="tel" id="phoneNumber" name="phoneNumber"  placeholder="### ### ###">
        </div>


        <!-- Address Details -->

        <div>
            <div>
                <label> Farmer Address:</label>
            </div>

            <div>  
            <input type="text" id="address" name="address" placeholder="street Address" required>
 
            </div>
           
            <div  class="flex">
                <input type="text" id="address" name="address"  placeholder="City"required>
                <input type="text" id="address" name="address" placeholder="Region"required>
            </div >
            
            <div class="flex">  
               <input type="text" id="address" name="address"  placeholder="postal/Zip Code"required>
               <input type="text" id="address" name="address" placeholder="Kenya" required>
            </div>
        </div>

        <!-- Additional Details -->
        
        <!-- <div> 
        <label for="farmSize">Farm Size (in acres/hectares):</label>
        <input type="number" id="farmSize" name="farmSize" required>
        </div> -->
        
        <!-- <div class="verify">
            <label for=""><h4>Replace this with a title or description</h1></label>
            <div class="ver">
                <label for="">Verification</label>
            </div>
        </div> -->
        
        <!-- Additional Details -->
        <!-- Add more fields as needed -->

        <button type="submit">Submit</button>
    </form>

</body>
</html>
