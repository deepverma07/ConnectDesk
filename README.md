📄 Twilio Dashboard (Admin)

A simple and efficient admin dashboard built using the Twilio API to manage communication workflows including SMS, WhatsApp messaging, and voice calls.

🎯 Overview

The Twilio Dashboard (Admin) is a Minimum Viable Product (MVP) designed to centralize outbound communication in one place. It allows administrators to send messages, initiate calls, manage templates, and track logs through a clean and minimal interface.

🚀 Features
📩 Send SMS
Send SMS to any phone number
Simple input-based UI
Messages are stored in the database

📜 Message Logs
View all sent messages
Track status: Sent, Delivered, Failed
Includes timestamp and message details

📞 Call Module
Initiate calls via Twilio
Store call logs for tracking

💬 WhatsApp Messaging
Send WhatsApp messages via Twilio API
Option to:
Use predefined templates
Write custom messages

🧾 Template Management
Create and store message templates
Select templates while sending WhatsApp messages

📊 Dashboard
Displays key stats:
Total SMS sent
Total WhatsApp messages
Total calls made
Simple numeric overview (no charts)

🔐 Authentication
Admin login/logout system
Restricted access to dashboard features

🏗️ Tech Stack
Backend: Laravel (PHP)
Frontend: HTML, CSS (no frameworks)
API Integration: Twilio API
Database: MySQL

🏁MVP Scope
This project currently supports:
✅ Send SMS
✅ Send WhatsApp Messages
✅ Make Calls
✅ View Logs
✅ Use Templates

📌Future Improvements
Search & filter logs
Message scheduling
Analytics with charts
Role-based access control
Bulk messaging

📜 License
This project is open-source and available under the MIT License.
