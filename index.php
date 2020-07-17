<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form>
                    <!-- departure -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Departure</label>
                        <input 
                        type="text" 
                        class="form-control" 
                        name="departure" 
                        id="exampleInputEmail1" 
                        placeholder="Departure">
                    </div>

                    <!-- Arrival -->
                    <div class="form-group">
                        <label for="exampleInputPassword1">Arrival</label>
                        <input 
                        type="text" 
                        class="form-control" 
                        name="arrival" 
                        id="exampleInputPassword1" 
                        placeholder="Arrival">
                    </div>

                    <!-- Trip -->
                    <div class="form-group">
                        <label for="exampleInputFile">Trip</label>
                        <input 
                        type="text" 
                        id="exampleInputFile"
                        class="form-control" 
                        name="trip" 
                        id="exampleInputPassword1" 
                        placeholder="Trip">
                    </div>

                    <!-- Currency -->
                    <div class="form-group">
                        <label for="exampleInputFile">Currency</label>
                        <input 
                        type="text" 
                        id="exampleInputFile"
                        class="form-control" 
                        name="currency" 
                        id="exampleInputPassword1" 
                        placeholder="Currency">
                    </div>

                    <!-- Time -->
                    <div class="form-group">
                        <label for="exampleInputFile">Time</label>
                        <input 
                        type="time" 
                        id="exampleInputFile"
                        class="form-control" 
                        name="time" 
                        id="exampleInputPassword1" 
                        placeholder="Time">
                    </div>

                    <!-- Date -->
                    <div class="form-group">
                        <label for="exampleInputFile">Date</label>
                        <input 
                        type="date" 
                        id="exampleInputFile"
                        class="form-control" 
                        name="date" 
                        id="exampleInputPassword1" 
                        placeholder="Date">
                    </div>

                    <!-- Ride -->
                    <div class="form-group">
                        <label for="exampleInputFile">Ride</label>
                        <input 
                        type="text" 
                        id="exampleInputFile"
                        class="form-control" 
                        name="ride" 
                        id="exampleInputPassword1" 
                        placeholder="Ride">
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>