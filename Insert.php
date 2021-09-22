<html>
<head>
<body>
<form method="POST" action="#" class="form-horizontal col-md-6 col-md-offset-3" enctype="multipart/form-data">
    <fieldset>
        <legend>
            <center>
                <h2><b> PHP CURD ADD OPERATION </b></h2>
            </center>
        </legend><br>
        <div class="form-group">
            <label class="col-sm-3 control-label">FirstName:-</label>
            <div class="col-sm-6">
                <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter your FirstName">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">LastName:-</label>
            <div class="col-sm-6">
                <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter your LastName">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Gender:-</label>
            <div class="col-sm-6">
                <input type="radio" name="gender" id="gender" value="Male">Male
                <input type="radio" name="gender" id="gender" value="Female">Female
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Email:-</label>
            <div class="col-sm-6">
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your Email-Address">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Joiningdate:-</label>
            <div class="col-sm-6">
                <input type="Date" name="jdate" class="form-control" id="jdate" placeholder="Enter your Joiningdate">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Department:-</label>
            <div class="col-sm-6">
                <select name="dept" class="form-control" id="dept">
                    <option>HR</option>
                    <option>admin</option>
                    <option>Marketing</option>
                    <option>Production</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Hobbies:-</label>
            <div class="col-sm-6">
                <input type="checkbox" id="hobbies" name="hobbies" value="TV">
                <label> TV</label><br>
                <input type="checkbox" id="hobbies" name="hobbies" value="Reading">
                <label> Reading</label><br>
                <input type="checkbox" id="hobbies" name="hobbies" value="Coding">
                <label> Coding</label><br>
                <input type="checkbox" id="hobbies" name="hobbies" value="Skiing">
                <label> Skiing</label><br>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Image:-</label>
            <div class="col-sm-6">
                <input type="File" name="image" id="image">
            </div>
        </div>
        <!-- Button -->
        <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-2"><br>
                <button type="submit" name="submit" class="btn btn-success">SUBMIT</button>
            </div>
        </div>
    </fieldset>
</form>
</body>
</html>