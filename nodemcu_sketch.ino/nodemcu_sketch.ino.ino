/*  Author: Shanu Dey
 *  Dated on: 21th Nov 2019
 *  Project: Automatic Parking
 */

#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
 
const char* ssid = "Free Viruses";
const char* password = "ItisAsecret";
 
void setup () {
 
  Serial.begin(115200);
  WiFi.begin(ssid, password);
  Serial.println("Connecting : ");
  while (WiFi.status() != WL_CONNECTED) {

    delay(1000);
    Serial.print(".");
 
  }
  Serial.println("Connection successful");
  pinMode(D0,INPUT);
  pinMode(D1,INPUT);
  pinMode(D2,INPUT);
  pinMode(D3,INPUT);
  pinMode(D4,INPUT);
  pinMode(D5,INPUT);
  
}
 
void loop() {
 
  if (WiFi.status() == WL_CONNECTED) { //Check WiFi connection status
 
    HTTPClient http;  //Declare an object of class HTTPClient
    String link="http://746cea61.ngrok.io/AutomaticParking/receiveData.php?";
    link+="slot1=";
    link+=digitalRead(D0);
    Serial.println(link);
    http.begin(link);  //Specify request destination

    /* For debugging purpose*/   
    int httpCode = http.GET(); //Send the request
    Serial.println(httpCode);
     if (httpCode > 0) { //Check the returning code
      String payload = http.getString();   //Get the request response payload
      Serial.println(payload);  //Print the response payload
    }
    
    http.end();//Close connection
  }
  delay(1000);    //Send a request every 30 seconds
}
