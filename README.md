# =======================================================================================
# Name                : Capture The Flag (CTF) Website
# Author              : Zaid Siddiqui
# Version             : 1.0
# Copyright           : (c) Reserved
# Description         : A CTF Website with hidden flags placed at different locations.
# Usage               : The task of this CTF is to find all the hidden flags within a time limit.
# Difficulty          : EASY
# Required Softwares  : XAMPP, Any Desired Browser
# =======================================================================================

To use this CTF, Perform the following tasks first:

Install XAMPP Software using the following method:

1. Go to https://www.apachefriends.org/index.html
2. Download XAMPP's latest version depending upon your Operating System.
3. Place the this project in the htdocs folder of XAMPP. This folder can be located at: C:\xampp\htdocs
4. Start XAMPP and start Apache and mySQL server.
5. Go to mySQL myAdmin and create the following Database.

Database Name: obrs

Table 1: bus
1 reg       VARCHAR(500)
2 model     VARCHAR(500)
3 Company   VARCHAR(500)
4 Color     VARCHAR(500)
5 capacity  int(11)
6 driver    int(11)

Table 2: driver
1 id (Primary Key)  int(11)
2 name              VARCHAR(500)
3 address           VARCHAR(500)
4 phone             int(11)
5 salary            int(11)

Table 3: manager
1 id (Primary Key)  int(11)
2 password          int(11)
3 active            int(11)

Table 4: passenger
1 id (Primary Key)  int(11)
2 name              VARCHAR(500)
3 address           VARCHAR(500)
4 phone             int(11)
5 p1                VARCHAR(500)
6 active            int(11)

Table 5: reservation
1  resid (Primary Key)   int(11)
2  source                VARCHAR(500)
3  dest                  VARCHAR(500)
4  date                  VARCHAR(500)
5  bus                   VARCHAR(500)
6  noOfp                 int(11)
7  total                 int(11)
8  ae                    int(11)       // Amount Entered
9  ar                    int(11)       // Amount Returned
10 status                VARCHAR(500)
11 pid                   int(11)

Best of Luck for this CTF :)
