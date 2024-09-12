#include <WiFi.h>
#include <WebServer.h>

// Set your WiFi credentials
const char* ssid = "Patungan Yaa";
const char* password = "HanyaRindu";

// Create a web server on port 80
WebServer server(8080);

// Pin to control
int ledPin = 2;

void setup() {
  Serial.begin(115200);
  pinMode(2, OUTPUT);

  // Connect to Wi-Fi
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.println("Connecting to WiFi...");
  }
  Serial.println("Connected to WiFi");
  Serial.println(WiFi.localIP()); // Get the IP address

  // Define the routes
  server.on("/H", []() {
    digitalWrite(2, HIGH);
    server.send(200, "text/plain", "LED ON");
  });

  server.on("/L", []() {
    digitalWrite(2, LOW);
    server.send(200, "text/plain", "LED OFF");
  });

  // Start the server
  server.begin();
}

void loop() {
  // Handle incoming requests
  server.handleClient();
}
