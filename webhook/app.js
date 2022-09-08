const https = require('https');
const http = require('http');

var admin = require("firebase-admin");

// Fetch the service account key JSON file contents
var serviceAccount = require("C:/xampp/htdocs/monitoring-rbw/webhook/services-account-file.json");

// Initialize the app with a service account, granting admin privileges
admin.initializeApp({
  credential: admin.credential.cert(serviceAccount),
  // The database URL depends on the location of the database
  databaseURL: "https://monitoring-walet-5b41c-default-rtdb.firebaseio.com/"
});

var db = admin.database();
var ref = db.ref("Data_Walet");
ref.on("value", function(snapshot) {
  console.log(snapshot.val());
  updateDb(snapshot.val().Masuk, snapshot.val().Keluar, snapshot.val().Total);
}, (errorObject) => {
    console.log("The read failed: " + errorObject.name);
    });

function updateDb(masuk, keluar, total){
  console.log("updating database");
  http.get('http://localhost/monitoring-rbw/updateDb.php?masuk='+masuk+'&keluar='+keluar+'&total='+total, (resp) => {
  let data = '';

  // A chunk of data has been received.
  resp.on('data', (chunk) => {
    data += chunk;
  });

  // The whole response has been received. Print out the result.
  resp.on('end', () => {
    // console.log(JSON.parse(data).result);
    console.log(data);
  });

  }).on("error", (err) => {
  console.log("Error: " + err.message);
});
}