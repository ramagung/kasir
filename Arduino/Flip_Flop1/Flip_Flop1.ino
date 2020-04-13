void setup() {
  
  pinMode(3, OUTPUT);
  pinMode(5, OUTPUT);
  pinMode(6, OUTPUT);
}

void loop() {
  digitalWrite(3, HIGH);
  digitalWrite(5, LOW);
  digitalWrite(6, LOW);
  delay(500);
  digitalWrite(3, LOW);
  digitalWrite(5, HIGH);
  digitalWrite(6, LOW);
  delay(500);
  digitalWrite(3, LOW);
  digitalWrite(5, LOW);
  digitalWrite(6, HIGH);
  delay(500);
  
}


********************
 NAMA  : Anak Agung Adi Rama Anggrapana
 NIM : 1815051022
 KELAS : PTI 4C
********************
