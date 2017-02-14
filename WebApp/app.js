/****************************************************
 * ReALv2 - RemoteAcademy Labs (The Better Version) *
 *                                                  *
 * File: app.js                                     *
 * Purpose: Entry point and server starting point   *
 ****************************************************/

var express = require( 'express' );
var app = express();
const port = 8000;

app.get( '/', function( req, res ) {
  res.sendFile( __dirname + '/template.html' );
});

app.get( '/node_modules/angular/:file', function( req, res ) {
  res.sendFile( __dirname + "/node_modules/angular/" + req.params.file );
});

app.get( '/controllers/:file', function( req, res ) {
  res.sendFile( __dirname + "/controllers/" + req.params.file );
});

app.listen( port, function( ) {
  console.log( 'Server running on port', port );
});


// This is a comment
