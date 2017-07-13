#define RIGHT B00000010 // Write port B to turn right
#define STOP  B00000000 // Write port B to stop motor
#define T1    1000
#define T2    2000

int val;                // analog value for trimpot
int c_motor, l_motor;   // timers for motor

void spin(int duty, int cycle)
{
  c_motor = micros();
  int diff_t = c_motor - l_motor;
  if(diff_t < cycle)
  {
    if (diff_t < duty)
    {
      PORTB = PORTB | RIGHT; // Turns right
    }
    else
    {
      PORTB = PORTB & STOP; // Stops
    }
  }
  else
  {
    l_motor = c_motor;
  }
}

void setup()
{
  DDRB  = DDRB | B00000011; // Set pins 8 and 9 as output
  PORTB = PORTB & STOP;
}

void loop()
{
  val = analogRead(A0);
  spin(val, 1023);
}
