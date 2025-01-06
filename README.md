
# **EventiFy**

Specification Document for Event Management Application

________________________________________

## **1. Project Overview**

The Event Management Application aims to facilitate the organization and management of events. It provides functionalities for administrators to manage events and for users to explore and participate in events by reserving tickets. The application will adhere to web and mobile development standards.
________________________________________

## **2. Functional Requirements**

### **2.1 Admin Features**

#### **1.	Create Events:**

##### Input fields:

	Event Name.

	Event Description.

	Event Date.

	Number of Tickets.

##### Validation rules: 

	Event Name: Required, max length 100 characters.

	Event Description: Required, max length 500 characters.

	Event Date: Required, valid date format.

	Number of Tickets: Required, integer, minimum value 1.

#### **2.	Read Events:**

##### View a list of all events.

##### Sort and filter events by: 

	Date

	Name

#### **3.	Edit Events:**

##### Update any event details, including name, description, date, and ticket count.

#### **4.	Delete Events:**

##### Permanently remove events from the database.
##### Confirmation dialog to prevent accidental deletions.


### **2.2 User Features**

#### **1.	Authentification:**

##### Authentication, registration and login system.

#### **2.	View Events:**

##### Display all upcoming events in a list or grid format.

##### Search and filter events by: 

	Date

	Name


#### **3.	View Event Details:**

##### Display detailed information for a selected event: 


	Event Name

	Event Description

	Event Date

	Number of Available Tickets

#### **4.	Reserve a Ticket:**

##### Functionality to reserve one ticket for an event.
##### Decrease the available ticket count upon successful reservation.
##### Confirmation message upon successful reservation.


## **3. Non-Functional Requirements**

#### **1.	Performance:**

##### Event loading time should not exceed 2 seconds.

#### **2.	Usability:**

##### The interface should be responsive and optimized for both web and mobile platforms.

#### **3.	Security:**

##### Implement user authentication for ticket reservation.


## **4. Technical Requirements**

### **4.1 Back-End Development**

* **Language/Framework:** PHP MVC or Laravel

* **Database:** MySQL

* **Tools:** phpMyAdmin


### **4.2 Front-End Development**

* **Languages/Frameworks:** HTML, CSS, Tailwind CSS, JavaScript.

* **Tools:** Figma for design and prototyping

### **4.3 Project Management and Design**

* **Tools:** 

    Jira for project tracking.

    Figma for charte graphique and prototyping.

* **Design Artifacts:** 

    UML Diagrams (Class Diagram, Use Case Diagram).


## **5. User Stories**

### **Admin User Stories**

    As an admin, I want to create an event with detailed information so that users can view and participate.

    As an admin, I want to edit existing events to keep information up-to-date.

    As an admin, I want to delete events to remove outdated or irrelevant entries.

    As an admin, I want to view all events in a list format for easy management.


### **User Stories**

    As a user, I want to view a list of all events so that I can find events of interest.

    As a user, I want to see detailed information about an event to understand its purpose and schedule.

    As a user, I want to reserve tickets for an event to secure my participation.


## **6. UML Diagrams**

### **6.1 Use Case Diagram**

* Actors: 
    
        Admin
    
        User

* Use Cases: 
        
        Create Event, Read Events, Edit Event, Delete Event (Admin)
        
        View Events, View Event Details, Reserve Ticket (User)

### **6.2 Class Diagram**

* Classes:  

* **Event:** id, name, description, date, ticketsAvailable.

* **User:** id, name, email.

* **Reservation: ** id, userId, eventId, ticketsReserved.

## **7. Prototype Design**

* Wireframes:

        Authentication, Secure registration and login system.
        
        Home Page: Event list with search and filter options
        
        Event Details Page: Event information and ticket reservation form
        
        Admin Dashboard: CRUD interface for events

## **8. Deployment**

* Environment: 

        Local development using Laragon
        Live deployment on a web hosting service with MySQL support.
