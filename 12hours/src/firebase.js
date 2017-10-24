// import and configure firebase
import * as firebase from 'firebase';

const firebaseConfig = {
  apiKey: "AIzaSyAbjk-3zgJR89wo8sDMUUE-y8I39UBJkcQ",
  authDomain: "matching-1c869.firebaseapp.com",
  databaseURL: "https://matching-1c869.firebaseio.com",
  projectId: "matching-1c869",
  storageBucket: "matching-1c869.appspot.com",
  messagingSenderId: "414493467391"
}
export const firebaseApp = firebase.initializeApp(firebaseConfig)
