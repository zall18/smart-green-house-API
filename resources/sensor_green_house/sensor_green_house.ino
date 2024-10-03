#include "DHT.h"
#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <ESP8266WebServer.h> 

#define DHTPIN 5
#define DHTTYPE DHT11
#define pinLED 4
#define KELEMBAPAN_MIN 30
#define WAKTU_POMPA 5000 
#define irPin 12

DHT dht(DHTPIN, DHTTYPE);
ESP8266WebServer espServer(8080);

const char* ssid = "Patungan Yaa";
const char* password = "HanyaRindu";

const char* server = "192.168.100.115";
const int sensorPin = 3;
int sensorPinTnh = A0;
const int relayPin = 0;

void setup() {
  // put your setup code here, to run once:

  Serial.begin(9600);

  pinMode(sensorPin, INPUT);
  pinMode(pinLED, OUTPUT);
  pinMode(relayPin, OUTPUT);
  pinMode(irPin, OUTPUT);

  digitalWrite(relayPin, HIGH);
  WiFi.hostname("NodeMCU");
  WiFi.begin(ssid, password);

  while(WiFi.status() != WL_CONNECTED)
  {
    digitalWrite(pinLED, HIGH);
    delay(3000);
    digitalWrite(pinLED, LOW);

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

  espServer.on("/wOn", []() {
    digitalWrite(relayPin, LOW);
    espServer.send(200, "text/plain", "Water On");
  });

  espServer.on("/wOff", []() {
    digitalWrite(relayPin, HIGH);
    espServer.send(200, "text/plain", "Water Off");
  });

  // Serial.println("Koneksi berhasil");
  // dht.begin();
  // Start the server
  espServer.begin();
}

void loop() {
  // put your main code here, to run repeatedly:
  
  //   digitalWrite(relayPin, LOW); // LOW mengaktifkan relay (menghubungkan NO)
  // delay(5000); // Pompa hidup selama 5 detik
  

  //   digitalWrite(relayPin, HIGH); // HIGH mematikan relay/
  // delay(5000); // Pompa mati selama 5 detik
  int sensorValue = digitalRead(sensorPin);
  int sensorValueTnh = analogRead(sensorPinTnh);
  float kelembapanTnh = map(sensorValueTnh, 1023, 0, 0, 100);

  // if (kelembapanTnh < KELEMBAPAN_MIN) {
  //   Serial.println("Kelembapan tanah rendah. Menyalakan pompa...");
  //   digitalWrite(relayPin, LOW);  // LOW mengaktifkan relay
  //   delay(WAKTU_POMPA);           // Pompa hidup selama 5 detik
  //   digitalWrite(relayPin, HIGH); // Matikan relay
  //   Serial.println("Pompa dimatikan.");
  // }

  Serial.print("Sensor Output: ");
  Serial.println(sensorValue);

 int irValue = digitalRead(irPin);  // Baca nilai sensor infrared
  if (irValue == LOW) {
  Serial.println("Objek terdeteksi");
  digitalWrite(pinLED, HIGH);  // Nyalakan LED jika objek terdeteksi
} else {
  Serial.println("Tidak ada objek");
  digitalWrite(pinLED, LOW);   // Matikan LED jika tidak ada objek
}

  float temp = dht.readTemperature();
  int hum = dht.readHumidity();

  Serial.println("Suhu : " + String(temp));
  Serial.println("Kelembapan : " + String(hum));
  Serial.println("Kelembapan Tanah : " + String(kelembapanTnh));
  
  WiFiClient wClient;
  const int httpPort = 8080;
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
