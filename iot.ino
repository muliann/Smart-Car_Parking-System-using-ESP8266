#include <ESP8266WiFi.h>
#include <WiFiUdp.h>
#include <ESP8266HTTPClient.h>
#include <WiFiClient.h>

/* Set these to your desired credentials. */
const char* ssid = "Muli";  //ENTER YOUR WIFI SETTINGS
const char* password = "12345678";
const char* serverName = "192.168.43.140";

// am using 3 sensors for if one works everything else will.
int slot1 = 16;   // GPIO2 = D0
int slot2 = 4;   // GPIO4 = D2
int slot3 = 5;   // GPIO5 = D1

void setup() {
  delay(1000);
  Serial.begin(9600);

  pinMode(slot1, INPUT);
  
  WiFi.begin(ssid, password);     //Connect to your WiFi router
  Serial.println("");
  
  Serial.print("Connecting to ");
  Serial.print(ssid);                          // display ssid
  // Wait for connection
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  //If connection successful show IP address in serial monitor
  Serial.println("");
  Serial.print("Connected to ");
  Serial.println(ssid);
  Serial.print("IP address: ");
  Serial.println(WiFi.localIP());  //IP address assigned to your ESP

  Serial.println("Car  Parking System");//print out "HIGH
  
 }

void loop() {
  if(WiFi.status()== WL_CONNECTED){   //Check WiFi connection status
  
  HTTPClient http;
  WiFiClient client;

   int sensor1 = digitalRead(slot1);
     int sensor2 = digitalRead(slot2);
   int sensor3 = digitalRead(slot3);
   String string1 = "sensor1=";
   String string2 = "sensor2=";
   String string3 = "sensor3=";
   String status1 = string1+sensor1;
   String status2 = string2+sensor2; 
   String status3 = string3+sensor3;
  
  if (client.connect(serverName, 80)) {
    Serial.println("connected to server");
    String httpRequestData =String(sensor1) +String(sensor2)+String(sensor3);
    String postStr;
    postStr += "http://192.168.43.140:80/smart_parking/sensordata.php?httpRequestData=";
    postStr += String(httpRequestData);

    http.begin(postStr);      //Specify request destination
    http.addHeader("Content-Type", "text/plain");  //Specify content-type header
    
  
    Serial.print("httpRequestData: ");
    Serial.println(httpRequestData);
   
    int httpResponseCode = http.POST(httpRequestData);   //Send the request
    if (httpResponseCode > 0) {
      Serial.print("HTTP Response code: ");
      Serial.println(httpResponseCode);
      String response = http.getString();
      Serial.println(response);
      }
     else {
      Serial.print("Error code: ");
      Serial.println(httpResponseCode);
     }
    http.end();  //Close connection
  }
  
  delay(2000);
  }
}
