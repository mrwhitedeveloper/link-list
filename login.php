<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom CSS    <link rel="stylesheet" href="./css/style.css"> -->
  
    <!-- Sweet Alert JavaScript -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Nunito Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
    <title>Log in | Authentication</title>
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row mx-1">
            <div class="col-lg-10 col-md-10 offset-lg-1 offset-md-1 text-center mt-5 pb-4 text-primary">
                <h1 class="h1"> Authentication</h1>
            </div>
            <div class="col-lg-10 col-md-10 offset-lg-1 offset-md-1 bg-white shadow mb-5 border border-primary">
                <div class="row">
                    <div class="col-lg-6 col-md-6 p-4 bg-primary divCover">
                       Login
                    </div>
                    <div class="col-lg-6 col-md-6 p-lg-5 p-md-5 px-3 py-4">
                        <div id="signInForm">
                            <h2 class="h2 text-center text-dark mb-3">Sign In</h2>
                            <div class="form-group">
                                <label for="userSIEmail">Email adress<span class="text-danger ml-1">*</span></label>
                                <input type="email" class="form-control" id="userSIEmail" onblur="checkUserSIEmail()"placeholder="mail@mail.com">
                                <small id="userSIEmailError" class="form-text text-danger">Please check your login information.</small>
                            </div>
                            <div class="form-group">
                                <label for="userSIPassword">Password<span class="text-danger ml-1">*</span></label>
                                <input type="password" class="form-control" id="userSIPassword" onblur="checkUserSIPassword()" placeholder="password">
                                <small id="userSIPasswordError" class="form-text text-danger">Please check your password.</small>
                            </div>
                            <button type="button" class="btn btn-outline-primary text-uppercase mb-3" onclick="signIn()">Sign In</button>
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Firebase -->
    
<script src="https://www.gstatic.com/firebasejs/5.9.4/firebase.js"></script>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-analytics.js"></script>
<!-- Add Firebase products that you want to use -->
<script src="https://www.gstatic.com/firebasejs/6.1.1/firebase-auth.js"></script>

<script src="https://www.gstatic.com/firebasejs/6.1.1/firebase-database.js"></script>



<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.0.1/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.0.1/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyBAPjFr4Tx9YL-dfwkEjImmduGy3wH6ZTs",
    authDomain: "link-list-2e850.firebaseapp.com",
    databaseURL: "https://link-list-2e850-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "link-list-2e850",
    storageBucket: "link-list-2e850.appspot.com",
    messagingSenderId: "935530927695",
    appId: "1:935530927695:web:872b0ae57396e95ec63c3a",
    measurementId: "G-PQP7NC8DQ2"
  };

  // Initialize Firebase
  const firebase = initializeApp(firebaseConfig);
  const analytics = getAnalytics(firebase);
</script>


    <!-- Custom JavaScript -->
    <script src="app.js"></script>

</body>
</html>
