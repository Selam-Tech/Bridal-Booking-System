console.log("JS Loaded ✅");

document.addEventListener("DOMContentLoaded", function () {

    const weddingInput = document.getElementById("wedding_date");
    const statusText = document.getElementById("date-status");
    const form = document.querySelector(".booking-form");

    let isDateAvailable = true;

    // ✅ ONLY run calendar code if input exists
    if (weddingInput) {

        // 🔥 GET BOOKED DATES
        fetch("/pure-pictures-website/pages/get-booked-dates.php")
            .then(res => res.json())
            .then(bookedDates => {

                console.log("Booked dates:", bookedDates);

                // ✅ SAFE CHECK (prevents crash)
                if (typeof flatpickr !== "undefined") {

                    flatpickr("#wedding_date", {
                        dateFormat: "Y-m-d",

                        disable: bookedDates, // 🚫 disable booked dates

                        onChange: function(selectedDates, dateStr) {

                            if (bookedDates.includes(dateStr)) {
                                statusText.innerHTML = "❌ This date is already booked";
                                statusText.style.color = "red";
                                isDateAvailable = false;
                            } else {
                                statusText.innerHTML = "✅ Date is available";
                                statusText.style.color = "green";
                                isDateAvailable = true;
                            }

                        },

                        // 🎨 style booked dates
                        onDayCreate: function(dObj, dStr, fp, dayElem) {
                            const date = dayElem.dateObj.toISOString().split('T')[0];

                            if (bookedDates.includes(date)) {
                                dayElem.classList.add("booked-day");
                            }
                        }
                    });

                } else {
                    console.error("Flatpickr not loaded ❌");
                }

            })
            .catch(err => console.error("Fetch error:", err));
    }

    // 🚫 BLOCK SUBMIT (works globally)
    if (form) {
        form.addEventListener("submit", function (e) {

            if (!isDateAvailable) {
                e.preventDefault();
                alert("❌ This date is already booked. Choose another.");
            }

        });
    }

});