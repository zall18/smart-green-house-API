#include "DHT.h"
#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <ESP8266WebServer.h> 

#define DHTPIN 5
#define DHTTYPE DHT11
#define pinLED 4

DHT dht(DHTPIN, DHTTYPE);
ESP8266WebServer espServer(80);

const char* ssid = "Iman_sport";
const char* password = "123456789";

const char* server = "192.168.120.8";
const int sensorPin = 3;
int sensorPinTnh = A0;

void setup() {
  // put your setup code here, to run once:

  Serial.begin(9600);

  pinMode(sensorPin, INPUT);
  pinMode(pinLED, OUTPUT);

  WiFi.hostname("NodeMCU");
  WiFi.begin(ssid, password);

  while(WiFi.status() != WL_CONNECTED)
  {
    digitalWrite(pinLED, LOW);
    delay(500);
  }
  Serial.println("Connected to WiFi");
  Serial.println(WiFi.localIP()); // Get the IP address

  // Define the routes
  espServer.on("/H", []() {
    digitalWrite(pinLED, HIGH);
    espServer.send(200, "text/plain", "LED ON");
  });

  espServer.on("/L", []() {
    digitalWrite(pinLED, LOW);
    espServer.send(200, "text/plain", "LED OFF");
  });

  // Serial.println("Koneksi berhasil");
  // dht.begin();
  // Start the server
  espServer.begin();
}

void loop() {
  // put your main code here, to run repeatedly:
  
  
  int sensorValue = digitalRead(sensorPin);
  int sensorValueTnh = analogRead(sensorPinTnh);
  float kelembapanTnh = map(sensorValueTnh, 1023, 0, 0, 100);

  Serial.print("Sensor Output: ");
  Serial.println(sensorValue);

  // if (sensorValue == HIGH) {
  //   digitalWrite(pinLED, HIGH); // Nyalakan LED
  // } else {
  //   digitalWrite(pinLED, LOW);  // Matikan LED
  // }

  float temp = dht.readTemperature();
  int hum = dht.readHumidity();

  Serial.println("Suhu : " + String(temp));
  Serial.println("Kelembapan : " + String(hum));
  Serial.println("Kelembapan Tanah : " + String(kelembapanTnh));
  
  WiFiClient wClient;
  const int httpPort = 80;
  if(!wClient.connect(server, httpPort)){
    Serial.println("Gagal konek web");
    return;
  }

  String url;
  HTTPClient http;
  url = "http://" + String(server) + "/smart-green-house-web/public/simpan/" + String(temp) + "/" + String(hum) + "/" + String(kelembapanTnh);
  http.begin(wClient, url);
  http.GET();
  http.end();

  // Handle incoming requests
  espServer.handleClient();
  delay(1000);
}
