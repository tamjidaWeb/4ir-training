// console.log(connected');
document
    .getElementById("applicationForm")
    .addEventListener("submit", function (event) {
        event.preventDefault();

        let errorMessage = "";

        // Get form values
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const contact = document.getElementById("contact").value.trim();
        const degree = document.getElementById("degree").value.trim();
        const institute = document.getElementById("institute").value.trim();

        // Validate Name
        if (name === "") {
            errorMessage += "Name is required.<br>";
        }

        // Validate Email
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email === "" || !emailPattern.test(email)) {
            errorMessage += "Valid email is required.<br>";
        }

        // Validate Contact No
        //   const contactPattern = /^\d{11}$/; // assuming 10 digit contact number
        //   if (contact === '' || !contactPattern.test(contact)) {
        //       errorMessage += 'Valid contact number (11 digits) is required.<br>';
        //   }

        if (!/^\d{11}$/.test(contact)) {
            errorMessage += "Valid contact number (11 digits) is required.<br>";
        }

        // Validate Degree and Institute
        if (degree === "") {
            errorMessage += "Degree is required.<br>";
        }

        if (institute === "") {
            errorMessage += "Institute is required.<br>";
        }

        // Display errors or submit the form
        const errorMessageElement = document.getElementById("error-message");
        if (errorMessage) {
            errorMessageElement.innerHTML = errorMessage;
        } else {
            errorMessageElement.innerHTML = "";
            //alert('Form submitted successfully!'); // Or handle successful form submission
            // You can add your form submission logic here

            // submit the form
            document.getElementById("applicationForm").submit();
        }
    });

// .load_more_content click show .load_for_mobile_device with raw js
document
    .getElementById("load_more_content")
    .addEventListener("click", function () {
        document.getElementById("load_more_content").style.display = "none";
        document.getElementById("load_for_mobile_device").style.display =
            "block";
    });

document.getElementById("load_less").addEventListener("click", function () {
    document.getElementById("load_more_content").style.display = "inline-block";
    document.getElementById("load_for_mobile_device").style.display = "none";
});

function toggleFields() {
    const employmentFields = document.getElementById("employmentFields");
    const isEmployed = document.querySelector(
        'input[name="employment"]:checked'
    ).value;

    if (isEmployed === "yes") {
        employmentFields.classList.remove("hidden");
    } else {
        employmentFields.classList.add("hidden");
    }
}

// courses and locations----------------------------------------------------

// function updateCourses() {
//     const location = document.getElementById("location").value;
//     console.log(location);

//     const courseSelect = document.getElementById("course");

//     // Clear existing options
//     courseSelect.innerHTML = '<option value="">Courses</option>';

//     // Define courses based on location
//     let courses = [];
//     if (location === "dhaka") {
//         courses = [
//             {
//                 value: "12",
//                 text: "Embedded Systems Schematic & Circuit Design",
//             },
//             { value: "13", text: "Microcontroller Embedded C Programming" },
//             { value: "13", text: "Microcontroller Embedded C Programming" },
//         ];
//     } else if (location === "sylhet") {
//         courses = [
//             {
//                 value: "12",
//                 text: "Embedded Systems Schematic & Circuit Design",
//             },
//             { value: "13", text: "Microcontroller Embedded C Programming" },
//             { value: "13", text: "Microcontroller Embedded C Programming" },
//         ];
//     }

//     // Add courses to the select element
//     courses.forEach((course) => {
//         const option = document.createElement("option");
//         option.value = course.value;
//         option.textContent = course.text;
//         courseSelect.appendChild(option);
//     });
// }


function updatePhase() {
    const phaseSelect = document.getElementById("phase"); // Phase dropdown
    const locationSelect = document.getElementById("location"); // Location dropdown

    // Clear existing options in the location dropdown
    locationSelect.innerHTML = '<option selected disabled value="">Locations</option>';

    // Phase data with locations and timelines
    const phaseData = {
        "Phase 1": [
            {value: "dhaka", text: "Dhaka"},
            {value: "khulna", text: "Khulna"},
            {value: "sylhet", text: "Sylhet"},
            {value: "rajshahi", text: "Rajshahi"},
        ],
        "Phase 2": [
            {value: "dhaka", text: "Dhaka"},
        ],
        "Phase 3": [
            {value: "dhaka", text: "Dhaka"},
            {value: "chattogram", text: "Chattogram"},
        ],
    };

    // Get the selected phase
    const selectedPhase = phaseSelect.value;

    // Check if the selected phase exists in phaseData
    if (phaseData[selectedPhase]) {
        // Populate the location dropdown with options from the selected phase
        phaseData[selectedPhase].forEach((location) => {
            const option = document.createElement("option");
            option.value = location.value;
            option.textContent = location.text;
            locationSelect.appendChild(option);
        });
    }
}


function updateCourses() {
    const location = document.getElementById("location").value; // Location selected
    const phase = document.getElementById("phase").value; // Phase selected
    const courseSelect = document.getElementById("course");

    // Clear existing options in the course dropdown
    courseSelect.innerHTML = '<option value="">Courses</option>';

    // Define courses based on phase and location
    let courses = [];

    // Phase 1 Courses
    if (phase === "Phase 1") {
        if (location === "dhaka") {
            courses = [
                {value: "Embedded Systems Schematic & Circuit Design", text: "Embedded Systems Schematic & Circuit Design"},
                {value: "Microcontroller Embedded C Programming", text: "Microcontroller Embedded C Programming"},
                {value: "Automation 360 Master", text: "Automation 360 Master"},
                {value: "Robotic Process Automation Developer", text: "Robotic Process Automation Developer"}
            ];
        } else if (location === "khulna") {
            courses = [
                {value: "Machine Learning Professional", text: "Machine Learning Professional"}
            ];
        } else if (location === "sylhet") {
            courses = [
                {value: "Automation 360 Professional", text: "Automation 360 Professional"}
            ];
        } else if (location === "rajshahi") {
            courses = [
                {value: "Robotic Process Automation Associate", text: "Robotic Process Automation Associate"}
            ];
        }
    }
    // Phase 2 Courses
    else if (phase === "Phase 2") {
        if (location === "dhaka") {
            courses = [
                {value: "Data Analytics", text: "Data Analytics"},
                {value: "Power BI Data Analyst", text: "Power BI Data Analyst"},
                {value: "Artificial Intelligence Professional", text: "Artificial Intelligence Professional"},
                {value: "Artificial Intelligence Expert", text: "Artificial Intelligence Expert"}
            ];
        }
    }
    // Phase 3 Courses
    else if (phase === "Phase 3") {
        if (location === "dhaka") {
            courses = [
                {value: "Machine Learning Professional", text: "Machine Learning Professional"},
                {value: "Information Systems Security", text: "Information Systems Security"},
                {value: "Governance of Enterprise IT", text: "Governance of Enterprise IT"}
            ];
        } else if (location === "chattogram") {
            courses = [
                {value: "Power BI Data Analyst", text: "Power BI Data Analyst"}
            ];
        }
    }

    // If no courses match, display a message
    if (courses.length === 0) {
        courses = [
            {value: "0", text: "No courses available for this location and phase combination."}
        ];
    }

    // Add courses to the select element
    courses.forEach((trainingCourse) => {
        const option = document.createElement("option");
        option.value = trainingCourse.value;
        option.textContent = trainingCourse.text;
        courseSelect.appendChild(option);
    });
}

