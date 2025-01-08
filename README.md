## **EventSphere**  
**Specification Document for Event Management Application**  

________________________________________  

## **1. Project Overview**  
EventSphere is an event management application designed to streamline the process of creating, organizing, and attending events. It caters to administrators managing event logistics and users seeking opportunities to explore and participate. The application adheres to web and mobile development standards.  

________________________________________  

## **2. Functional Requirements**  

### **2.1 Admin Features**  

#### **1. Create Events:**  
##### Input fields:  
- Event Name  
- Event Description  
- Event Date  
- Number of Tickets  
- Image of the Event  
- Price  
- Category  

#### **2. Read Events:**  
- View a list of all events.  
- Sort and filter events by:  
  - Name  
  - Category  

#### **3. Edit Events:**  
- Update any event details, including name, description, date, etc.  

#### **4. Delete Events:**  
- Permanently remove events from the database.  
- Include a confirmation dialog to prevent accidental deletions.  

#### **5. Manage Event Categories:**  
- Add, update, or delete categories (e.g., Music, Tech, Sports).  

#### **6. Manage Ticket Types:**  
- Define ticket tiers (e.g., General, Silver, Gold, VIP).  
- Assign pricing, availability, and perks for each tier.  
- Manage inventory for each ticket type.  

### **2.2 User Features**  

#### **1. Authentication:**  
- Authentication, registration, and login system.  

#### **2. View Events:**  
- Display all upcoming events in a list or grid format.  
- Search and filter events by:  
  - Category  
  - Name  

#### **3. View Event Details:**  
- Display detailed information for a selected event, including:  
  - Pricing and benefits for each ticket type.  
  - Availability for each ticket tier.  
  - Number of Available Tickets.  

#### **4. Reserve a Ticket:**  
- Select ticket types (e.g., General, Silver, Gold).  
- Display a confirmation message upon successful reservation.  

#### **5. User Profiles:**  
- Save favorite events for quick access.  

#### **6. Event Ratings and Reviews:**  
- Allow users to rate and review events they attended.  
- Display average ratings and reviews on event detail pages.  

________________________________________  

## **3. Non-Functional Requirements**  

#### **1. Performance:**  
- Event loading time should not exceed 2 seconds.  

#### **2. Usability:**  
- The interface should be responsive and optimized for both web and mobile platforms.  

#### **3. Security:**  
- Implement user authentication for ticket reservation.  

________________________________________  

## **4. Technical Requirements**  

### **4.1 Back-End Development**  
- **Language/Framework:** PHP MVC or Laravel  
- **Database:** MySQL  
- **Tools:** phpMyAdmin  

### **4.2 Front-End Development**  
- **Languages/Frameworks:**  
  - HTML, CSS, Tailwind CSS, JavaScript  
  - Frameworks TBD  

- **Tools:** Figma for design and prototyping  

### **4.3 Project Management and Design**  
- **Tools:**  
  - Jira for project tracking  
  - Figma for charte graphique and prototyping  

- **Design Artifacts:**  
  - UML Diagrams (Class Diagram, Use Case Diagram)  

________________________________________  

## **5. User Stories**  

### **Admin User Stories**  
1. As an admin, I want to create an event with detailed information so that users can view and participate.  
2. As an admin, I want to edit existing events to keep information up-to-date.  
3. As an admin, I want to delete events to remove outdated or irrelevant entries.  
4. As an admin, I want to view all events in a list format for easy management.  

### **User Stories**  
1. As a user, I want to view a list of all events so that I can find events of interest.  
2. As a user, I want to see detailed information about an event to understand its purpose and schedule.  
3. As a user, I want to reserve tickets for an event to secure my participation.  

________________________________________  

## **6. UML Diagrams**  

### **6.1 Use Case Diagram**  
- **Actors:**  
  - Admin  
  - User  

- **Use Cases:**  
  - Create Event, Read Events, Edit Event, Delete Event (Admin)  
  - View Events, View Event Details, Reserve Ticket (User)  

### **6.2 Class Diagram**  
- **Classes:**  
  - **Event:** id, name, description, date, ticketsAvailable, category, price, image  
  - **User:** id, name, email  
  - **Reservation:** id, userId, eventId, ticketsReserved  
  - **Category:** id, name  
  - **TicketType:** id, name, price, perks  

________________________________________  

## **7. Prototype Design**  

- **Wireframes:**  
  - Authentication, secure registration, and login system  
  - Home Page: Event list with search and filter options  
  - Event Details Page: Event information and ticket reservation form  
  - Admin Dashboard: CRUD interface for events  

________________________________________  

## **8. Deployment**  

- **Environment:**  
  - Local development using Laragon  
  - Live deployment on a web hosting service with MySQL support  

________________________________________  
