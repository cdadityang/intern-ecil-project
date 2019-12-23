# Home Automation using ARM7 and GPRS

> Codebase for my 1 month winter internship at [ECIL, Hyderabad](http://ecil.co.in/) in Embedded Systems division

## Concept:
- The Concept is simple, We have a LPC2148 ARM7 based Microcontroller which is connected to 4 devices - Fan, Bulb, AC and TV
- We also have a SIM900A GPRS Module, which has a Indian telecom SIM card connected.
- We program LPC2148 ARM7 such that it takes input from SIM900A GPRS Module and switches ON(output) a particular device.
- We used PHP for our website and it is hosted on a web server.
- We program SIM900A GPRS Module with `AT` Commands to connect to our webserver. It will fetch the `text.txt` file which will a number of particule device:
    - `0000` - All Devices OFF - Default
    - `0001` - Bulb
    - `0010` - Fan
    - `0100` - TV
    - `1000` - AC
- So when GRPS fetches, say `0010` from `text.txt`, then this output is given to LPC2148, which will process it and will Switch ON Fan.
- Similarly the rest of the devices are Switched ON and OFF.