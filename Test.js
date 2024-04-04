
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-app.js";
  import { getDatabase, ref, set, get, child  } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-database.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyBytz0zsTusQHR3sMRWpW26DyD8qedIWrA",
    authDomain: "webyte-b88e1.firebaseapp.com",
    projectId: "webyte-b88e1",
    storageBucket: "webyte-b88e1.appspot.com",
    messagingSenderId: "277283196178",
    appId: "1:277283196178:web:43351e21cb898009c6b7cb"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);

