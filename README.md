## **EventSphere**  
**Specification Document for Event Management Application**  

---

## **1. Project Overview**  
EventSphere is an event management application designed to streamline the process of creating, organizing, and attending events. It caters to administrators managing event logistics and users seeking opportunities to explore and participate. The application adheres to web and mobile development standards.  

---

## **2. Functional Requirements**  

### **2.1 Admin Features**  
#### **Create Events:**  
Input fields:
- Event Name  
- Event Description  
- Event Date  
- Number of Tickets  
- Image of the event  
- Quantity  
- Category  

#### **Read Events:**  
- View a list of all events.  
- Sort and filter events by:  
  - Name  
  - Category  

#### **Edit Events:**  
- Update any event details, including name, description, date, etc.  

#### **Delete Events:**  
- Permanently remove events from the database.  
- Confirmation dialog to prevent accidental deletions.  

#### **Manage Event Categories:**  
- Add, update, or delete categories (e.g., Music, Tech, Sports).  

#### **Manage Tickets:**  
- Define the quantity of tickets.  

### **2.2 User Features**  
#### **Authentication:**  
- Authentication, registration, and login system.  

#### **View Events:**  
- Display all upcoming events in a list or grid format.  
- Search and filter events by:  
  - Category  
  - Name  

#### **View Event Details:**  
- Display detailed information for a selected event, including:  
  - Name, description, date, etc.  
  - Display ticket availability.  
  - Number of available tickets.  

#### **Reserve a Ticket:**  
- Select a ticket if available.  
- Confirmation message upon successful reservation.  

#### **User Profiles:**  
- Save favorite events for quick access.  

#### **Event Ratings and Reviews:**  
- Allow users to rate and review events they attended.  
- Display average ratings and reviews on event detail pages.  

---

## **3. Non-Functional Requirements**  

- **Performance:** Event loading time should not exceed 2 seconds.  
- **Usability:** The interface should be responsive and optimized for both web and mobile platforms.  
- **Security:** Implement user authentication for ticket reservation.  

---

## **4. Technical Requirements**  

### **4.1 Back-End Development**  
- **Language/Framework:** PHP MVC or Laravel  
- **Database:** MySQL  
- **Tools:** phpMyAdmin  

### **4.2 Front-End Development**  
- **Languages/Frameworks:**  
  - HTML, CSS, Tailwind CSS, JavaScript  
- **Tools:** Figma for design and prototyping  

### **4.3 Project Management and Design**  
- **Tools:**  
  - Jira for project tracking  
  - Figma for graphic charter and prototyping  
- **Design Artifacts:**  
  - UML Diagrams (Class Diagram, Use Case Diagram)  

---

## **5. User Stories**  

### **Admin User Stories**  
- As an admin, I want to create an event with detailed information so that users can view and participate.  
- As an admin, I want to edit existing events to keep information up-to-date.  
- As an admin, I want to delete events to remove outdated or irrelevant entries.  
- As an admin, I want to view all events in a list format for easy management.  

### **User Stories**  
- As a user, I want to view a list of all events so that I can find events of interest.  
- As a user, I want to see detailed information about an event to understand its purpose and schedule.  
- As a user, I want to reserve tickets for an event to secure my participation.  

---

## **6. UML Diagrams**  

### **6.1 Use Case Diagram**  
**Actors:**  
- Admin  
- User  

**Use Cases:**  
- Create Event, Read Events, Edit Event, Delete Event (Admin)  
- View Events, View Event Details, Reserve Ticket (User)  

### **6.2 Class Diagram**  
**Classes:**  
- **Event:** id, name, description, date, ticketsAvailable  
- **User:** id, name, email  
- **Reservation:** id, userId, eventId, ticketsReserved  

---

## **7. Prototype Design**  

### **Wireframes:**  
- **Authentication:** Secure registration and login system.  
- **Home Page:** Event list with search and filter options.  
- **Event Details Page:** Event information and ticket reservation form.  
- **Admin Dashboard:** CRUD interface for events.  

---

## **8. Deployment**  

### **Environment:**  
- Local development using Laragon.  
- Live deployment on a web hosting service with MySQL support.  

---

## **Graphic Charter for EventSphere**  

### **1. Logo and Branding**  
**Logo:**  
- Option 1: Simple text logo (EventSphere).  
- Option 2: Event symbol with the name.  
- **Primary color for the logo:** Gradient blend of #d28bea and #721093.  

**Slogan:**  
- *The Sphere of Memorable Moments.*  

### **2. Color Palette**  

#### **Primary Colors:**  
- Dark mode: #d28bea  
- Light mode: #5d1574  

#### **Secondary Colors:**  
- Dark mode: #721093  
- Light mode: #ce6cef  

#### **Neutral Colors:**  
- Dark mode: #c228f6  
- Light mode: #a409d7  

#### **Background:**  
- Dark mode: #0d0410  
- Light mode: #f8effb  

#### **Text:**  
- Dark mode: #f4e9f7  
- Light mode: #130816  

---

### **3. Typography**  

**Font:**  
- Poppins or Montserrat (Sans-serif).  

**Size:**  
- Headings: 24px, 20px, 18px (H1, H2, H3).  
- Body Text: 14px-16px.  
- Small Text: 12px.  

---

### **4. Icons**  
- Use flat icons with solid colors.  
- Source: Material Design Icons or Font Awesome.  

---

### **5. Interaction Guidelines**  
- **Hover Effects:** Buttons and links change color or underline.  
- **Transitions:** Smooth transitions for UI animations (0.3 seconds for hover states).  
- **Feedback:**  
  - Confirmation messages in **#4CAF50** for success.  
  - Error messages in **#F44336** for issues.  

---

