<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Time Slot Booking App</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="container">
            <h1>Time Slot Booking App</h1>
            <div class="date-picker">
                <label for="booking-date">Select a Date:</label>
                <input type="date" id="booking-date" />
            </div>
            <div class="time-slot-container"></div>

            <div class="booked-slots-container">
                <h2>Booked Slots</h2>
                <table id="booked-slots-table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>

        <!-- Confirmation Modal -->
        <div id="confirmation-modal" class="modal hidden">
            <div class="modal-content">
                <p id="selected-slot"></p>
                <button id="confirm-btn" class="btn">Confirm</button>
                <button id="cancel-btn" class="btn cancel">Cancel</button>
            </div>
        </div>

        <!-- Cancel Booking Modal -->
        <div id="cancel-modal" class="modal hidden">
            <div class="modal-content">
                <p id="cancel-slot-message"></p>
                <button id="confirm-cancel-btn" class="btn cancel">Yes, Cancel</button>
                <button id="close-cancel-btn" class="btn">No</button>
            </div>
        </div>

        <script src="script.js"></script>
    </body>
</html>