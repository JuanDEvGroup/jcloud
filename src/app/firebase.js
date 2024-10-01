import { initializeApp } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-app.js";
import { getAuth } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-auth.js"
import { getFirestore } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-firestore.js"

const firebaseConfig = {
  apiKey: "AIzaSyDTCv1Pz0sD8bAUDWh_pqSfgD0lI9oNOTA",
  authDomain: "juan-flix.web.app",
  // The value of `databaseURL` depends on the location of the database
  databaseURL: "https://juan-flix.firebaseio.com",
  projectId: "juan-flix",
  storageBucket: "juan-flix.appspot.com",
  messagingSenderId: "105539735907",
  
 

// Initialize Firebase
export const app = initializeApp(firebaseConfig);
export const auth = getAuth(app)
export const db = getFirestore(app)