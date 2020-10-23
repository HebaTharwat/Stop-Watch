# StopWatch
This project is an implementation of a stopwatch on an Atmega16 microcontroller, written in embedded C.

## Simulation
![Mini-Project1-Proteus-8-Professi (1)](https://user-images.githubusercontent.com/32434683/97014113-37088300-154a-11eb-8bf3-c26c1b337f35.gif)

## How it works
One push button is responsible to start /reset the counter. The time is counted on timer0 of the atmega16 microcontroller. Time is displayed live on a multiplied segment. second button, is responsible for pausing the counter.Finally, the third button resumes the count but only if the pausing button was pressed.

## Parts
The stopwatch consists of:
* atmega16 microcontroller
* multiplied 7-segments.
* 3 push buttons
