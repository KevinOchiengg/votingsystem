<?php include 'includes/header.php'; ?>
<body>
    <div class="content">
    <div class="container">
      
    
        <header>Registration</header>

        <form method="POST" action="signup-check.php" enctype="multipart/form-data">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label for="surname">Surname</label>
                            <input type="text" name="surname" placeholder="Enter Surname" required>
                        </div>

                        <div class="input-field">
                            <label for="firstname">First name</label>
                            <input type="txt" name="firstname" placeholder="Enter First Name" required>
                        </div>

                        <div class="input-field">
                            <label for="lastname">Last name</label>
                            <input type="text" name="lastname" placeholder="Enter Last Name" required>
                        </div>

                        <div class="input-field">
                            <label for="idnumber">ID Number</label>
                            <input type="number" name="idnumber" placeholder="Enter Id number" required>
                        </div>

                        <div class="input-field">
                            <label for="gender">Gender</label>
                            <select name="gender" required>
                                <option disabled selected>Select your gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="Enter your Email" required>
                        </div>

                    </div>
                </div>

                <div class="details ID">
    
                    <div class="fields">
                        <div class="input-field">
                            <label for="county">County</label>
                            <input type="text" name="county" placeholder="Enter your County" required>
                        </div>

                        <div class="input-field">
                            <label for="constituency">Constituency</label>
                            <input type="text" name="constituency"placeholder="Enter your Constituency" required>
                        </div>

                        <div class="input-field">
                            <label for="ward">Ward</label>
                            <input type="text" name="ward" placeholder="Enter your Ward" required>
                        </div>

                        <div class="input-field">
                            <label for="pollingstation">Polling Station</label>
                            <input type="text" name="pollingstation" placeholder="Enter Polling Station" required>
                        </div>

                        <div class="input-field">
                            <label for="photo">Upload Profile Picture</label>
                            <input type="file" name="photo" required>
                        </div>

                        <div class="input-field">
                            <label for="birth">Date of Birth</label>
                            <input type="date" name="birth" placeholder="Enter Birth Day" required>
                        </div>
                        <div class="input-field">
                            <label for="password">Password</label>
                            <input type="password" name="password" placeholder="Enter password" required>
                        </div>
                         <button type="submit" name="register" class="btnText">Submit</button>
                    </div>

                  
                </div> 
            </div>
              </div>
        </form>
    </div>
</body>
</html>


