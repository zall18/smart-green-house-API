#include <ESP8266WiFi.h>
#include <ESP8266WebServer.h> // Tambahkan library ini

// Set your WiFi credentials
const char* ssid = "Iman_sport";
const char* password = "123456789";

// Create a web server on port 80
ESP8266WebServer espServer(80); // Ubah ini menjadi ESP8266WebServer

// Pin to control
int ledPin = 2;

void setup() {
  Serial.begin(9600);
  pinMode(ledPin, OUTPUT); // gunakan variabel ledPin

  // Connect to Wi-Fi
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.println("Connecting to WiFi...");
  }
  Serial.println("Connected to WiFi");
  Serial.println(WiFi.localIP()); // Get the IP address

  // Define the routes
  espServer.on("/L", []() {
    digitalWrite(ledPin, HIGH);
    espServer.send(200, "text/plain", "LED ON");
  });

  espServer.on("/H", []() {
    digitalWrite(ledPin, LOW);
    espServer.send(200, "text/plain", "LED OFF");
  });

  // Start the server
  espServer.begin();
}

void loop() {
  // Handle incoming requests
  espServer.handleClient();
}
