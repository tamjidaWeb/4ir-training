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
            alert('Form submitted successfully!'); // Or handle successful form submission
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

function updateCourses() {
    const location = document.getElementById("location").value;
    const courseSelect = document.getElementById("course");

    // Clear existing options
    courseSelect.innerHTML = '<option value="">Courses</option>';

    // Define courses based on location
    let courses = [];
    if (location === "dhaka") {
        courses = [
            {
                value: "12",
                text: "Embedded Systems Schematic & Circuit Design",
            },
            { value: "13", text: "Microcontroller Embedded C Programming" },
            { value: "7", text: "Automation 360 Master" },
            { value: "9", text: "Robotic process automation Develope" },

        ];
    }
    else if (location === "khulna") {
        courses = [
            {
                value: "5",
                text: "Machine Learning Professional",
            },

        ];
    }
    else if (location === "sylhet") {
        courses = [
            {
                value: "6",
                text: "Automation 360 Professional",
            },

        ];
    }
    else if(location === "rajshahi") {
        courses = [
            {
                value: "8",
                text: "Robotic process automation Associate",
            },

        ];
    }
    else {
        courses = [
            {
                value: "14",
                text: "There are no courses available in your location!!",
            },

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
