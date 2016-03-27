# About noCO2

noCO2 is a PHPMySQL web application whose main theme is sustainability. It is a prototype of garbage management system implemented in smart cities. 

The idea is to mimic the data collection (from sensors in smart cities) by using a user-interface which has a list of garbages. The users click on the different kinds of garbages which represnts the real-world action of filling garbage in the garbage bags in homes. There will be a send button which sends thus cretead garbage data to the processing center. Here all sorts of analysis can be done based on the garbage data.

We focus maninly on the CO2 emission, wastage, and may be some other factors that raises awarness among the users.

All the processed information will then be made available as an API to the outside world.

So broadly, there will be three sections:

1. Data Producers (For now a UI, but later can be replaced by a sensor system, if possible/feasible)
2. Data Processor (Input the data, process, save the output to the database)
3. Data Availability / API (Outside world can access the data vai the API)


The system will implement the Serivce Oriented Architecture  so all the components should be independent or minimally independent of each other.

# Assumptions:

The system assumes that the infrastracture need for this system to work on already exists. It also assumes that the data is generated from the sensors while infact we have a user interface for the users to create data.

Challanges for the sensor system:

	* how to categorise different garbage?
	* what if some garbage cans have some food remaining in them? How to calculate the marginal wastage ?
	* Will it be feasible to turn the sensors on 24X7 ?


# Possibilites:

Apart from the user-interface to create the data, we can also create a port-scanner / processor in the processing section that can read data from a specific port. In future, if we can replace the user-interface with real sensors, we can do this my making no change in the processing section. It will be like unplugging the user-interface and pluggin in the sensor systems. The only thing to keep in mind is both the user-interfaces and the sensor systems shall throw the data in the same fashion in both cases.