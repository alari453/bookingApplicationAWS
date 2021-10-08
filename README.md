# bookingApplicationAWS

COSC349 Assignment 2 - Mars Reservation Booking Application

INTRODUCTION: The application Mike and I decided to do follows on from the first application we created; It continues the Mars Reservation Booking system but instead is deployed in the AWS cloud using our Amazon Educate Classroom. The booking system utilizes two virtual machines that again interact with each other. The first virtual machine hosts our booking form where the user can input their details, which is then saved on a database hosted by Amazon RDS. The second VM displays the current bookings for the Mars Reservation.

HOW TO RUN THE APPLICATION: Assuming the user has the latest version of Vagrant, running this application is fairly easy. First, the repository will need to be downloaded or cloned. To clone the repository in the terminal, use the command:

https://github.com/alari453/bookingApplicationAWS.git

Once this is complete, you can then navigate through the terminal into the directory (folder) that the repository/Vagrant file is in. In the terminal, you can then use the following command to start:

  vagrant up --provider aws

------

To gain access to our application, the EC2 instances that we created earlier have to be running. Once this is done, the application is then fairly easy to use. Simply navigate to the Public DNS of the adminserver EC2 instance:
http://ec2-18-214-23-35.compute-1.amazonaws.com/

Here, a user is presented with input fields/questions to fill out and then submit their answers in order to make a booking. After that, they can then navigate via the link to the ‘Current Bookings’ page, where they can view their booking. This page also allows any further bookings that have been made to also be viewed in a general table. The clientserver instance can also be found here:
http://ec2-3-92-152-137.compute-1.amazonaws.com/

The two EC2 instances can easily be navigated between each other via the links provided on both web pages.
